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
        <a href="areaUtenti.php">Home</a> <!--  prima voce del menu -->
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
<tr height="360">
<td valign="top" align="center">
<br></br>
<br></br>
<p  style=" font-size:xx-large;text-align:center; font-family= arial,helvetica; color=#000;">
Dai un'occhiata al nostro volatino e registrati per ordinare i nostri prodotti!
</p>
<table cellpadding="0" cellspacing="0" border="0" width="100%" >
<tbody>
<tr height="530">
<td align="center" valign="top">
<br></br>
<!--RIQUADRO pagina sfogliabile menù-->
		<!-- Identificatore del libro -->
		<div id="mioLibro">
		<link href="booklet/jquery.booklet.1.2.0.css" type="text/css" rel="stylesheet" >
			<!-- Div di riferimento per il plugin -->
			<div class="b-load">


					<!--Ogni div qui dentro e' una pagina del libro -->
					<div>
					<br>
					<h2 align="center">SUSHI</h2>
					<font size="3">
					<i>
					<b>
					<p align="center"> ∘ Uramaki </p>
					<p align="center"> 8 pezzi: 6,00 € </p>
					<p align="center"> ❖ </p>
					<p align="center"> ∘ Hosomaki </p>
					<p align="center"> 6 pezzi: 4,50 € </p>
					<p align="center"> ❖ </p>
					<p align="center"> ∘ Futomaki </p>
					<p align="center"> 7 pezzi: 5,00 € </p>
					<p align="center"> ❖ </p>
					<p align="center"> ∘ Temaki </p>
					<p align="center"> 4 pezzi: 7,00 € </p>
					</b>
					</i>
					</font>
					<p align="center"><a href="ordinazioni.php"> Prenota adesso!</a></p>
				</div>
					<div>
					<br>
					<h2 align="center">SUSHI</h2>
					<font size="3">
					<i>
					<b>
					<p align="center"> ∘ Nigiri </p>
					<p align="center"> 2 prezzi: 3,00 € </p>
					<p align="center"> ❖ </p>
					<p align="center"> ∘ Gunkan </p>
					<p align="center"> 4 pezzi: 8,50 € </p>
					<p align="center"> ❖ </p>
					<p align="center"> ∘ Onigiri </p>
					<p align="center"> 3 pezzi: 5,50 € </p>
					<p align="center"> ❖ </p>
					<p align="center"> ∘ Sashimi </p>
					<p align="center"> 5 pezzi: 9,00 € </p>

					</b>
					</i>
					</b>
					</i>
					</font>
					<p align="center"><a href="ordinazioni.php"> Prenota adesso!</a></p>
				</div>
				<div>
				<br>
					<h2 align="center">BARCA</h2>
						<font size="3">
					<i>
					<b>
					<p align="center"> ---------------- <p>
					<p align="center"> PICCOLA </p>
					<p align="center"> 32,00 € </p>
					<p align="center"> ❖ </p>
					<p align="center"> MEDIA </p>
					<p align="center"> 35,00 € </p>
					<p align="center"> ❖ </p>
					<p align="center"> GRANDE </p>
					<p align="center"> 40,00 € </p>
					<p align="center"> ---------------- <p>
					</b>
					</i>
					</b>
					</i>
					</font>
					<p align="center"><a href="ordinazioni.php"> Prenota adesso!</a></p>
				</div>
				<div>
				<br>
					<h2 align="center">PESCE</h2>
						<font size="3">
					<i>
					<b>
					<p align="center"> ---------------- <p>
					<p align="center"> ∘ Tempura di </p>
					<p align="center"> gamberi 13,00 € </p>
					<p align="center"> ∘ Salmone alla </p>
					<p align="center"> piastra 15,00 € </p>
					<p align="center"> ∘ Calamari alla </p>
					<p align="center"> piastra 11,00 € </p>
					<p align="center"> ∘ Filetto di </p>
					<p align="center"> branzino cotto </p>
					<p align="center"> al vapore  18,00 € </p>
					<p align="center"> ---------------- <p>
					</b>
					</i>
					</b>
					</i>
					</font>
					<p align="center"><a href="ordinazioni.php"> Prenota adesso!</a></p>
				</div>
				<div>
				<br>
					<h2 align="center">DESSERT</h2>
						<font size="3">
					<i>
					<b>
					<p align="center"> — </p>
					<p align="center"> ∘ Tiramisù alle </p>
					<p align="center"> fragole 4,50 € </p>
					<p align="center"> ∘ Torta di </p>
					<p align="center"> di mele 3,50 € </p>
					<p align="center"> ∘ Crostata di </p>
					<p align="center"> frutta 5,00 € </p>
					<p align="center"> ∘ Babà al rum </p>
					<p align="center"> 4,00 € </p>
					<p align="center"> ∘ Cassata siciliana </p>
					<p align="center"> 5,50 € </p>

					</b>
					</i>
					</b>
					</i>
					</font>
					<p align="center"><a href="ordinazioni.php"> Prenota adesso!</a></p>
				</div>
				<div>
				<br>
					<h2 align="center">BIBITE</h2>
						<font size="3">
					<i>
					<b>
					<p align="center"> — </p>
					<p align="center"> ∘ Acqua minerale </p>
					<p align="center"> 1 L 2,00 € </p>
					<p align="center"> ∘ Acqua gassata </p>
					<p align="center"> 1 L 2,00 € </p>
					<p align="center"> ∘ Tè verde 3,00 € </p>
					<p align="center"> ∘ Vino bianco/rosso </p>
					<p align="center"> 1 L 6,00 € </p>
					<p align="center"> ∘ Birra alla spina </p>
					<p align="center"> 4,50 € </p>
					<p align="center"> ∘ Coca cola 3,50 € </p>

					</b>
					</i>
					</b>
					</i>
					</font>
					<p align="center"><a href="ordinazioni.php"> Prenota adesso</a></p>
				</div>
				</div> <!-- chiude .b-load -->
		</div> <!-- chiude #mioLibro -->
		<!-- Inclusione jQuery -->
	<script type="text/javascript" src="booklet/jquery-1.5.min.js"></script>
	<!-- jQuery UI (incluso con booklet) -->
	<script type="text/javascript" src="booklet/jquery-ui-1.8.9.custom.min.js"></script>
	<!-- Easing -->
	<script type="text/javascript" src="booklet/jquery.easing.1.3.js"></script>
	<!-- Plugin Booklet -->
	<script type="text/javascript" src="booklet/jquery.booklet.1.2.0.min.js"></script>
	<!-- Mio codice Javascript -->
	<script type="text/javascript">

		// Avvio il libro sfogliabile
		$("#mioLibro").booklet({	// Aggiungo alcune opzioni
			width: 600,
			tabs: true,
		});

		$("#vai").click(function(){
			// Mando il libro direttamente ad una certa pagina
			$("#mioLibro").booklet(5);
		});

	</script>
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
Copyright Suschi King &#174; Buemi e Giambò
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
