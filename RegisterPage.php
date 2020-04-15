<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <link rel="stylesheet" href="../css/registerStyle.css">

    <title>Register</title>
</head>
<body>
<?php
require_once '../registration.php';
?>
<div class="modal">

    <form class="modal-content animate" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="container" >
            <div <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>>
                <label for="username"><b>Username</b></label>
                <input type="text" placeholder="Username" value="<?php echo $username; ?>" name="username" required>
                <span><?php echo $username_err; ?></span>
            </div>
            <div<?php echo (!empty($first_name_err)) ? 'has-error' : ''; ?>>
            <label for="first_name"><b>First name</b></label>
            <input type="text" placeholder="Enter first name" name="first_name" required>
            <span><?php echo $first_name_err; ?></span>
        </div>
        <div <?php echo (!empty($last_name_err)) ? 'has-error' : ''; ?>>
            <label for="last_name"><b>Last name</b></label>
            <input type="text" placeholder="Enter last name" name="last_name" required>
            <span><?php echo $last_name_err; ?></span>

        </div>
        <div <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>>
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter email" name="email" required>
            <span><?php echo $email_err; ?></span>
        </div>

            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label for="password"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>
                <span><?php echo $password_err; ?></span>
            </div>

            <div <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>>
            <label for="confirm_password"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="confirm_password" required>
            <span><?php echo $confirm_password_err; ?></span>
        </div>
        <button type="submit" class="registerbtn">Sign up</button>
        </div>
        <div class="container signin">
    <p>Already have an account? <a href="LoginPage.php">Login</a>.</p>
</div>
        </div>
    </form>
</div>


</body>
</html>
