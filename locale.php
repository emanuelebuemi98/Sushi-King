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
        <a href="index.php">Home</a> <!--  prima voce del menu -->
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
<table cellpadding="0" cellspacing="0" border="0" width="950" >
<tbody>
<tr height="360">
<td valign="top" align="center">
<br></br>
<br></br>
<pre> <font size="5px" face="arial,helvetica" color="#000">
Il locale offre zone ampie e spaziose dove godere
di un ambiente caldo e dall'inebriante profumo di sushi.

Il pesce servito al Sushi King è fresco e di prima scelta.
Inoltre è soggetto a controlli continui da specifiche persone
e possiede il certificato di provenienza dei prodotti che provengono
escusivamente dall'Italia.

Nel preparare il sushi noi mettiamo tutto
il nostro impegno e dedizione per soddisfare le
richieste del cliente sul piatto.

Pertanto non vi resta che sedervi e degustare il miglior sushi che avete mai assaggiato.
</font>
</pre>
<br>

<table cellpadding="0" cellspacing="0" border="0" width="100%" >
<tbody>
<tr height="530">
<td align="center" valign="top">


<img style="float:left; margin-left:20px" src="img/barcasushi.jpg" height="30%"; width="30%">
<img style="float:left; margin-left:20px" src="img/salonesushi.jpg" height="30%"; width="30%">
<img style="float:left; margin-left:20px" src="img/preparazionesushi.jpg" height="30%"; width="30%">

<font size="6px" face="verdana" color="#00659B">Orari di apertura e giorno di riposo</font>
<pre><font size="4px" face="arial" color="#A9A9A9">
Siamo aperti tutte le sere dalle 19.00 alle 00.00, escluso il lunedì per chiusura settimanale.
Domenica e festivi potrete trovarci anche a pranzo.

Per maggiori informazioni non esitare a contattarci.
</font></pre>

</td>
</tr>
</tbody>
</table>
</tr>
</td>
</tbody>
</table>
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
