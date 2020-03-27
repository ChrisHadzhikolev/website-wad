<?php
session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="footer, address, phone, icons"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <link rel="stylesheet" href="css/indexStyle.css">
    <link rel="stylesheet" href="css/footerStyle.css">
    <link rel="stylesheet" href="css/navigationStyle.css">
    <link rel="stylesheet" href="css/backToTopStyle.css">


    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Volkhov&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">

    <title>Telepathy Bean</title>
</head>
<body>
<div class="navigation">
    <nav>
        <ul>
            <li><a href="#"><span>TelepathyBean</span></a></li>
            <li class="home"><a href="#" onclick="alert('Coming Soon')">News</a></li>
            <li class="home"><a href="php/ProjectsPage.php">Projects</a></li>
            <li class="home"><a href="php/ContactUsPage.php">Contact Us</a></li>
            <li class="home"><a href="php/AboutUsPage.php">About Us</a></li>
            <?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]): ?>
                <li class="login_reg"><a href="logout.php">Logout</a></li>

            <?php else: ?>
                <li class="login_reg"><a href="php/LoginPage.php">Login</a></li>
            <?php endif; ?>

            <?php if( isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]): ?>
                <li class="login_reg"><a href="php/MyProfilePage.php">My Profile</a></li>
            <?php else: ?>
                <li class="login_reg"><a href="php/RegistrationPage.php">Registration</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</div>
<div class="main">
    <h1>Join us</h1>
    <a class="button" href="php/AboutUsPage.php">Click Me</a>
</div>
<a id="back_to_top"></a>
<script type="text/javascript" src="js/backToTop.js"></script>

<?php
/*require_once 'config.php';*/
?>

<footer class="footer">
    <div class="footer-left">
        <!-- <img src="drawable/logo.png">-->
        <h3>-> <span>Telepathy Bean</span></h3>

        <p class="footer-links">
            <a href="#">Home</a>
            |
            <a href="#">News</a>
            |
            <a href="#">Projects</a>
            |
            <a href="#">Contact Us</a>
            |
            <a href="#">About Us</a>
            |
            <a href="#">Login</a>
            |
            <a href="#">Registration</a>
        </p>

        <p class="footer-company-name">© 2020 Telepathy Bean Inc.</p>
    </div>


    <div class="footer-right">
        <p class="footer-company-about">
            <span>About the company</span>
            Startup. Fresh Solutions. Good Results.</p>
        <div class="footer-icons">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-youtube"></i></a>
        </div>
    </div>
</footer>

</body>
</html>
