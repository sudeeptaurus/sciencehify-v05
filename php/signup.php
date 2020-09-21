<?php
require_once "config.php";

$email = $password = $confirm_pwd = "";
$email_err = $password_err = $confirm_pwd_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    // Check if email is empty
    if (empty(trim($_POST["email"]))) {
        $email_err = "Email cannot be blank";
    } else {
        $sql = "SELECT id FROM signin WHERE email = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "s", $param_email);

            // Set the value of param email
            $param_email = trim($_POST['email']);

            // Try to execute this statement
            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt);
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $email_err = "This email is already taken";
                } else {
                    $email = trim($_POST['email']);
                }
            } else {
                echo "Something went wrong";
            }
        }
    }
    mysqli_stmt_close($stmt);




    // Check for password
    if (empty(trim($_POST['password']))) {
        $password_err = "Password cannot be blank";
    } elseif (strlen(trim($_POST['password'])) < 5) {
        $password_err = "Password cannot be less than 5 characters";
    } else {
        $password = trim($_POST['password']);
    }

    // Check for confirm password field
    if (trim($_POST['password']) !=  trim($_POST['confirm_pwd'])) {
        $password_err = "Passwords should match";
    }


    // If there were no errors, go ahead and insert into the database
    if (empty($email_err) && empty($password_err) && empty($confirm_pwd_err)) {
        $sql = "INSERT INTO signin (fname, email, password, confirm_pwd, mnumber) VALUES (?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "ssssi", $param_fname, $param_email, $param_password, $param_confirm_pwd, $param_mnumber);

            // Set these parameters
            $param_fname = $fname;
            $param_email = $email;
            $param_password = password_hash($password, PASSWORD_DEFAULT);
            $param_confirm_pwd = password_hash($confirm_pwd, PASSWORD_DEFAULT);
            $param_mnumber = $mnumber;

            // Try to execute the query
            if (mysqli_stmt_execute($stmt)) {
                header("location: ../login.html ");
            } else {
                echo "Something went wrong... cannot redirect!";
            }
        }
        mysqli_stmt_close($stmt);
    }
    mysqli_close($conn);
}