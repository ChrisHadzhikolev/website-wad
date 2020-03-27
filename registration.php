<?php
require_once "config.php";

$username = $password = $confirm_password = $email = $first_name = $last_name = "";
$username_err = $password_err = $confirm_password_err = $email_err = $first_name_err = $last_name_err =  "";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    //Username
    if(empty(trim($_POST["username"])))
    {
        $username_err = "Please, enter a username!";
    }
    else
        {
        $sql = "SELECT id FROM users WHERE username = :username";

        if($stmt = $pdo->prepare($sql))
        {
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);

            $param_username = trim($_POST["username"]);

            if($stmt->execute())
            {
                if($stmt->rowCount() == 1)
                {
                    $username_err = "This username is already taken!";
                } else{
                    $username = trim($_POST["username"]);
                }
            }
            else
                {
                echo "Oops! Something went wrong. Please try again later.";
            }
            unset($stmt);
        }
    }

    if(empty(trim($_POST["first_name"]))) {
    $first_name_err = "Please, enter First Name!";
}
    else{
        $first_name = trim($_POST["first_name"]);
    }
    if(empty(trim($_POST["last_name"]))){
        $last_name_err = "Please, enter a Last Name!";
    }
    else{
        $last_name = trim($_POST["first_name"]);
    }
    //Email
    if(empty(trim($_POST["email"])))
    {
        $email_err = "Please, enter a valid email!";
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    }
    else{
            $sql = "SELECT email FROM people_info as pi inner join users as u on pi.username = u.username where email = :email";

            if($stmt = $pdo->prepare($sql)){
                $stmt->bindParam(":email", $param_email, PDO::PARAM_STR);

                $param_email = trim($_POST["email"]);


                if($stmt->execute()){
                    if($stmt->rowCount() == 1){
                        $email_err = "This email is already taken!";
                    } else{
                        $email = trim($_POST["email"]);
                    }
                } else{
                    echo "Oops! Something went wrong. Please try again later.";
                }
                unset($stmt);
            }
        }

    //Password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";
    } elseif(strlen(trim($_POST["password"])) < 8){
        $password_err = "Password must be at least 8 characters.";
    } else{
        $password = trim($_POST["password"]);
    }

    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }

    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err) && empty($email_err) && empty($first_name_err)&& empty($last_name_err)){

        // Prepare an insert statement
        $sql = "INSERT INTO users (id, username, password, type_user) VALUES (null, :username, :password, :typeOfUser)";
        $sql1 = "INSERT INTO people_info (id, first_name, last_name, email, username) VALUES (null, :firstName, :lastName, :email, :username)";

        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            $stmt->bindParam(":password", $param_password, PDO::PARAM_STR);
            $stmt->bindParam(":typeOfUser", $param_userType, PDO::PARAM_STR);

            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT);
            $param_userType = "Standard";

            // Attempt to execute the prepared statement
            if($stmt->execute()){
                unset($stmt);
                if($stmt = $pdo->prepare($sql1)) {
                    $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
                    $stmt->bindParam(":firstName", $param_first_name, PDO::PARAM_STR);
                    $stmt->bindParam(":lastName", $param_last_name, PDO::PARAM_STR);
                    $stmt->bindParam(":email", $param_email, PDO::PARAM_STR);

                    $param_username = $username;
                    $param_first_name = $first_name;
                    $param_last_name = $last_name;
                    $param_email = $email;
                    if($stmt->execute()){
                        header("location: LoginPage.php");
                    }
                }else{
                    echo "Something went wrong. Please try again later.";
                }


            } else{
                echo "Something went wrong. Please try again later.";
            }
            unset($stmt);
        }
    }
    unset($pdo);
}


