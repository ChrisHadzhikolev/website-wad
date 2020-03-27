<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
header("location: LoginPage.php");
exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>

</head>
<body>

<?php
require_once "Navigation.php"
?>
<?php
require_once "Footer.php"
?>
</body>
</html>
