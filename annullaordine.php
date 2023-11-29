 <?php
//effettua la connessione al database
include("accessoDB.php");
if ($con)
	{
	//Usa il database
	$query="delete from compreso where idordine=0 "; 
	$prodotto=$con->query($query); 
	if($prodotto){
header("location:ordinazioni.php");
	}}
?> 
