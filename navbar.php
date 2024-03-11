<?php
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
 </head>

<style>
  body{
    margin:0;
  }
  .navbar{
    margin-left:0;
    padding-top:50px;
    height:80px;
    text-align:center;
    display:flex;
    font-size:20px;
    background-color:#3011BC;
  }
  .logo{
    float:left;
    margin-left:20px;
  }
  a {
    text-decoration:none;
    color:#FE7A15;
  }
  .menu {
    margin-left:500px;
    gap:50px;
    display:flex;
  }
  .deconnexion{
    margin-left:550px;
  }

</style>

<body>
  <div class="navbar" >
      <div class="logo"><a href="">logo</a></div>
      <div class="menu">
          <div><a href="">ACCUEIL</a></div>
          <div>
            <a href=""> VOYAGE
            <!--  <select name="voyage" id="">
                <option value="">VOYAGE</option>
                <option value="">reserver un billet</option>
                <option value=""></option>
              </select-->
            </a>
          </div>
          <div><a href="">A PROPOS</a></div>
          <div><a href="">CONTACT</a></div>
      </div>
      <div class="deconnexion" ><a href="">DECONNEXION</a></div>
  </div>
</body>
</html>