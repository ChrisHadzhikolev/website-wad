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


<table id="myTable" class="table" style="width: 50%; background-color:  #2c292f; color: white">
    <thead class="thead" >
    <tr>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Warning</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to remove this user?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No, don't remove</button>
                        <button onclick="myFunction()" type="button" class="btn btn-primary">Yes, remove</button>
                    </div>
                </div>
            </div>
        </div>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>

    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>@GubqTeBavno </td>
        <td><button type="button" class="btn btn-outline-warning"data-toggle="modal" data-target="#staticBackdrop">Remove</button></td>
        <td><button type="button" class="btn btn-outline-warning">Edit user</button></td>
        <!-- Button trigger modal -->

    </tr>
    <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>@TheBoss</td>
        <td><button type="button" class="btn btn-outline-warning"data-toggle="modal" data-target="#staticBackdrop">Remove</button></td>
        <td><button type="button" class="btn btn-outline-warning">Edit user</button></td>
    </tr>
    <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>@hop</td>
        <td><button type="button" class="btn btn-outline-warning"data-toggle="modal" data-target="#staticBackdrop">Remove</button></td>
        <td><button type="button" class="btn btn-outline-warning">Edit user</button></td>
    </tr>
    <tr>
        <th scope="row">4</th>
        <td>Mark</td>
        <td>Otto</td>
        <td><button type="button" class="btn btn-outline-warning"data-toggle="modal" data-target="#staticBackdrop">Remove</button></td>
        <td><button type="button" class="btn btn-outline-warning">Edit user</button></td>

    </tr>
    <tr>
        <th scope="row">5</th>
        <td>Mark</td>
        <td>@Habibi</td>
        <td><button type="button" class="btn btn-outline-warning"data-toggle="modal" data-target="#staticBackdrop">Remove</button></td>
        <td><button type="button" class="btn btn-outline-warning">Edit user</button></td>
    </tr>
    <tr>
        <th scuserope="row">6</th>
        <td>Mark</td>
        <td>@Mda</td>
        <td><button type="button" class="btn btn-outline-warning"data-toggle="modal" data-target="#staticBackdrop">Remove</button></td>
        <td><button type="button" class="btn btn-outline-warning">Edit user</button></td>
    </tr>
    </tbody>
</table>
<script>
    function myFunction() {
        document.getElementById("myTable").deleteRow(0);
    }
</script>
<?php
require_once "Footer.php";
?>
</body>
