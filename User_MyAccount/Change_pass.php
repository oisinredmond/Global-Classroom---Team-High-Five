<?php
	include '../php/dbConnect.php';
	session_start();
	/*
	$Uname = $_SESSION['username'];
	*/
	$Uname = "BAJones25";
	echo $_POST["Pass"];
    $sql = "UPDATE USERS SET Password="."'".$_POST["Pass"]."'"." WHERE UName="."'".$Uname."'";

	$dbConnect->query($sql);
	
	header("location:http://localhost/Global-Classroom-Team-High-Five/User_MyAccount/MyAccount.php");
 ?>