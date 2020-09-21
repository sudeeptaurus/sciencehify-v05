<?php

// echo "Success";

$server = "localhost";
$username = "tauruson_jadmin";
$password = "taurus@1234";
$dbname = "tauruson_sciencehify";

$conn = mysqli_connect($server, $username, $password, $dbname);

// if ($conn->connect_error) {
//     die("Connection Failed");
// } else {
//     echo "success";
// }

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = $_POST['password'];
// $hash_password = $_POST[password_hash($password, PASSWORD_BCRYPT)];
// echo "$hash_password"; 
$salt = "taurus";
$password_encrpt = sha1($password . $salt);
$confirm_pwd = $_POST['password'];
// $hash_confirm_pwd = $_POST[password_hash($confirm_pwd, PASSWORD_BCRYPT)];
$confirm_pwd_encrpt = sha1($confirm_pwd . $salt);
$mnumber = $_POST['mnumber'];




// $con = new mysqli('localhost', 'root', '', 'sciregister');
if ($conn->connect_error) {
    die('Connection Failed : ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into signin(fullname, email, password, confirm_pwd, mnumber) values(?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssi", $fullname, $email, $password_encrpt, $confirm_pwd_encrpt, $mnumber);
    $stmt->execute();
    // echo "registration successfully..";
    header("location: ../login.html ");
    $stmt->close();
    $conn->close();
}