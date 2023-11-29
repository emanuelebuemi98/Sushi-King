<?php
	session_start();
	if($_SESSION["utente"]=="admin")
   echo "";
   else
 header("location:../registrazione.php");
?>
<html>
<head>
<title>SushiKing</title>
<link rel="stylesheet" type="text/css" href="color.css">
</head>
    <body background="" >

<div id="contenitore">
<!--header-->
<div id="header">
	<div id="logo"></div>
	</div>

<!--barra menù-->
<div class="nav">
<!--Menù home-->
<ul  id="menu" class="menu"> <!-- lista principale: definisce il menu nella sua interezza -->
    <li class="">
        <a href="areaamm.php">Home</a> <!-- prima voce del menu -->
	</li>

          <!--Menù Login-->

   	 <li class="">
<b>
<a><font color="black">attività </a><!-- seconda voce del menu -->
    </b>
    </font>
    <ul>
     <li><a href="utenti.php">Lista utenti</a></li><br>
     <li><a href="ordinazioniamm.php">Ordinazioni</a></li><br>
     <li><a href="messamm.php">Area commenti</a></li><br>
    <li> <a href="chiudi.php">Esci!</a></li><br>
</ul>
    </li>
</div>
	<script>
	window.onload = metodo; // ci permette di eseguire la funzione metodo quando il documento è stato caricato

      function metodo(){
// in base all'evento click sul bottone premuto, definito qui tramite il suo ID, verrà avviata la funzione corrispondente
        document.getElementById("get").addEventListener("click", visualizza_utenti);
		document.getElementById("put").addEventListener("click", modifica_utenti);
		document.getElementById("post").addEventListener("click", inserisci_utente);
        document.getElementById("delete").addEventListener("click", elimina_utente);
      }

// La funzione visualizza_utenti è una funzione che implementa il tipo di richiesta "HTTP GET" intercettata nel file "api.php" e agisce sulla tabella utenti 
      function visualizza_utenti(){
        var request = new XMLHttpRequest(); // creo la variabile request e dichiaro la richiesta XMLHttpRequest che servirà per inviare i dati al server
        request.onload = function(){document.getElementById("ajax").innerHTML = request.responseText;}; //Se la richiesta viene eseguita correttamente carichiamo sull'elemento con id=ajax il risultato della risposta
        request.open("get", "api.php/utenti/", true); //Avvio la richiesta specificandone il tipo "GET", che verrà aperta dal file "api.php" e che agirà sulla tabella utenti
        request.send();//Invio la richiesta al server
      }

// La funzione modifica_utenti è una funzione che implementa il tipo di richiesta "HTTP PUT " intercettata nel file "api.php" e agisce sulla tabella utenti 
	  function modifica_utenti(){
	    var info = {}; // creo questo array che conterrà tutte le info che verranno inserite tramite gli input. 
		info.idutente= document.getElementById("idutente").value;//Inserisco nell'array l'id inserito
		info.nome=document.getElementById("nome").value;//Inserisco nell'array il nome
		info.cognome = document.getElementById("cognome").value; // Inserisco nell'array il cognome
	    info.userid=document.getElementById("userid").value;//Inserisco nell'array l'userid
		info.pass = document.getElementById("pass").value; // Inserisco nell'array la password
		info.via = document.getElementById("via").value;//Inserisco nell'array la via
		info.numerovia=document.getElementById("numerovia").value;//Inserisco nell'array il numero di via
		info.telefono = document.getElementById("telefono").value; // Inserisco nell'array il numero di telefono
		info.email = document.getElementById("email").value; // Inserisco nell'array l'email
		info.citta = document.getElementById("Citta").value; // Inserisco nell'array la città
		info.cap = document.getElementById("CAP").value; // Inserisco nell'array il CAP
		var jsondata = JSON.stringify(info); // inserisco nella variabile jsondata i dati compatti dell'array info che verranno presi come stringhe in formato json grazie alla funzione JSON.stringify
		var req = new XMLHttpRequest(); // creo la variabile req e dichiaro la richiesta XMLHttpRequest che servirà per inviare i dati al server
		req.onload = function(){document.getElementById("ajax").innerHTML = req.responseText;}; //Se la richiesta viene eseguita correttamente carichiamo sull'elemento con id=ajax il risultato della risposta
		req.open("put", "api.php/utenti/" + document.getElementById("idutente").value, true); //Avvio la richiesta specificandone il tipo "PUT", che verrà aperta dal file "api.php" e che agirà sulla tabella utenti prendendo l'idutente che voglio andare a modificare
	    req.send(jsondata); // Invio la richiesta con il file json al server http
	  }

