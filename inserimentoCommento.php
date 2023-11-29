<?php
 session_start();
 $idutente= $_SESSION["idnome"];
//effettua la connessione al database
  include("accessoDB.php");
   if ($con){
   //Usa il database
	     $titolo=$_POST["titolo"];
       $mex=$_POST["mex"];
	     if($titolo!=="" and $mex!==""){
				            $query="insert into post(idpost,titolo,mex,data,idutente) values(null,'$titolo', '$mex',now(),'$idutente');";
				            $ris=$con->query($query);
       header("location:messaggi.php");
                  }
	      else {

		echo"Torna indietro e inserisci un giudizio e un commento!";

		}
  }
?>