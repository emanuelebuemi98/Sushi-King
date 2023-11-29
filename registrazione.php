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
        <a href="index.php">Home</a> <!-- prima voce del menu -->
	</li>

    <!--Menù prodotti-->

    <li class="">
        <a href="prodotti.php">Prodotti</a> <!-- seconda voce del menu -->
    </li>

    <!--Menù info-->
    <li class="">
        <a >Info</a> <!-- terza voce del menu -->
        <ul > <!-- Lista annidata: voci del sotto-menu -->
            <li class=""><a href="locale.php">Il locale</a></li><BR>
            <li class=""><a href="dove.php">Dove siamo</a></li>
        </ul> <!-- Fine del sotto-menu -->
    </li>

         <!--Menù Area utenti-->
    <li class="">
        <a href="Areautenti.php"><font color="red">Utente</font></a> <!-- quarta voce del menu -->

    </li>
          <!--Menù Login-->

    <li class="">
      <a>  Accedi</a> <!-- quinta voce del menu -->
   <ul class="textbox"> <!-- Lista annidata: voci del sotto-menu -->
   <li id="cella_login" name="cella_login">
   <form method="POST" action="login.php" >
	 Nome utente
	 <input type="text" name="userid">

	 Password
	 <input type="password" name="pass">
	 <input type="submit" value="Accedi">
	 </form>
	 </li>
	</ul> <!-- Fine del sotto-menu -->

    </li>

    <!--Menù registrati-->
    <li class="">
     <a   href="registrazione.php" > Registrati</a> <!-- sesta voce del menu -->
    </li>
    </ul>
</div>



<!--CONTENUTO-->
<div id="contenuto">
<form  method="POST" action="regCollegamento.php">
<table cellpadding="3" cellspacing="0" border="0" width="96%" >
 <tbody>
<tr >
 <br>
 <br>
 <b>
 <font size="5" color="black">
 Registrazione
 </font>
 </b>
 <tr>
 <td width="33%" valign="top" height="45" align="left">
 <br>
Nome       <br> <input type="text" name="nome">
   </td>
   <td width="33%" valign="top" height="45" align="left">
   <br>
   Cognome    <br> <input type="text" name="cognome">
 </td>
 <tr>
<td width="33%" valign="top" height="45" align="left">
<br>
Nome utente <br><input type="text" name="userid">
 </td>
 <td width="33%" valign="top" height="45" align="left">
 <br>
   Password   <br> <input type="password" name="pass">
 </td>
  <td width="33%" valign="top" height="45" align="left">
  <br>
   E-mail    <br>  <input type="email" name="email">
	  </td>
	    <tr>
 <td width="33%" valign="top" height="45" align="left">
 <br>
citta       <br> <input type="text" name="citta">
   </td>
   <td width="33%" valign="top" height="45" align="left">
   <br>
   CAP   <br> <input type="text" name="cap">
 </td>
 <tr>
 <td width="33%" valign="top" height="45" align="left">
 <br>
   Via         <br><input type="text" name="via">
    </td>
    <td width="33%" valign="top" height="45" align="left">
    <br>
   N. <br><input type="text" name="numerovia">
  </td>
 <td width="33%" valign="top" height="45" align="left">
 <br>
 Telefono   <br><input type="text" name="telefono">
 </td>
 </tr>
 <table cellpadding="0" cellspacing="0" border="0" width="950" >
<tbody>
<tr height="100">
 <td width="100%" valign="top" height="45" align="left">
<br>
<br>
<font size="5">
<input type="checkbox" name="box" value="si">     <font size="3" color="red">Condizioni per la privacy                   <textarea rows="4" cols="50">Comunicazione informativa ai sensi dell art. 13 del Decreto Legislativo n. 196/2003

