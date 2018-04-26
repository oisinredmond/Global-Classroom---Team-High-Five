
<?php
$servername = "mysql.hostinger.kr";
$database = "u375181454_tempp";
$username = "u375181454_tempp";
$password = "dst1738";
// Create connection
$dbConnect = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$dbConnect) {
    die("Connection failed: " . mysqli_connect_error());
}
$db = "u375181454_tempp";
$selected = mysqli_select_db($dbConnect,$db)
  or die("Could not select database");
?>
