<!DOCTYPE html>
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




echo mysqli_error($dbConnect);

if(mysqli_num_rows($re) > 0)
{
$name=$_SESSION['userID'];
}
 echo $_SESSION['userID'];
 echo $_SESSION['booking_id'];
$email = "";
$fname = "";
$lname = "";
$total = "";
$deposit = "";
$bal = "";
$id = $_SESSION['booking_id'];
if(isset($id) && !empty($id)){
mysqli_query($dbConnect,"UPDATE  `booking` SET  `payment_status` =  'paid' WHERE  `booking`.`booking_id` = '".$id."';");
echo mysqli_error($dbConnect);
mysqli_query($dbConnect,"UPDATE  `bookings` SET  `Payment_Status` =  'paid' WHERE  `bookings`.`Booking_id` = '".$id."';");

mysqli_query($dbConnect,"INSERT INTO billing (Transaction_id,	Amt,	Booking_id,	User_id) VALUES ( null,'".$_SESSION['total_amount']."','".$_SESSION['booking_id']."','".$_SESSION['userID']."');");

$result = mysqli_query($dbConnect,"select * from booking where booking_id = '".$id."';");
if(mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_array($result))
		{
		$email = $row['email'];
		$fname = $row['first_name'];
		$lname = $row['last_name'];
		$total = $row['total_amount'];
		$deposit = $row['deposit'];
		$bal = $row['total_amount']-$row['deposit'];

		}
	}



}

require 'class.phpmailer.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;
$mail->SMTPSecure = 'ssl';

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'emailContents.php';

//Set the hostname of the mail server
$mail->Host = 'smtp.naver.com';

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 465;

//Set the encryption system to use - ssl (deprecated) or tls

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "khkim1744@naver.com";

//Password to use for SMTP authentication
$mail->Password = "dst3261738";

//Set who the message is to be sent from
$mail->setFrom('khkim1744@naver.com', '보낸사람');

//Set an alternative reply-to address
$mail->addReplyTo('khkim1744@naver.com', '보낸사람');

//Set who the message is to be sent to
$mail->addAddress('khkim3261738@gmail.com', '받는사람');

//Set the subject line
$mail->Subject = 'PHPMailer GMail SMTP test';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML("Confirmed Page", dirname(__FILE__));

//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';

//Attach an image file

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
?>

?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Reservation</title>
<meta name="reservation hotel for malaysia" >
<meta name="zulkarnain" content="juuheeeee950625.xyz">
<meta name="copyright" content="Hotel Malaysia, inc. Copyright (c) 2014">
<link rel="stylesheet" href="../scss/foundation.css">
<link rel="stylesheet" href=".../scss/style.css">
<link href='http://fonts.googleapis.com/css?family=Slabo+13px' rel='stylesheet' type='text/css'>
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="icon/css/fontello.css">
<link rel="stylesheet" href="icon/css/animation.css"><!--[if IE 7]><link rel="stylesheet" href="css/fontello-ie7.css"><![endif]-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
<script src="jquery.backstretch.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
<meta class="foundation-data-attribute-namespace"><meta class="foundation-mq-xxlarge"><meta class="foundation-mq-xlarge"><meta class="foundation-mq-large"><meta class="foundation-mq-medium"><meta class="foundation-mq-small"><style></style><meta class="foundation-mq-topbar"></head>
<body class="fontbody" style="background-image : url(img/background.jpg); no-repeat center center fixed; background-size: cover;">
<div class="row " >
	<div class="large-4 columns blackblur "  style="margin-top:100px; ">
		<p class="fontslabo " style="text-align:left; font-size:18px;"><br><h4>Payment Deposit Accepted</h4><hr><br>Please check your email regarding your deposit payment through PayPal. Thank you on using our facility.</p>
		<br>

		<a class="button small" style="background-color:#2f2a60;" href="./reservationdetail.php">Check Details</a>
		<a class="button small" style="background-color:#2f2a60;" href="./index.php">Make New Booking</a>
	</div>
</div>
</body></html>