In osservanza delle prescrizioni previste dal nuovo codice in materia di protezione dei dati personali, si comunica quanto segue.
Il trattamento dei dati è improntato ai principi di correttezza e trasparenza, venendo pertanto tutelata la Sua riservatezza e i suoi diritti.I dati conferiti a nome società in occasione di rapporti contrattuali finalizzati alla presentazione di offerte, o nella formazione di rapporti contrattuali, sono oggetto di trattamenti informatici o manuali per finalità di:
a)	adempimenti connessi: a norme civili, fiscali e contabili; alla gestione amministrativa del rapporto; all osservanza degli obblighi contrattuali; al supporto e all informazione in merito ai servizi da voi acquisiti;
b)	informazione su future iniziative e su annunci di nuovi servizi da parte sia da parte della società che da parte dei nostri consulenti esterni.
I dati di cui al punto a) vengono trattati dai nostri dipendenti, dai nostri collaboratori e dai nostri consulenti esterni, ove impegnati nella esecuzione del mandato conferitoci.
Evidenziamo che il consenso al trattamento dei dati per le finalità indicate al punto a) è obbligatorio ed essenziale ai fini dell esecuzione del mandato conferitoci. Viceversa, esso è facoltativo relativamente alle finalità di cui al punto b): in caso di rifiuto del consenso a tale ultima ipotesi, consegue la nostra impossibilità di assicurare informazione sugli sviluppi dei nostri servizi.

La società assicura che il trattamento dei dati effettuato con o senza l ausilio di mezzi elettronici o comunque automatizzati, avverrà mediante strumenti idonei a garantirne la sicurezza e la riservatezza. Esso potrà comprendere - nel rispetto dei limiti e delle condizioni posti dal decreto legislativo n. 196/2003 - una o più tra le seguenti operazioni sui dati: raccolta, registrazione, organizzazione, conservazione, elaborazione, modificazione, estrazione, raffronto, utilizzo, interconnessione, blocco, comunicazione, cancellazione, distruzione.
Titolare del trattamento dei dati....., con sede in.., Via .... n. .., Tel .., che li utilizzerà per le finalità di cui sopra.
Responsabile del trattamento dei dati .... che li utilizzerà per le finalità di cui sopra. (da indicare solo in caso di nomina)

Nei confronti del titolare (del responsabile se nominato) del trattamento è sempre possibile esercitare i diritti di cui all art. 7 del Decreto Legislativo n. 196/2003, qui riportato integralmente: 1. L interessato ha diritto di ottenere la conferma dell esistenza o meno di dati personali che lo riguardano, anche se non ancora registrati, e la loro comunicazione in forma intelligibile. 2. L interessato ha diritto di ottenere l indicazione: a)dell origine dei dati personali; b) delle finalità e modalità del trattamento; c) della logica applicata in caso di trattamento effettuato con l ausilio di strumenti elettronici; d) degli estremi identificativi del titolare, dei responsabili e del rappresentante designato ai sensi dell articolo 5, comma 2; e) dei soggetti o delle categorie di soggetti ai quali i dati personali possono essere comunicati o che possono venirne a conoscenza in qualità di rappresentante designato nel territorio dello Stato, di responsabili o incaricati.
3. L interessato ha diritto di ottenere: a) l aggiornamento, la rettificazione ovvero, quando vi ha interesse, l integrazione dei dati; b) la cancellazione, la trasformazione in forma anonima o il blocco dei dati trattati in violazione della legge, compresi quelli di cui non è necessaria la conservazione in relazione agli scopi per i quali i dati sono stati raccolti o successivamente trattati; c) lattestazione che le operazioni di cui alle lettere a) e b) sono state portate a conoscenza, anche per quanto riguarda il loro contenuto, di coloro ai quali i dati sono stati comunicati o diffusi, eccettuato il caso in cui tale adempimento si rivela impossibile o comporta un impiego di mezzi manifestamente sproporzionato rispetto al diritto tutelato. 4. L interessato ha diritto di opporsi, in tutto o in parte: a) per motivi legittimi al trattamento dei dati personali che lo riguardano, ancorchè pertinenti allo scopo della raccolta; b) al trattamento di dati personali che lo riguardano a fini di invio di materiale pubblicitario o di vendita diretta o per il compimento di ricerche di mercato o di comunicazione commerciale.
A partire dal ricevimento della presente comunicazione informativa, si intenderà rilasciato il consenso al trattamento dei dati personali di cui al punto a), salvo espressa manifestazione di dissenso da inviare per iscritto.</textarea>
</font>

<tbody>
<tr>
 <td width="100%" valign="top" height="45" align="left">
 <br> <br>
<input type="submit" value="Effettua la registrazione" >
</tr>
</form>
</td>
</tr>
</tbody>
</table>
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
