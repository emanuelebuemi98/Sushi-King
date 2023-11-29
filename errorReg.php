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
<table cellpadding="0" cellspacing="0" border="0" width="96%" >
 <tbody>
<tr height="150" >
<font size="4">
<br>
<br>
<b>
Dati non validi
</b>

Nome utente, password o email già esistenti
e/o i dati non sono stati inseriti in tutti i campi


Torna alla <a href="registrazione.php">registrazione </a>
</pre>
</font>
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
