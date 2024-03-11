
<?php
    
    require_once 'navbar.php';
    require_once 'config.php';
    //AFFICHAGE DES ERREURS
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    if(isset($_POST['send'])){
        //ON RECUPERE LES DONNÉES
        $direction = $_POST['direction'];
        $trajet = $_POST['trajet'];
        $horaire = $_POST['horaire'];
        $prix = $_POST['prix'];

        //INSERSTION DES DONNÉES
        $sql = "INSERT INTO billet (direction, trajet, horaire, prix) VALUES (?, ?, ?, ?)";
        // Préparation de la requête
        $stmt = $CONNEXION->prepare($sql);
        // Liaison des paramètres
        $stmt->bind_param("sssi", $direction, $trajet, $horaire, $prix);
        
        if($stmt->execute()){
            header("location:showbillet.php");
        }else{
            echo "ERREUR d'insertion : " . $stmt->error;
        }
        // Fermeture du statement
        $stmt->close();

    } else{
        echo "Tous les champs doivent être remplis";
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
   width: 500px;
   margin-top: 150px ;
   margin-left:60%;
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
.banner{
   background-image: url("images/Image\ collée 3\.png" );
}

.billet{
    display:flex;
}
.image{
    margin-top:130px;
    margin-left:70px;
}

.footer {
    background-color: black;
    color: white;
    padding: 20px 0;
    margin-top:50px;
}

.footer-content {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.social-icons {
    display: flex;
    align-items: center;
}

.social-icons a {
    margin-right: 10px;
}

.footer-text {
    font-size: 14px;
}

.footer-text a {
    color: white;
}

.footer-text a:hover {
    color: #FE7A15; /* orange */
}

.social-icons img {
    width: 30px;
    height: 30px;
    border-radius: 50%;
}

.social-icons img:hover {
    border: 2px solid #3011BC; /* bleu */
}



</style>
<body>
<div class="billet">
        <div class="image" > 
            <img src="images/billet.png" alt="" width="675px" height="600px">
        </div>
        <div>
        <form  class="form"  action="" method="post">
            <h1>Réservez un Billet</h1>
            <label for="direction">Direction:</label>
                <input type="text" name="direction"  >




                <label for="trajet">Trajet:</label>
                <input type="text" name="trajet">




                <label for="horaire">Horaire:</label>
                <input type="time" name="horaire">




                <label for="prix">Prix:</label>
                <input type="int" name="prix">




                <label for="status_billet">Status_billet:</label>
                <input type="text" name="status_billet">


            
            <input type="submit" value="Réservez" name="send">
            <a class="link back" href=""> Annulez</a>
        </form>

        </div>
  </div>
</body>





<footer class="footer">
    <div class="footer-content">
        <div class="social-icons">
            <a href="#"><img src="images/insta.png" alt="Instagram"></a>
            <a href="#"><img src="images/facebook.png" alt="Facebook"></a>
            <a href="#"><img src="images/linkedin.png" alt="LinkedIn"></a>
        </div>
        <div class="footer-text">
            © 2024 Mariama. Tous droits réservés.
        </div>
    </div>
</footer>



</html>
