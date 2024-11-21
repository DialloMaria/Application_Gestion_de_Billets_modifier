<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

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
</body>
</html>