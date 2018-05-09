<?php
session_start();include './auth.php';
$_SESSION['userID'] = $_POST['username'];
$_SESSION['password'] =  $_POST['password'];





$re = mysqli_query($dbConnect,"SELECT * from users where User_id = '".$_SESSION['userID']."'  AND Password = '".$_SESSION['password']."' " );
echo mysqli_error($dbConnect);

if(mysqli_num_rows($re) > 0)
{
header('Refresh: 0;url=main3.php');
}
else
{

session_destroy();
header("location: main.html");
}

?>
