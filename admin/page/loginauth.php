<?php
session_start();
$link  = mysqli_connect("mysql.hostinger.kr","u375181454_juhee", "dst1738", "u375181454_hotel");
$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] =  $_POST['password'];
include './auth.php';
$re = mysqli_query($link,"SELECT * from Staff where S_name = '".$_SESSION['username']."'  AND Password = '".$_SESSION['password']."' " );
echo mysqli_error($link);
if(mysqli_num_rows($re) > 0)
{
header('Refresh: 0;url=dashboard.php');
}
else
{
echo mysqli_error($link);
session_destroy();
header("location: index.php");
}
?>
