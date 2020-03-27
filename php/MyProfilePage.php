<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: LoginPage.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="footer, address, phone, icons"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <link rel="stylesheet" href="../css/myProfileStyle.css">
    <link rel="stylesheet" href="../css/footerStyle.css">
    <link rel="stylesheet" href="../css/navigationStyle.css">
    <link rel="stylesheet" href="../css/backToTopStyle.css">


    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Volkhov&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">

    <title>User Profile</title>
</head>
<body>
<?php
require_once "Navigation.php";
?>

<a id="back_to_top"></a>
<script type="text/javascript" src="../js/backToTop.js"></script>

<div class="card">
    <img src="../drawable/defPic.png" alt="User" style="width:100%">
    <h1><?php echo $_SESSION["username"]?></h1>
    <p class="title"><?php echo $_SESSION["first_name"] . " " . $_SESSION["last_name"] ?></p>
    <p><?php echo $_SESSION["type"] . " ";?>User</p>
    <p><button onclick="alert('Coming Soon')">Contact</button></p>
</div>

<?php
require_once "Footer.php";
?>

</body>
</html>
