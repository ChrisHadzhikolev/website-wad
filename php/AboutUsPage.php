<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="footer, address, phone, icons"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" href="../css/aboutUsStyle.css">
    <link rel="stylesheet" href="../css/footerStyle.css">
    <link rel="stylesheet" href="../css/navigationStyle.css">
    <link rel="stylesheet" href="../css/backToTopStyle.css">


    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Volkhov&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">

    <title>Telepathy Bean</title>
</head>
<body>
<?php
require_once "Navigation.php";
?>

<div class="software">
<h1>About us...</h1>
<h2 style="font-size:20px">Our software company is newly created, which makes us motivated to present our ideas. </h2>
<p>"Your friendly neighbourhood developers."</p>
</div>
<div class="container">
    <img
            src="../jaki.jpg"
            width="100"
            height="50"
            alt="Avatar"
            class="image"

    />
    <div class="overlay">
        <div class="text">Jacqueline</div>

    </div>
</div>

<div class="jaki">About me...<br>
    I am from Sofia, Bulgaria.
    Where do I live?
    I am currently living in Eindhoven, Netherlands.
    What is my occupation?
    I am a first-year-student in Fontys University and a future software engineer and developer.
    Which programming languages I have experience with?
    I have experienced working with: C#, Java Script, CSS, HTML, PHP.

</div>
<div class="container_kris">

    <img
            src="../kris.jpg"
            width="100"
            height="50"
            alt="Avatar"
            class="image"
    />
    <div class="overlay">
        <div class="text">Christian</div>
    </div>
</div>
<div class="kris">About me...<br>
    Where am I from?
    I am from Sofia, Bulgaria.
    Where do I live?
    I am currently living in Eindhoven, Netherlands.
    What is my occupation?
    I am freshman in Fontys UAS and a future software engineer.
    Which programming languages I have experience with?
    I have some experience with different programming languages: C++, Java, Android Java, C#, PHP.
</div>

<a id="back_to_top"></a>
<script type="text/javascript" src="../js/backToTop.js"></script>

<?php
require_once "Footer.php";
?>


</body>
</html>
