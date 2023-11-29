<?php
$userid=$_REQUEST["userid"];
$psw=$_REQUEST["pass"];
//effettua la connessione al database
include("accessoDB.php");
if ($con)
	{
	//se la connessione è ok
	echo "connessione ok <br>";
	//Usa il database
	//prepariamo la query
	$query="select idutente from utenti where userid='$userid' and pass='$psw';";
	//esegue la query
	$ris=$con->query($query);
	//recupera la prima riga
	$riga=mysqli_fetch_assoc($ris);
	if($riga){
	 $idutente=$riga['idutente'];
	 $pass=$riga['pass'];
	 session_start();
	 $_SESSION["utente"]=$_REQUEST["userid"];
	 $_SESSION["idnome"]=$idutente;
	 $_SESSION["pass"]=$pass;
	 header("location:Areautenti.php");
   }
else{
  header("location:registrazione.php");

}
//chiude la connessione
	mysql_close($con);
	}
else
	echo "connessione fallita";
?>
