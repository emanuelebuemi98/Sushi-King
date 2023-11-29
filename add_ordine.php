<?php
session_start();
$idordine=$_SESSION["idordine"];
$idutente=$_SESSION["idnome"];
$nome=$_SESSION["utente"];
$data1=$_POST["data"];

 //effettua la connessione al database
include("accessoDB.php");
if ($con)
	{

	//Usa il database
  //modificae all'interno della tabella compreso i dati relativi all’ordine, precisamente aggiorna la chiave esterna idordine con il relativo ordine, nella tabella compreso troveremo i dettagli dei prodotto del corrispondente ordine
	$query="update compreso set idordine='$idordine' where idordine =0 ;";
	$ris=$con->query($query);
  //aggiornerà la tabella ordini con la data di consegna inserita dall’utente nella precedente pagina: “confermaordine.php”
	$query="update ordini set Dataconsegna='$data1' where idutente='$idutente';";
	$ris=$con->query($query);
  //Cerco nel database le informazioni dell'utente da passare all'email dell'amministratore
	$query="select ordini.idordine as idordine,ordini.dataordine as data,utenti.citta as citta,utenti.cap as cap,utenti.nome as nome,utenti.cognome as cognome,utenti.userid as userid,utenti.telefono as telefono,utenti.via as via,utenti.numerovia as numerovia,utenti.email as email from ordini join utenti on ordini.idutente=utenti.idutente where utenti.idutente=$idutente  order by ordini.idordine desc";
	$ris=$con->query($query);
		$riga=mysqli_fetch_array($ris);
	if($riga){
	$data=$riga["data"];
	$idordine=$riga["idordine"];
	$nome=$riga["nome"];
	$cognome=$riga["cognome"];
	$telefono=$riga["telefono"];
	$via=$riga["via"];
	$numerovia=$riga["numerovia"];
	$email1=$riga["email"];
	$userid=$riga["userid"];
	$citta=$riga["citta"];
	$cap=$riga["cap"];
	$_SESSION["idordine"]=$idordine;

	}
//INVIO ORDINE ALL'EMAIL DELL'AMMINISTRATORE
$email="SushiKing@gmail.com";
$to = $email;
$subject = "richiesta ordinazione";
$boundary = "==MP_Bound_xyccr948x==";
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: multipart/alternative; boundary=\"$boundary\"\r\n";
$headers .= "From: miaemail@gmail.com \r\n";
$html_msg = "<center>";
$html_msg .= "<table width=\"500\" border=0 cellpadding=\"4\">";
$html_msg .= "<tr><td align=\"center\">&nbsp;";
$html_msg .= "</td></tr>";
$html_msg .= "<tr><td>Ordine effettuato da $nome N.$idordine del <font color=blue>$data</font><b><br>Ora consegna: $data1</b> <br> con i seguenti dati per la consegna: <br><i> $nome $cognome $email1 <br>$citta Via $via N� $numerovia $cap $telefono</i>";
//dati dal DB per i dettagli sulle pizze dell'ordine
$selezione=$con->query("select sushi.nome as nome,sushi.prezzo as prezzo,compreso.quantita as quantita from compreso join sushi on compreso.idsushi=sushi.idsushi join ordini on compreso.idordine=ordini.idordine where ordini.idutente='$idutente'; ");
if(mysqli_num_rows($selezione)>0){
  while($array=mysqli_fetch_assoc($selezione))
  {
	 $nomep=$array["nome"];
	 $prezzo=$array["prezzo"];
	 $quantita=$array["quantita"];
	 $html_msg .= "</td></tr><tr><td>Prodotti: <font size=5 color=\"red\"> $nomep �$prezzo  X$quantita</font>"; }}
$html_msg .= "</td></tr><tr><td align=\"center\">&nbsp;";
$html_msg .= "</td></tr></table></center>";
$confirmmessage .= $html_msg . "\n\n";
$message = "This is a Multipart Message in MIME format\n";
$message .= "--$boundary\n";
$message .= "Content-type: text/html; charset=iso-8859-1\n";
$message .= "Content-Transfer-Encoding: 7bit\n\n";
$message .= $confirmmessage . "\n";
$message .= "--$boundary--";
$mailsent = mail($to, $subject, $message, $headers);
header("location:grazie.php");
}
?>
