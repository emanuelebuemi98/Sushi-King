<?php
session_start();
session_unset();
session_destroy();

//effettua la connessione al database
include("accessoDB.php");
if ($con)
	{
	//Usa il database
	$query="delete from compreso where idordine=0";
	$prodotto=$con->query($query);
	}
	header("Location:/index.php");
?>
