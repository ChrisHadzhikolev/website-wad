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

    <link rel="stylesheet" href="usersStyle.css">
    <link rel="stylesheet" href="../css/footerStyle.css">
        <link rel="stylesheet" href="../css/navigationStyle.css">
        <link rel="stylesheet" href="../css/backToTopStyle.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   
    <title>Telepathy Bean</title>
</head>
<?php
require_once "Navigation.php";
?>
<body style="background-color:#e0ac1c;">


<table class="table" style="width: 50%; background-color:  #2f292f; color: white">
  <thead class="thead" >
    <tr>
      
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>@GubqTeBavno </td>
      <td><button class="btn"><i class="fa fa-trash"></i> Remove</button></td>
      <td><button class="btn"><i class="fas fa-pen"></i> Edit user</button></td>
      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>@TheBoss</td>
      <td><button class="btn"><i class="fa fa-trash"></i> Remove</button></td>
      <td><button class="btn"><i class="fas fa-pen"></i> Edit user</button></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>@hop</td>
      <td><button class="btn"><i class="fa fa-trash"></i> Remove</button></td>
      <td><button class="btn"><i class="fas fa-pen"></i> Edit user</button></td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Mark</td>
      <td>Otto</td>
      <td><button class="btn"><i class="fa fa-trash"></i> Remove</button></td>
      <td><button class="btn"><i class="fas fa-pen"></i> Edit user</button></td>
      
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Mark</td>
      <td>@Habibi</td>
      <td><button class="btn"><i class="fa fa-trash"></i> Remove</button></td>
      <td><button class="btn"><i class="fas fa-pen"></i> Edit user</button></td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>Mark</td>
      <td>@Mda</td>
      <td><button class="btn"><i class="fa fa-trash"></i> Remove</button></td>
      <td><button class="btn"><i class="fas fa-pen"></i> Edit user</button></td>
    </tr>
  </tbody>
</table>
<?php
require_once "Footer.php";
?>
</body>
