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
	<div id="logo">
  </div>
</div>

<!--barra menù-->
<div class="nav">
<!--Menù home-->
<ul  id="menu" class="menu"> <!-- lista principale: definisce il menu nella sua interezza -->
    <li class="">
        <a href="Areautenti.php">Home</a> <!-- prima voce del menu -->
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
<table cellpadding="3" cellspacing="0" border="0" width="100%">
<tbody>
<br>
<tr>
<td align="center" valign="top">
<b>
<font size="5">
<p>
Ordinazioni menù
</p></font></b></td></tr></tbody></table><br>
<div class="left">
<table cellpadding="2" cellspacing="2" border="1" width="100%">
<tbody>
<tr>

 <?php

//effettua la connessione al database
include("accessoDB.php");


if ($con)
	{

	//Usa il database

//prepariamo la query
	$selezione=$con->query("select sushi.prezzo as prezzo, sushi.idsushi as idsushi, sushi.nome as sushi , ingredienti.nome as ingrediente  from composto  inner join ingredienti on composto.idingrediente=ingredienti.idingrediente inner join sushi on composto.idsushi=sushi.idsushi order by sushi.idsushi") ;

	if(mysqli_num_rows($selezione)>0){
	$np="kkk";
while($array=mysqli_fetch_array($selezione))
{
$prezzo=$array["prezzo"];

$id=$array["idsushi"];
	$sushi=$array['sushi'];
	$ingrediente=$array['ingrediente'];


		if($np!=$sushi){
$np=$sushi;
echo "
<tr>
<td id=\"prezzo\"><b>Prezzo: $prezzo&#8364</b> <font size=2><br><br><form name=\"aquisto\" method=\"post\" action=\"carrello.php\">
  Quantit&agrave <input type=\"text\" name=\"quantita\" value=\"1\" maxlength=\"9\" style=\"width:20; text-align:center\">
   </font><br><br>
   Aggiungi: <input type=\"submit\" name=\"aggiungi\" value=\"$array[idsushi]\" /> </td>
<td align=left height=150 width=70%><font size=4></form>

   $id. <b>$np</b></font>
   <br>
<font size=3>Ingredienti:</font>

";
 }
 	echo "
<font size=2> <i>$ingrediente</i>
</font>

";}


    }}?>


   </tbody>
   </table>
   </div>
   <div class="right">
  <div class="line">
  <center>
  <table bgcolor="#FFFFFF" cellpadding="0" cellspacing="2" border="1" width="98%">
<tbody>
<tr>
<td align="right" height="18"bgcolor="#00659B" >
<font color="#ffffff">
<strong> Il tuo ordine</strong></font></td></tr>

<?php

//effettua la connessione al database
include("accessoDB.php");
if ($con)
	{

	//Usa il database
$prezzoto=0;
	$selezione=$con->query(" select distinct (sushi.nome) as prodotto, compreso.quantita as quantitapr, compreso.idsushi as idsushi,  compreso.prezzo as prezzopr from compreso join sushi on compreso.idsushi=sushi.idsushi where idordine=0 ");
if(mysqli_num_rows($selezione)>0){

	while($array=mysqli_fetch_assoc($selezione))
{
$idsushi=$array["idsushi"];
	$prodotto=$array["prodotto"];
	$prezzopr=$array["prezzopr"];
	$quantitapr=$array["quantitapr"];

	echo "<tr>
<td align=\"center\" height=\"100\">
$idsushi)<font color=#00659B><b>  $prodotto  $prezzopr&#8364</b></font> <font size=\"2\" ><i>x$quantitapr</i></font>

</td>
</tr>";

$query="select sum(prezzo)as prezzotot from compreso;";
	$ris=$con->query($query);
	$riga=mysqli_fetch_assoc($ris);
	if($riga){
	$totale=$riga["prezzotot"];
	$totale=$prezzopr*$quantitapr;
	}
    $prezzoto=$prezzoto+$totale;
	}}
else{
echo "<tr>
<td align=\"center\" height=\"150\">
<b>Lista attualmente vuota</b>
</td>
</tr>";
}}
?>
</tbody>
</table>
  <table bgcolor="#FFFFFF" cellpadding="0" cellspacing="2" border="0" width="98%">
<tbody>
<tr align="right">
<td style=" border=0">
<?php
if($prezzoto!=""){
echo "
<font color=black><b><i>Totale: $prezzoto&#8364 </b></font>";
}
else{
echo"";
}
?>
</tbody>
</table>
</tr>
</td>
  <table bgcolor="#ffffff" cellpadding="0" cellspacing="2" border="1" width="98%">
<tbody>
<tr align="center">
<td style="align=right" "border:1px #000099 solid" "width=50%">
<a href="cancellacarr.php">Cancella</a>
<a href="confermaordine.php">Ordina</a>
</td>
</form>
</tr>
</tbody>
</table>
</div>
</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div id="footer">
<tr height="150">
<td valign="top" align="center">
<p>
Copyright Sushi King &#174; Buemi e Giambò
Via Isonzo n° 31 Barcellona Pozzo di Gotto (ME)
SushiKing@gmail.com
3357694557
</p>
</td>
</tr>

</div>
</html>
