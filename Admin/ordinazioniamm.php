<?php
session_start();

if($_SESSION["utente"]=="admin")
   echo "";
   else
 header("location:registrazione.php");
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
        <a href="areaamm.php">Home</a> <!--  prima voce del menu -->
  </li>
      <!--Menù Login-->

     <li class="">
<b>
<a><font color="black">attività</a><!--  seconda voce del menu -->
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
      window.onload = metodo;
      function metodo(){
// in base al bottone premuto, definito qui tramite il suo ID, verrà avviata la funzione corrispondente
        document.getElementById("get").addEventListener("click", visualizza_prenotazioni);
        document.getElementById("put").addEventListener("click", modifica_prenotazione);
        document.getElementById("post").addEventListener("click", inserisci_prenotazione);
        document.getElementById("delete").addEventListener("click", elimina_prenotazione);
      }

      function visualizza_prenotazioni(){
        var request = new XMLHttpRequest();
        request.onload = function(){document.getElementById("ajax").innerHTML = request.responseText;};
        request.open("get", "ordinazioniapi.php/ordini/", true);
        request.send();
      }

      function modifica_prenotazione(){
        var info = {}; // Questo array conterrà tutte le info che verranno inserite tramite gli input. Sono selezionati tramite il loro id, attributo dei tag <input>
        info.idordine = document.getElementById("idordine").value;
        info.idutente = document.getElementById("idutente").value;
        info.dataordine = document.getElementById("dataordine").value;
        info.Dataconsegna = document.getElementById("Dataconsegna").value;
        var jsondata = JSON.stringify(info);
        var req = new XMLHttpRequest();
        req.onload = function(){document.getElementById("ajax").innerHTML = req.responseText;};
        req.open("put", "ordinazioniapi.php/ordini/" + document.getElementById("idordine").value, true);
        req.send(jsondata);
      }

      function inserisci_prenotazione(){
        var info = {};
        info.idordine = document.getElementById("idordine").value;
        info.idutente = document.getElementById("idutente").value;
        info.dataordine = document.getElementById("dataordine").value;
        info.Dataconsegna = document.getElementById("Dataconsegna").value;
        var jsondata  = JSON.stringify(info);
        var req = new XMLHttpRequest();
        req.onload = function(){document.getElementById("ajax").innerHTML = req.responseText;};
        req.open("post", "ordinazioniapi.php/ordini/", true);
        req.send(jsondata);
      }

      function elimina_prenotazione(){
        var req = new XMLHttpRequest();
        req.onload = function(){document.getElementById("ajax").innerHTML = req.responseText;};
        req.open("delete", "ordinazioniapi.php/ordini/" + document.getElementById("idordine").value, true);
        req.send();
      }
</script>

<table bordercolor="#1560BD"; align="center"; width="100%" height="529" ;bgcolor="#000000"; border="3"; >
 <tr>
   <td width="550"  bgcolor="#EFEFEF" >
     <div align="center">
       <font color="#000000">
         <h2><b>Ordinazioni del SushiKing | Opzioni relative alla gestione delle attività amministrative </b></h2>
       </font>
       <br><br>
       <input id="idordine" type="number"  min="1" placeholder="ID" required><br><br>
       <input id="idutente" type="number"  min="1" placeholder="ID utente " required><br><br>
       <input id="dataordine" type="datetime-local" placeholder="Data effettuazione ordine" required><br><br>
       <input id="Dataconsegna" type="datetime-local" placeholder="Data consegna pizza" required><br><br>
       <br><br>
       <button id="get">Visualizza Ordinazioni</button>
       <button id="put">Modifica Ordine</button>
       <button id="post">Inserisci Ordine</button>
       <button id="delete">Cancella Ordine</button>
       <br><br>
       <p id="ajax"></p>
   </div>
        </div>
        <tr height="50">
        <td valign="top" align="center">
        <div id="footer">
        <p>
        Copyright Sushi King &#174; Buemi e Giambò
        Via Isonzo n° 31 Barcellona Pozzo di Gotto (ME)
        SushiKing@gmail.com
        3357694557
        </p>
        </div>
        </td>
        </tr>
        </div>

</html>
