<?php
session_start();
require_once "../variables.php";


if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: LoginPage.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="footer, address, phone, icons"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Cookie" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Volkhov&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
            crossorigin="anonymous"
    />

    <link rel="stylesheet" href="../css/myProfileStyle.css">
    <link rel="stylesheet" href="../css/footerStyle.css">
    <link rel="stylesheet" href="../css/navigationStyle.css">
    <link rel="stylesheet" href="../css/backToTopStyle.css">

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
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

    <title>User Profile</title>
</head>
<body>
<?php
require_once "Navigation.php";
?>

<div class="container">
    <h1>My Profile</h1>
    <hr>
    <div class="row">
        <div class="col-md-3">
            <div class="text-center">
                <div class="card">

                    <img class="image" src="<?php require_once '../image_load.php';?>" alt="error_loading_image">
                    <h1><?php echo $_SESSION["username"]?></h1>
                    <p class="title"><?php echo $_SESSION["first_name"] . " " . $_SESSION["last_name"] ?></p>
                    <p><?php echo $_SESSION["type"] . " ";?>User</p>
                    <form method="post" action="" enctype='multipart/form-data'>
                        <p id="imageUpload"><input type="file" name="image"></p>
                        <input type='submit' value='Save Changes' name='but_upload'>
                    </form>
                    <?php
                   require_once '../image_upload.php';
                    ?>
                </div>
            </div>
        </div>

        <div class="col-md-9 personal-info">
            <h3>Personal info</h3>

            <form class="form-horizontal" role="form">
                <div class="form-group">
                    <label class="col-lg-3 control-label">First name:</label>
                    <div class="col-lg-8">
                        <input class="form-control" type="text" placeholder="eg. John">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Last name:</label>
                    <div class="col-lg-8">
                        <input class="form-control" type="text" placeholder="eg. Doe">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-3 control-label">Email:</label>
                    <div class="col-lg-8">
                        <input class="form-control" type="text" placeholder="eg. john_doe@gmail.com">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-3 control-label">Phone Number:</label>
                    <div class="col-lg-8">
                        <input class="form-control" type="text" placeholder="eg. xxxx-xxx-xxx">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label"></label>
                    <div class="col-md-8">
                        <a href="../edit_info.php">
                            <input type="button" class="btn btn-primary" value="Edit information">
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<hr>

<a id="back_to_top"></a>
<script type="text/javascript" src="../js/backToTop.js"></script>

<?php
require_once "Footer.php";
?>

</body>
</html>
