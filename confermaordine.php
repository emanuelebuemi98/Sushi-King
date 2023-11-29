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
        <a href="Areautenti.php">Home</a> <!--  prima voce del menu -->
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
<table cellpadding="0" cellspacing="0" border="0" width="950" >
<tbody>
<tr height="120" >
<td valign="top" align="center">

<?php

 $idutente=$_SESSION["idnome"];
 //effettua la connessione al database
include("accessoDB.php");
if ($con)
	{

	//Usa il database
	$query="insert into ordini values(null,'$idutente',now(),null);";
	$ris=$con->query($query);

	$query="select ordini.idordine as idordine,ordini.dataordine as data,utenti.citta as citta,utenti.cap as cap,utenti.nome as nome,utenti.cognome as cognome,utenti.userid as userid,utenti.telefono as telefono,utenti.via as via,utenti.numerovia as numerovia,utenti.email as email from ordini join utenti on ordini.idutente=utenti.idutente where utenti.idutente=$idutente  order by ordini.idordine desc";
	$ris=$con->query($query);
		$riga=mysqli_fetch_assoc($ris);
	if($riga){
	$data=$riga["data"];
	$idordine=$riga["idordine"];
	$nome=$riga["nome"];
	$cognome=$riga["cognome"];
	$telefono=$riga["telefono"];
	$via=$riga["via"];
	$numerovia=$riga["numerovia"];
	$email=$riga["email"];
	$userid=$riga["userid"];
	$citta=$riga["citta"];
	$cap=$riga["cap"];
	$_SESSION["idordine"]=$idordine;
	echo"<br>Confermare l'ordine : N.$idordine del <font color=blue>$data</font>  dell'utente <b>$userid </b> con i seguenti dati per la consegna: <br><i> $nome $cognome $email <br>$citta Via $via N.$numerovia $cap $telefono</i>";
	}

	}
	?>
	</td>
</tr>
</tbody>
</table>
<table cellpadding="0" cellspacing="0" border="0" width="950" >
<tbody>
<tr height="120" >
<td valign="top" align="left">

	<form name="messaggio" method="post" action="add_ordine.php">
	<br><font color="red"><i>Inserisci la data e l'ora per il ritiro del prodotto:</font><font size="2">  Es. 2021/05/28-21.00 <input type="datetime-local" name="data" ></font>
	<br><font color="black" size="2"> L'ordine non sar&agrave preso in considerazione se non verr&agrave inserita una data e un ora valida.</font>

</td>
</tr>
</tbody>
</table>
<br>
<br>
<br>
<br>
<table border="0" width="100%" cellpadding="2" cellspacing="0">
<tbody>
<tr >
<td align="center" >
<p><b>Prodotti:</b><br><p>
<?php

 //effettua la connessione al database
include("accessoDB.php");
if ($con)
	{

	//Usa il database
	$selezione=$con->query("select sushi.nome as nome,sushi.prezzo as prezzo,compreso.quantita as quantita from compreso join sushi on compreso.idsushi=sushi.idsushi where idordine=0; ");

if(mysqli_num_rows($selezione)>0){

	while($array=mysqli_fetch_assoc($selezione))
{
	$nome=$array["nome"];
	$prezzo=$array["prezzo"];
	$quantita=$array["quantita"];
	echo " $nome $prezzo&#8364 x$quantita<br><br>";
	}}}
	?>



<td align="center"  >
<input type="submit" value="Conferma Ordine" >
</form>
<br><br>
	<form name="messaggio" method="post" action="annullaordine.php">
<input type="submit" value="Annulla Ordine" >
</form>

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
