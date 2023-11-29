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
<!--Menù tendina-->
  <li class="">
  <b>
<a><font color="black">attività</a> <!-- seconda voce del menu -->
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

<!--CONTENUTO-->
<div id="contenuto">
<table cellpadding="0" cellspacing="0" border="0" width="950" >
<tbody>
<tr height="360">
<td valign="top" align="center">
<br></br>
<br></br>
<p  style=" font-size:xx-large;text-align:center; font-family= arial,helvetica; color=#000;">
Area per la gestione dei dati relativi ai clienti!
</p>
</td>
</tr>
</tbody>
</table>
<tr height="250">
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
