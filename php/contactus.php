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

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone_num = $_POST['phone_num'];
$message = $_POST['message'];

$insertquery = "insert into contactus(fullname, email, phone_num, message) values('$fullname', '$email', '$phone_num', '$message')";

$res = mysqli_query($conn, $insertquery);

if ($res) {
?>
<script>
alert("Your Query has been Captured. We will get back to you..");
</script>

<?php
   
} else {
?>

<script>
alert("Your Query not Captured. Please re-enter");
</script>
<?php

}

header("location: ../contact.html ");

?>