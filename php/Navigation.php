
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/navigationStyle.css">
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    /><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
    <title>NavigationBar</title>
</head>
<body>
    
</body>
</html>
 <!--   
<div class="navigation">
    <nav>
        <ul>
            <li><a href="../index.php"><span>TelepathyBean</span></a></li>
            <li class="home"><a href="NewsPage.php">News</a></li>
            <li class="home"><a href="ProjectsPage.php">Projects</a></li>
            <li class="home"><a href="ContactUsPage.php">Contact Us</a></li>
            <li class="home"><a href="AboutUsPage.php">About Us</a></li>
            <?php if( isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]): ?>
                <li class="login_reg"><a href="logoutOther.php">Logout</a></li>
            <?php else: ?>
                <li class="login_reg"><a href="LoginPage.php">Login</a></li>
            <?php endif; ?>

            <?php if( isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]): ?>
                <li class="login_reg"><a href="MyProfilePage.php">My Profile</a></li>
            <?php else: ?>
                <li class="login_reg"><a href="RegistrationPage.php">Registration</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</div>-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
        <a class="nav-link"href="index.php">TelepathyBean</a></li>
      <li class="nav-item">
        <a class="nav-link" href="php/NewsPage.php">News</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutus.php">About us</a>
      </li>   
      <li class="nav-item">
        <a class="nav-link" href="php/ProjectsPage.php">Projects</a>
      </li>       
      </li>
    </ul>
  </div>
</nav>