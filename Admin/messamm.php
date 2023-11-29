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
     <li><a href="messaggiamm.php">Area commenti</a></li><br>
    <li> <a href="chiudi.php">Esci!</a></li><br>
</ul>
    </li>
</div>


<script>
      window.onload = metodo;
      function metodo(){
// in base al bottone premuto, definito qui tramite il suo ID, verrà avviata la funzione corrispondente
        document.getElementById("get").addEventListener("click", visualizza_commenti);
        document.getElementById("put").addEventListener("click", modifica_commento);
        document.getElementById("post").addEventListener("click", inserisci_commento);
        document.getElementById("delete").addEventListener("click", elimina_commento);
      }

      function visualizza_commenti(){
        var request = new XMLHttpRequest();
        request.onload = function(){document.getElementById("ajax").innerHTML = request.responseText;};
        request.open("get", "commentiapi.php/post/", true);
        request.send();
      }

      function modifica_commento(){
        var info = {}; // Questo array conterrà tutte le info che verranno inserite tramite gli input. Sono selezionati tramite il loro id, attributo dei tag <input>
        info.idpost = document.getElementById("idpost").value;
        info.titolo = document.getElementById("titolo").value;
        info.mex = document.getElementById("mex").value;
        info.data= document.getElementById("data").value;
        info.idutente = document.getElementById("idutente").value;
        var jsondata = JSON.stringify(info);
        var req = new XMLHttpRequest();
        req.onload = function(){document.getElementById("ajax").innerHTML = req.responseText;};
        req.open("put", "commentiapi.php/post/" + document.getElementById("idpost").value, true);
        req.send(jsondata);
      }

      function inserisci_commento(){
        var info = {};
        info.idpost = document.getElementById("idpost").value;
        info.titolo = document.getElementById("titolo").value;
        info.mex = document.getElementById("mex").value;
        info.data= document.getElementById("data").value;
        info.idutente = document.getElementById("idutente").value;
        var jsondata  = JSON.stringify(info);
        var req = new XMLHttpRequest();
        req.onload = function(){document.getElementById("ajax").innerHTML = req.responseText;};
        req.open("post", "commentiapi.php/post/", true);
        req.send(jsondata);
      }

      function elimina_commento(){
        var req = new XMLHttpRequest();
        req.onload = function(){document.getElementById("ajax").innerHTML = req.responseText;};
        req.open("delete", "commentiapi.php/post/" + document.getElementById("idpost").value, true);
        req.send();
      }
</script>

<table bordercolor="#1560BD"; align="center"; width="100%" height="529" ;bgcolor="#000000"; border="3"; >
 <tr>
   <td width="550"  bgcolor="#EFEFEF" >
     <div align="center">
       <font color="#000000">
         <h2><b>Recensioni del SushiKing | Opzioni relative alla gestione delle attività amministrative</b></h2>
       </font>
       <br><br>
       <input id="idpost" type="number"  min="1" placeholder="ID" required><br><br>
       <input id="titolo" type="text" placeholder="Titolo commento " required><br><br>
       <input id="mex" type="text" placeholder="Contenuto" required><br><br>
       <input id="data" type="datetime-local" placeholder="Data commento" required><br><br>
       <input id="idutente" type="number"  min="1" placeholder="ID utente del commento" required><br><br>
       <br><br>
       <button id="get">Visualizza Commenti</button>
       <button id="put">Modifica Commento</button>
       <button id="post">Inserisci Commento</button>
       <button id="delete">Cancella Commento</button>
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
