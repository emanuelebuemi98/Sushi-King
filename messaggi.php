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
        <a href="areaUtenti.php">Home</a> <!-- prima voce del menu -->
    </li>

    <!--Menù prodotti-->

    <li class="">
        <a href="prodottiUt.php">Prodotti</a> <!-- seconda voce del menu -->
    </li>

    <!--Menù info-->
    <li class="">
        <a >Info</a> <!-- terza voce del menu -->
        <ul > <!-- Lista annidata: voci del sotto-menu -->
            <li class=""><a href="localeUt.php">Il locale</a></li><BR>
            <li class=""><a href="doveUt.php">Dove siamo</a></li>
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
 <form name="messaggio" method="post" action="inserimentoCommento.php">
<table cellpadding="0" cellspacing="0" border="0" width="950" >
<marquee behavior="alternate" scrollamount="7"> <font size="5" color="#000000"><b> Recensioni Clienti</b></font></marquee>
<img style="float:left; margin-right:6px" src="img/omino.png" width="250" height="250" >
<tbody>
 <td width="33%"  height="45" align="center">
Giudizio <input type="text" maxlength="30" name="titolo"><br>
<tr >
<td width="25%"  height="150" align="center">
<textarea name="mex" cols="25" rows="5"></textarea>
<tr >
 <td width="33%" valign="top" height="45" align="center">
<input type="submit" value="Commenta" onclick="return confirm('Sei sicuro di voler pubblicare il commento?');"></td></tr></tbody></table></form>
<table cellpadding="0" cellspacing="0" border="0" width="100%" >
<tbody>
<tr height="400">
<td align="center" valign="top">
<br></br>
 <div style="overflow: Auto; width:100%; height:100%;" >
 <?php
//effettua la connessione al database
include("accessoDB.php");

if ($con)
    {

    //Usa il database

    $selezione=$con->query("select titolo, mex,data, utenti.userid as nome from post inner join utenti on post.idutente=utenti.idutente order by data DESC") or die(mysql_error());
if(mysqli_num_rows($selezione)>0){
while($array=mysqli_fetch_array($selezione))
{
$nome=$array["nome"];
$titolo=$array["titolo"];
$mex=$array["mex"];
$ora=$array["data"];
echo "<form>
 $nome  ha scritto<br>il $ora <b>$titolo </b><br><textarea onfocus='this.blur()' onstartselect='return false;'>$mex</textarea><hr>";};}
else {echo "Area commenti vuota. Scrivi qui un tuo commento sul nostro servizio.";}

}?>
</div>
</td>
</tr>
</tbody>
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
