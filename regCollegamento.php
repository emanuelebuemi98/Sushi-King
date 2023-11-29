<?php
session_start();
$valore=$_REQUEST["nome"];
$valore1=$_REQUEST["cognome"];
$valore2=$_REQUEST["userid"];
$valore3=$_REQUEST["pass"];
$valore4=$_REQUEST["via"];
$valore5=$_REQUEST["numerovia"];
$valore6=$_REQUEST["telefono"];
$valore7=$_REQUEST["email"];
$valore8=$_REQUEST["citta"];
$valore9=$_REQUEST["cap"];
$box=$_POST["box"];
//effettua la connessione al database
include("accessoDB.php");
if ($con)
	{
	//Usa il database
$userid2=$con->query("SELECT * FROM utenti WHERE userid='$valore2' ;");
$num1=mysqli_fetch_assoc($userid2);
$email2=$con->query("SELECT * FROM utenti WHERE email='$valore7';");
$num2=mysqli_fetch_assoc($email2);
//controllo esistenza nome utente, password, email.
if ($num1==0 && $num2==0 && $box == "si"){
$query="insert into utenti values (null,'$valore','$valore1','$valore2','$valore3','$valore4','$valore5','$valore6','$valore7','$valore8','$valore9');";
$ris=$con->query($query);
$query="select idutente from utenti where userid='$valore2';";
$ris=$con->query($query);
$riga=mysqli_fetch_assoc($ris);
if($riga){
	$nomeutente=$riga['idutente'];}
  $_SESSION["idnome"]=$nomeutente;
  $_SESSION["utente"]=$_REQUEST["userid"];
	header("location:Areautenti.php");}
else{
	header("location:errorReg.php");
	      }
//chiude la connessione
mysql_close($con);

	}
else
	echo "connessione fallita";
?>
