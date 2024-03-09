<?php
 $host = "localhost";
 $usename = "root";
 $password = "";
 $DBname = "Application_Gestion_BIllets_modifier";

    //CREATION D ELA CONNEXION
 $CONNEXION = mysqli_new($host,$usename,$password,$DBname);
 
    //VERIFICATION DE LA CONNEXION
 if($CONNEXION === false)[
    die("ERREUR:echec ". mysqli_connect_error())
 ]

?>