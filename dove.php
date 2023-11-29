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
        <a >Info</a> <!-- tarza voce del menu -->
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
      <a>  Accedi</a> <!-- quinta  voce del menu -->
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
<br>
<br>
<font size="4" color="blue">
<p> Visualizza la mappa per trovarci! </p></font>
</tr>
<tr>
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d25107.748314734486!2d15.218139725683596!3d38.129296920574845!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1314253518073f13%3A0xb79386f84f346f39!2sVia+Isonzo%2C+31!5e0!3m2!1sit!2sit!4v1398190683509" width="950" height="600" frameborder="0" style="border:0"></iframe></td>
<br>
</tr>
</td>
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
