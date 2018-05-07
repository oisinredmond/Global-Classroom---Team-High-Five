<?php
session_start();


 include_once ("./basic.php");
$link = mysqli_connect("localhost", "root", "", "hotel");

include './auth.php';
$re = mysqli_query($dbConnect,"SELECT * from users where User_id = '".$_SESSION['userID']."'  AND Password = '".$_SESSION['password']."' " );
echo mysqli_error($dbConnect);

if(mysqli_num_rows($re) > 0)
{
$name=$_SESSION['userID'];
}
	/*
	$Uname = $_SESSION['username'];
	*/
	$Uname = "juhee";
	echo $_POST["Email"];
    $sql = "UPDATE users SET Email="."'".$_POST["Email"]."'"." WHERE UName="."'".$_POST["UName"]."'";
	if ($dbConnect->query($sql) === TRUE) {
		echo "Record updated successfully";

	} else {
		echo "Error updating record: " . $conn->error;
	}
 ?>
