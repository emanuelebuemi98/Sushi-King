<?php
  require ('accessoDB.php');
// Definizione metodo HTTP, la richiesta del path e l'input in formato JSON
  $metodo_HTTP = $_SERVER['REQUEST_METHOD'];
  $richiesta = explode('/', trim($_SERVER['PATH_INFO'],'/'));
  $input = json_decode(file_get_contents('php://input'),true);

// Ottengo la tabella e una variabile chiave direttamente dal path
  $tabella = preg_replace('/[^a-z0-9_]+/i','',array_shift($richiesta));
  $_key = array_shift($richiesta);
  $key = $_key;
  
  // specifica i caratteri:togliendo i caratteri speciali e gli spazi
    if(isset($input)){
      $columns = preg_replace('/[^a-z0-9_]+/i','',array_keys($input));
      $values = array_map(function ($value) use ($con) {
      if ($value===null) return null;
      return mysqli_real_escape_string($con,(string)$value);
    },array_values($input));
    }
  // Creo variabile $set che conterrà i miei dati inseriti da input
    if(isset($input)){
      $set = '';
      for ($i=0;$i<count($columns);$i++) {
        $set.=($i>0?',':'').'`'.$columns[$i].'`=';
        $set.=($values[$i]===null?'NULL':'"'.$values[$i].'"');
      }
    }
  // In base al metodo HTTP selezionato effettuerà una query diversa
    switch ($metodo_HTTP) {
      case 'GET':
        $query = "SELECT * FROM `$tabella`".($key?" WHERE idpost=\"$key\"":'')."ORDER BY idpost DESC"; break;
      case 'PUT':
        $query = "UPDATE `$tabella` SET $set WHERE idpost=\"$key\""; break;
      case 'POST':
        $query = "INSERT INTO `$tabella` SET $set"; break;
      case 'DELETE':
        $query = "DELETE FROM `$tabella` WHERE idpost=\"$key\" "; break;
      }


        // Esecuzione della query, qualunque essa sia, selezionata dallo switch-case
          $result = mysqli_query($con,$query);
          // Se la query fallisce...
          if (!$result) {
            die (mysqli_error($con));
          }
        // La stampa sarà diversa a seconda del metodo HTTP
          if ($metodo_HTTP == 'GET') {
            if (!$key) echo '[';
            for ($i=0;$i<mysqli_num_rows($result);$i++) {
              echo ($i>0?',':'').json_encode(mysqli_fetch_object($result));
            }
            if (!$key) echo ']';
          } elseif ($metodo_HTTP == 'POST') {
            echo "Inserimento effettuato con successo";
          } else {
            echo "Righe Modificate: " . mysqli_affected_rows($con);
          }
        // chiusura database
          mysqli_close($con);
          ?>
