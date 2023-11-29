<?php
session_start();
if($_SESSION["utente"]!="")
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
        <a href="index.php">Home</a> <!-- prima voce del menu -->
    </li>

    <!--Menù prodotti-->

    <li class="">
        <a href="prodotti.php">Prodotti</a> <!-- seconda voce del menu -->
    </li>

    <!--Menù info-->
    <li class="">
        <a >Info</a> <!-- terza voce del menu -->
        <ul > <!-- Lista annidata: voci del sotto-menu -->
            <li class=""><a href="locale.php">Il locale</a></li><BR>
            <li class=""><a href="dove.php">Dove siamo</a></li>
        </ul> <!-- Fine del sotto-menu -->
    </li>

         <!--Menù Area utenti-->
    <li class="">
        <a href="Areautenti.php"><font color="red">Utente</font></a> <!-- quarta voce del menu -->

    </li>
          <!--Menù Login-->

     <li class="">
<font color="green">
<b>
<a>
     <?php
echo $_SESSION["utente"];
    ?>
    </a>
    </b>
    </font>
    <ul>

    <li><a href="ordinazioni.php">Ordinazioni</a></li><br>
     <li><a href="messaggi.php">Area commenti</a></li><br>
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
<p><font size="4"><b> Un email &egrave stata inviata a SushiKing@gmail.com, verr&agrave visualizzata subito dal nostro staff. Per eventuali dubbi su dove trovarci  <a href="doveUt.php"> visualizza la mappa</a> e/o per eventuali problemi chiamaci al numero: 3357694557.<br></font><br><br>
<font size="5" color="blue">Grazie per aver usato il nostro servizio, venga a trovarci anche nel locale, non se ne pentir&agrave!</font></p>

</td>
</tr>
</tbody>
</table>
<tr height="150">
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



</div>
</html>
