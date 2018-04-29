<?php

/*
$servername = "mysql.hostinger.kr";
$database = "u375181454_hotel";
$username = "u375181454_juhee";
$password = "dst1738";

*/

$servername = "localhost";
$database = "hilton_hotel";
$username = "Hilton_admin";
$password = "HHAdmin?";

// Create connection
$dbConnect = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$dbConnect) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
// David: why is there a close here ? shuts down connection too early
#mysqli_close($dbConnect);
?>
