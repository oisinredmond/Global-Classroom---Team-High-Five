<?php
$servername = "mysql.hostinger.kr";
$database = "u375181454_hotel";
$username = "u375181454_juhee";
$password = "dst1738";
// Create connection
$dbConnect = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$dbConnect) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($dbConnect);
?>
