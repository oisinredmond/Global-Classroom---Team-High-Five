<?php

 $user = 'root';
 $passWord = '';
 $dbName = 'hotel';

 $dbConnect = new mysqli('localhost',$user,$passWord,$dbName);

//select a database to work
$db = "hotel";
$selected = mysqli_select_db($dbConnect,$db)
  or die("Could not select database");


?>
