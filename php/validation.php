<?php

$server = "localhost";
$username = "tauruson_jadmin";
$password = "taurus@1234";
$dbname = "tauruson_sciencehify";

$conn = mysqli_connect($server, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection Failed");
} else {
	echo "success";
}

$email = $_POST['email'];
// $password = $_POST['password'];
$password_decrypt = $_POST['password'];
$salt = "taurus";
$password = sha1($password_decrypt . $salt);
// $password = $_POST[password_hash($password_decrypt, PASSWORD_BCRYPT)];

// echo "$password";

$sql = " SELECT * from signin WHERE email = '$email' and password = '$password' ";

$query = mysqli_query($conn, $sql);

$row = mysqli_fetch_array($query);

// print_r($row);

if ($row['email'] == $email && $row['password'] == $password) {
	// echo "Login Success";
	header("location: ../index1.html ");
} else {
	header("location: ../login.html ");
	// echo "Login Failed";
}