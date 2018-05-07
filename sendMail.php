<?php 

$header = "From:".$_POST["Email"];
$MSG = $_POST["data"];
$sub = $_POST["subject"];

$MSG = wordwrap($MSG,70);

mail("dcraigfox@hotmail.com",$sub,$MSG,$header);

if(mail("dcraigfox@hotmail.com",$sub,$MSG,$header))
{
	echo "<h1> Thank you for your feedback </h1>";
	echo "<script>setTimeout(\"location.href = 'http://localhost/Global-Classroom-Team-High-Five/main.php';\",1500);</script>";
}

?>