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
<?php
require_once "php/Navigation.php";
?>
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
                
<div class="main">
    <h1>Join us</h1>
    <a class="button" href="php/AboutUsPage.php">Click Me</a>
</div>
<a id="back_to_top"></a>
<script type="text/javascript" src="js/backToTop.js"></script>

<?php
/*require_once 'config.php';*/
?>
<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <h6>-><span>TelepathyBean</span></h6>
                <p class="text-justify">A recently set-up startup, our goal is to bring fresh solutions to our clients. Right we are offering services for Web Sites and Applications as well as C#/Java Desktop Applications. <br> If you have expertise in Web, Mobile or Desktop Development and want a new challenge feel free to contact us.</p>
            </div>

            <div class="col-xs-6 col-md-3">
                <h6>Support Us</h6>
                <ul class="footer-links">
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                        <input type="hidden" name="cmd" value="_s-xclick" />
                        <input type="hidden" name="hosted_button_id" value="RYQALGB6WN5KN" />
                        <input type="image" src="https://www.paypalobjects.com/en_US/NL/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
                        <img alt="" border="0" src="https://www.paypal.com/en_NL/i/scr/pixel.gif" width="1" height="1" />
                    </form>

                </ul>
            </div>

            <div class="col-xs-6 col-md-3">
                <h6>Quick Links</h6>
                <ul class="footer-links">
                    <li><a href="#">Home</a></li>
                    <li><a href="php/NewsPage.php">News</a></li>
                    <li><a href="php/ProjectsPage.php">Projects</a></li>
                    <li><a href="php/ContactUsPage.php">Contact Us</a></li>
                    <li><a href="php/AboutUsPage.php">About Us</a></li>
                    <li><a href="php/LoginPage.php">Login</a></li>
                    <li><a href="php/RegistrationPage.php">Join Us</a></li>
                </ul>
            </div>
        </div>
        <hr>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
                <p class="copyright-text">Copyright &copy; 2020 Telepathy Bean BG, Inc. Some Rights Reserved.</p>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <ul class="social-icons">
                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
