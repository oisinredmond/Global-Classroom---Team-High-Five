<?php 
  $db = mysqli_connect('localhost', 'root', '');
  if ($db === FALSE ) die('False');
  if (mysqli_select_db($db,"hotel") === FALSE ) die("Fail message");
  ?>