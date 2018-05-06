<?php
	include '../php/dbConnect.php';
	session_start();
	/*
	$Uname = $_SESSION['username'];
	*/
	$Uname = "BAJones25";
	
	if(isset($_POST['Phone']))
	{
		echo "yes";
		
	}
	else
	{
		echo "no";
	}
	
	echo $_REQUEST['Phone'];
    $sql = "UPDATE USERS SET Phone="."'".$_REQUEST["Phone"]."'"." WHERE UName="."'".$Uname."'";

	$dbConnect->query($sql);
	
	header("location:http://localhost/Global-Classroom-Team-High-Five/User_MyAccount/MyAccount.php");
 ?>