<?php
$header = "From:".$_POST["Email"];
$MSG = $_POST["data"];
$sub = $_POST["subject"];
$MSG = wordwrap($MSG,70);
mail("placeholder@placeholder.com",$sub,$MSG,$header);
?>
