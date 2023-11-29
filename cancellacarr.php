 <?php
//effettua la connessione al database
include("accessoDB.php");
if ($con)
	{
	//Usa il database
	$query="delete from compreso where idordine=0 "; 
	$prodotto=$con->query($query); 
	if($prodotto){
	$query="delete from ordini where Dataconsegna=null "; 
	$prodotto1=$con->query($query); 
	if($prodotto1){
	header("location:ordinazioni.php");
	}}}
?> 