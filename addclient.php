<?php
    require_once 'config.php';

    //AFFICHAGE DES ERREURS
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    if(isset($_POST['send'])){

        $prenom = $_POST['prenom'];
        $nom = $_POST["nom"];
        $num = $_POST['num'];
        $mail = $_POST['mail'];

        $sql = "INSERT INTO client (prenom, nom, num, mail) VALUES (?, ?, ?, ?)";

       //PREPARATION DE LA REQUETE
       $preparation = $CONNEXION->prepare($sql);

         // Liaison des paramètres
         $preparation->bind_param("ssis", $prenom, $nom, $num, $mail);

         // Exécuter la requête
            if ($preparation->execute()) {
                echo "Nouvel enregistrement inséré avec succès.";
            } else {
                echo "Erreur lors de l'insertion : " . $preparation->error;
            }
            //FERMETURE
            $preparation->close();
      
    }else{
        echo "" ;
    }




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <style>
        .form {
        width: 400px;
        margin: 250px auto;
        padding: 20px;  
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }


        .form h1 {
        text-align: center;
        margin-bottom: 20px;
        color:#FE7A15;
        }


        .form label {
        display: block;
        margin-bottom: 10px;
        font-weight: bold;
        }
        .form input[type="text"],
        .form input[type="date"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        }


        .form input[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #FE7A15;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        }


        .form input[type="submit"]:hover {
        background-color:  #FE7A15;
        }


        .link.back {
        display: block;
        text-align: center;
        margin-top: 10px;
        color: #3011BC;
        text-decoration: none;
        }


        .link.back:hover {
        text-decoration: underline;
        }
    </style>
<body>
    
<form  class="form"  action="" method="post">
      <h1>Veillez repondre à se formulaire</h1>
      <label for="prenom">Prenom:</label>
          <input type="text" name="prenom" placeholder="Prenom" >


          <label for="nom">Nom:</label>
          <input type="text" name="nom" placeholder="Nom">


          <label for="num">Num_Téléphone:</label>
          <input type="nombre" name="num"   placeholder="Num">


          <label for="e_mail">E_mail:</label>
          <input type="e_mail" name="mail" placeholder="E_mail">

      <input type="submit" value="Envoyez" name="send">
      <a class="link back" href="listeclient.php"> Annulez</a>
  </form>


</body>
</html>