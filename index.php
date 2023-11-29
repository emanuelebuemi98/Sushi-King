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
        <a >Info</a> <!--  terza voce del menu -->
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
<p  style=" font-size:25px;text-align:center; font-family= arial,helvetica; color=#000;">
BENVENUTI AL SUSHI KING!
</p>
<br>
<p  style=" font-size:15px;text-align:left; font-family= arial,helvetica; color=#000;">
<marquee>Ordina il tuo Sushi preferito online in modo semplice e veloce!</marquee>
</p>
<table cellpadding="0" cellspacing="0" border="0" width="100%" >
<tbody>
<tr height="530">
<td align="center" valign="top">

<br></br>
<img style="float:left; margin-right:8px" src="img/logo2.jpg" height="60%"; width="20%">
<!--RIQUADRO IMMAGINI A SCORRIMENTO-->
<div id="slider" >
<!-- Sildes -->
<img id="five" src="img/1.jpg" width="600" height="500" style="border:1px solid red;">
<img id="two" src="img/2.jpg" width="600" height="500" style="border:1px solid red;">
<img id="three" src="img/3.jpg" width="600" height="500" style="border:1px solid red;">
<img id="four" src="img/4.jpg" width="600" height="500" style="border:1px solid red;">
<img id="one" src="img/5.jpg" width="600" height="500" style="border:1px solid red;">
<ul>
<li>
<a href="#five"></a>
</li>
<li>
<a href="#two"></a>
</li>
<li>
<a href="#three"></a>
</li>
<li>
<a href="#four"></a>
</li>
<li>
<a href="#one"></a>
</li>
</ul>
</div>
<table cellpadding="0" cellspacing="0" border="0" width="950" >
<tbody>
<tr height="390">
<td valign="top" align="center" >
<br></br>
<br></br>
<p style="text-align:center; ">
Visitando il nostro sito potrai avere informazioni sul locale e farti un'idea della qualita' del servizio offerto.
</p>
<table cellpadding="0" cellspacing="0" border="0" width="100%" >
<tbody>
<tr height="360">
<td align="center" valign="top">
<br>
<p style="font-size:22px;text-align:center; font-family= arial,helvetica; color=#FF0;">
Il Sushi King &egrave aperto tutti i giorni, tranne il lunedi', dalle 19.00 alle 00.00!
</p>
<br>
<p  style="font-size:20px;text-align:center; font-family= arial,helvetica; color=#000;">
Ordinando il nostro sushi online per ogni 30&#8364 di spesa in regalo un biscotto della fortuna!
</p>
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
Via Isonzo n°31 Barcellona Pozzo di Gotto (ME)
SushiKing@gmail.com
3357694557 
</p>
</div>
</td>
</tr>
</div>



</div>
</html>
