<?php

$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "sciregister";

$con = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);



if (!$con) {
    die("Connection Failed: " . mysqli_connect_error());
}

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$addr_1 = $_POST['addr_1'];
$addr_2 = $_POST['addr_2'];
$city = $_POST['city'];
$country = $_POST['country'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$lphone = $_POST['lphone'];
$mphone = $_POST['mphone'];



$insertquery = "INSERT INTO subsriber(fname, lname, email, addr_1, addr_2 , city, country, state, zip, lphone, mphone) VALUES ('$fname', '$lname', '$email', '$addr_1', '$addr_2', '$city', '$country', '$state', '$zip', '$lphone', '$mphone')";

$res = mysqli_query($con, $insertquery);

if ($res) {
?>
    <script>
        alert("Data Inserted");
    </script>

<?php

} else {
?>

    <script>
        alert("Data Not Inserted");
    </script>
<?php

}