// La funzione inserisci_utente è una funzione che implementa il tipo di richiesta "HTTP POST" intercettata nel file "api.php" e agisce sulla tabella utenti 
	  function inserisci_utente(){
		var info = {}; // creo questo array che conterrà tutte le info che verranno inserite tramite gli input. 
		info.idutente= document.getElementById("idutente").value;//Inserisco nell'array l'id inserito
		info.nome=document.getElementById("nome").value;//Inserisco nell'array il nome
		info.cognome = document.getElementById("cognome").value; // Inserisco nell'array il cognome
		info.userid=document.getElementById("userid").value;//Inserisco nell'array l'userid
		info.pass = document.getElementById("pass").value; // Inserisco nell'array la password
		info.via = document.getElementById("via").value;//Inserisco nell'array la via
		info.numerovia=document.getElementById("numerovia").value;//Inserisco nell'array il numero di via
		info.telefono = document.getElementById("telefono").value; // Inserisco nell'array il numero di telefono
		info.email = document.getElementById("email").value; // Inserisco nell'array l'email
		info.citta = document.getElementById("Citta").value; // Inserisco nell'array la città
		info.cap = document.getElementById("CAP").value; // Inserisco nell'array il CAP
		var jsondata = JSON.stringify(info); // inserisco nella variabile jsondata i dati compatti dell'array info che verranno presi come stringhe in formato json grazie alla funzione JSON.stringify
		var req = new XMLHttpRequest(); // creo la variabile req e dichiaro la richiesta XMLHttpRequest che servirà per inviare i dati al server
		req.onload = function(){document.getElementById("ajax").innerHTML = req.responseText;}; //Se la richiesta viene eseguita correttamente carichiamo sull'elemento con id=ajax il risultato della risposta
		req.open("post", "api.php/utenti/" + document.getElementById("idutente").value, true); //Avvio la richiesta specificandone il tipo "POST", che verrà aperta dal file "api.php" e che agirà sulla tabella utenti inserendo l'idutente che voglio andare a inserire
		req.send(jsondata); // Invio la richiesta con il file json al server http
	  }

// La funzione elimina_utente è una funzione che implementa il tipo di richiesta "HTTP DELETE" intercettata nel file "api.php" e agisce sulla tabella utenti 
      function elimina_utente(){
        var req = new XMLHttpRequest(); // creo la variabile req e dichiaro la richiesta XMLHttpRequest che servirà per inviare i dati al server
        req.onload = function(){document.getElementById("ajax").innerHTML = req.responseText;}; //Se la richiesta viene eseguita correttamente carichiamo sull'elemento con id=ajax il risultato della risposta
        req.open("delete", "api.php/utenti/" + document.getElementById("idutente").value, true); //Avvio la richiesta specificandone il tipo "DELETE", che verrà aperta dal file "api.php" e che agirà sulla tabella utenti inserendo l'idutente che voglio andare a eliminare
        req.send(); // Invio la richiesta al server http
      }
    </script>

</head>
<body>
	 <table bordercolor="#1560BD"; align="center"; width="100%" height="529" ;bgcolor="#000000"; border="3"; >
    <tr>
      <td width="550"  bgcolor="#EFEFEF" >
        <div align='center'>
          <font color="#000000">
            <h2><b>Utenti del SushiKing | Opzioni Amministratore</b></h2>
          </font>
          <br><br>
          <input id="idutente" type="number"  min="1" placeholder="ID" required><br><br>
          <input id="nome" type="text" placeholder="Nome" required>
          <input id="cognome" type="text" placeholder="Cognome" required><br><br>
		  <input id="userid" type="text" placeholder="Username" required>
		  <input id="pass" type="text" placeholder="Password" required><br><br>
		  <input id="via" type="text"  placeholder="Via" required>
		  <input id="numerovia"type="text" placeholder="Numero via" required><br><br>
		  <input id="telefono"  type="number" placeholder="Telefono" required><br><br>
		  <input id="email" type="text" placeholder="E-Mail"  required><br><br>
		  <input id="Citta" type="text"  placeholder="Città" required>
		  <input id="CAP"  type="number" placeholder="CAP"  required><br><br>

          <br><br>
          <button id="get">Visualizza Utenti</button>
		  <button id="put">Modifica Utenti</button>
		  <button id="post">Aggiungi Utente</button>
          <button id="delete">Cancella Utente</button>
          <br><br>

          <p id="ajax" style="max-width:900px; word-wrap: break-word;"></p>
				</div>
				</div>





</html>
