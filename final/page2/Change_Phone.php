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
	$Uname = $_SESSION['UName'];

	if(isset($_POST['Phone']))
	{
		echo "yes";

	}
	else
	{
		echo "no";
	}

	echo $_REQUEST['Phone'];
    $sql = "UPDATE users SET Phone="."'".$_REQUEST["Phone"]."'"." WHERE UName="."'".$Uname."'";
	$dbConnect->query($sql);
	
	header("location:MyAccount.php");
 ?>
