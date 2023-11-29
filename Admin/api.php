<?php
  require ('accessoDB.php'); //connessione al database

// Definizione metodo HTTP, la richiesta del path e l'input in formato JSON
  $metodo_HTTP = $_SERVER['REQUEST_METHOD']; //determina il metodo della richiesta HTTP (GET, PUT, POST, DELETE) e quali operazioni passare sui dati (operazione di select, update, insert, delete)
  $richiesta = explode('/', trim($_SERVER['PATH_INFO'],'/')); //la funzione explode partendo dal carattere / suddivide la stringa (il nostro URL) in un array con vari pezzi separati da /, $_SERVER['PATH_INFO'] ci da l'URL passato dalla richiesta, la funzione trim va a togliere lo slash 
  $input = json_decode(file_get_contents('php://input'),true); //prendiamo il contenuto completo della richiesta HTTP mediante la funzione file_get_contents, la funzione json_deconde ci andra a prendere una stringa in formato json e la decodifica per farla diventare un array associativo (le coppiè chiave valore sono inviate in formato JSON)

// Ottengo gli elementi della tabella e una variabile chiave direttamente dal path
  $tabella = preg_replace('/[^a-z0-9_]+/i','',array_shift($richiesta)); //andiamo a prendere dall'URL i dati che individuano la tabella. Con array_shift prendiamo il primo elemento dalla tabella e con preg_replace andiamo a sostituire tutti quei caratteri speciali (che sono diversi da quelli indicati li) con il carattere vuoto
  $_key = array_shift($richiesta); // preleavando un elemento lo togliamo anche dall'array
  $key = $_key; // facciamo un ulteriore shift ottenendo il secondo elemento della tabella

// prendiamo gli attributi (columns) e i valori che ci serviranno a fare le query
    if(isset($input)){ //se l'input (stringa json decodificata in array associativo) è settato, vengono costruiti due array: columns e values
      $columns = preg_replace('/[^a-z0-9_]+/i','',array_keys($input)); // questo primo array attraverso la funzione array_keys prende le chiavi dell'array input (username, password, ecc..) e come fatto prima andiamo a sostituire tutti quei caratteri speciali (che sono diversi da quelli indicati li) con il carattere vuoto mediante la funzione preg_replace
      $values = array_map(function ($value) use ($con) { //questo secondo array $values mediante la funzione array_map applichiamo una funzione di callback ad ogni elemento dell'array, ovvero passiamo ogni valore dell'array input
      if ($value===null) return null;
      return mysqli_real_escape_string($con,(string)$value); // se il valore non è nullo applichiamo la funzione mysqli_real_escape_string che ci restituisce la stringa facendo l'escape di questo valore (stiamo facendo l'escape di tutti i caratteri speciali per l'array input)
    },array_values($input)); //restituiamo un array contenente il risultato dell'applicazione della funzione di callback con tutti i valori passati nell'input
    }

  // Creo variabile $set che conterrà i miei dati inseriti da input
    if(isset($input)){ //se l'input è settato, cioè se c'è un corpo nel messagio va a settare la parte set della query
      $set = '';  //creo la variabile che mi conterrà i dati

      for ($i=0;$i<count($columns);$i++) { //faccio un ciclo sulle colonne dove vado ad aggiungere...
        $set.=($i>0?',':'').'`'.$columns[$i].'`='; //chiave='valore', chiave='valore' ... (cioè i caratteri di , '' e = tra chiave e valore)
        $set.=($values[$i]===null?'NULL':'"'.$values[$i].'"'); //se il valore dell'array è nullo restituisco null altrimenti restituisce il valore tra apici dell'array
      }
    }

// In base al metodo HTTP selezionato effettuerà una query diversa
  switch ($metodo_HTTP) { //mappiamo il metodo 
    case 'GET':  //lettura
      $query = "SELECT * FROM `$tabella`".($key?" WHERE email=\"$key\"":'')."ORDER BY idutente"; break; // poichè nel metodo GET non abbiamo specificato key ci compariranno tutti gli utenti, se invece avevamo specificato la key ci compariva solo email 
    case 'PUT': //modifica
      $query = "UPDATE `$tabella` SET $set WHERE idutente=\"$key\""; break; //nel metodo PUT specifichiamo la chiave (mettendo la clausula WHERE)  in quanto la modifica deve essere fatta su un utente specifico
    case 'POST': //inserimento
      $query = "INSERT INTO `$tabella` SET $set"; break; //viene inserito un nuovo utente (non abbiamo bisogno di specificare la chiave)
    case 'DELETE': //cancellazione
      $query = "DELETE FROM `$tabella` WHERE idutente=\"$key\" "; break; //nel metodo DELETE specifichiamo la chiave (mettendo la clausula WHERE)  in quanto viene eliminato l'utente specificato
  }

  // Esecuzione della query, selezionata dallo switch-case
  // Ne eseguiamo soltanto una in base al metodo scelto 
    $result = mysqli_query($con,$query); //passiamo la query che rappresenta l'operazione da eseguire + la connesione al database

    // Se la query fallisce... 
    if (!$result) {
      die (mysqli_error($con)); //viene dato un messaggio di errore (tramite die) e viene chiusa la connessione al database 
    }
  // altrimenti verra preparato il risultato per essere invocato dal client 

  // La stampa sarà diversa a seconda del metodo HTTP
    if ($metodo_HTTP == 'GET') { //se  il metodo è GET
      if (!$key) echo '['; //se non ho specificato la chiave stampo [] perchè andremo a visualizzare un array di oggetti (visualizzeremo tutti gli utenti)
      for ($i=0;$i<mysqli_num_rows($result);$i++) { // costruisco un ciclo che va da 0 fino al n° di righe che è composto il risultato (questo grazie alla funzione mysqli_num_rows)
        echo ($i>0?',':'').json_encode(mysqli_fetch_object($result)); // se i>0 metto la virgola (per il secondo oggetto) altrimenti metto il valore vuoto dopo di che mediante la funzione json_encode andiamo a codificare come stringa json l'oggetto restituito dalla funzione mysqli_fetch_object (che prende un oggetto dal risultato ogni volta che viene usata la funzione) 
        //pertanto visualizzeremo tutti gli oggetti relativi all'utente
      }
      if (!$key) echo ']'; // alla fine mettero la chiusura della ]
    } elseif ($metodo_HTTP == 'POST') { 
      echo "Inserimento effettuato con successo"; // se il metodo è POST stamperemo...
    } else {
      echo "Righe Modificate: " . mysqli_affected_rows($con); // altrimenti se i metodi sono PUT o DELETE stamperemo... con il numero delle righe modificate
    }

// chiusura database
  mysqli_close($con);
  ?>
