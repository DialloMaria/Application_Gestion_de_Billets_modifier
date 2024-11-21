<?php
 $host = "localhost";
 $usename = "root";
 $password = "";
 $DBname = "Application_Gestion_Billets_modifier";

    //CREATION DE LA CONNEXION
   $CONNEXION = new mysqli($host,$usename,$password,$DBname);

    //VERIFICATION DE LA CONNEXION
 if($CONNEXION === false){
   die("Connexion Echouée :". $CONNEXION->connect_error);
 }

 

?>
