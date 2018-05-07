<?php


 $user = 'root';
 $passWord = '';
 $dbName = 'hotel';

 $dbConnect = new mysqli('localhost',$user,$passWord,$dbName);
 //connection to the database

//select a database to work
$db = "hotel";
$selected = mysqli_select_db($dbConnect,$db)
  or die(mysql_error());


?>
