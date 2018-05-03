<?php
	include '../php/dbConnect.php';
	session_start();
	/*
	$Uname = $_SESSION['username'];
	*/
	$Uname = "BAJones25";
	echo $_POST["Email"];
    $sql = "UPDATE USERS SET Email="."'".$_POST["Email"]."'"." WHERE UName="."'".$Uname."'";

	if ($dbConnect->query($sql) === TRUE) {
		echo "Record updated successfully";
	} else {
		echo "Error updating record: " . $conn->error;
	}

 ?>