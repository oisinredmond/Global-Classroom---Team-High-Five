
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
$db = "u375181454_hotel";
$selected = mysqli_select_db($dbConnect,$db)
  or die("Could not select database");
?>
