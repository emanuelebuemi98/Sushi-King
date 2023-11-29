<?php
session_start();
$quantita=$_POST['quantita'];
$idsushi=$_POST['aggiungi'];

//effettua la connessione al database
include("accessoDB.php");
if ($con)
	{

	//Usa il database
	if(strlen($idsushi)>0){
	$query="select prezzo from sushi where idsushi=$idsushi;";
	$ris=$con->query($query);
	$riga=mysqli_fetch_assoc($ris);
	if($riga){
	$prezzop=$riga["prezzo"];

	$query="insert into compreso values(null,'$prezzop','$quantita','$idordine','$idsushi');";
	$ris=$con->query($query);}

header("location:ordinazioni.php");}
}

?>
