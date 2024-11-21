<?php
    require_once 'config.php';
    require_once 'navbar.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

    
    



   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

        <style>
            .banner{
            background-image: url("images/image.png") ;
            height: 600px;
            margin:0;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            }
            .banner .image{
            position: absolute;
            top: 0;
            right: 60px;
            left: 900px;
            }
            .banner h1{
            margin-left: 7%;
            margin-top:0px;
            padding-top: 8%;
            color: #3011BC;
            }
            button {
            margin-left: 6%;
            cursor: pointer;
            font-weight: 700;
            font-family: Helvetica,"sans-serif";
            transition: all .2s;
            padding: 10px 20px;
            border-radius: 100px;
            background: #FE7A15;
            border: 1px solid transparent;
            display: flex;
            align-items: center;
            font-size: 17px;
            margin-top: 90px;
            }
            button:hover {
            background: #3011BC;
            }
            button > svg {
            width: 34px;
            margin-left: 10px;
            transition: transform .3s ease-in-out;
            }
            button:hover svg {
            transform: translateX(5px);
            }
            button:active {
            transform: scale(0.95);
            }
            button a {
                text-decoration: none;
                color: #FFFFFE;
            }
            .table{
                margin-top:50px;
            }
            .formulaire{
                margin-left:200px;
                margin-right:250px;
                margin-top :50px;
                background-color:#FE7A15;
                
            }
            .formulaire .form-control{
                padding-left:50px;
            }
        </style>

<body>
    <div class="banner">
    <div class="text">
        <h1>Découvrez de nouveaux horizons et <br> Créez des souvenirs inoubliables </h1>
        <button><a href="">Reserver maintenant</a></button>
    </div>
    </div>

   
</body>

<?php
    require_once 'footer.php'
?>
</html>