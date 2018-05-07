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
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Hilton Hotel || Dublin</title>
		<link rel="stylesheet" href="../css/normalize.css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="../css/main.css">
	
        <link href="../css/ninja-slider.css" rel="stylesheet" type="text/css" />
        <script src="../js/ninjaVideoPlugin.js" type="text/javascript"></script>
        <script src="../js/ninja-slider.js" type="text/javascript"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">


	</head>

	<body>


		<div id="wrapper">

			<img src="../img/about.jpg" alt="poster" class="Photo">
			<h3 style = "color: #1e4979;">Global mind</h3>
			<p>Hilton and our Team Members support a variety of charitable efforts. We make it easy for Hilton Honors members to do the same by converting points into assistance for those in need. We also support global sustainability in many ways. From implementing sustainability projects at every one of our hotels to partnering with Clean the World to recycle soap for donation, we are always looking for ways to reduce our impact. In fact, a Hilton hotel was the first to earn both LEED and Green Seal environmental certifications. We’re also proud to be active participants in our communities, volunteering to improve the lives of young people at over 1,500 global community projects as part of our Global Month of Service every year. We’re more than just a hotel – we’re a global citizen.</p>
			<h3 style = "color: #1e4979;">What can we do for you?</h3>
			<p>
				Our Team Members are always ready to provide friendly, individualized service to our guests. We’re also happy to offer a range of services to meet your needs. Keep up your workout routine at our on-site fitness centers or relax at one of our spas. From booking to checkout, we’re here to make your stay as enjoyable as possible. We know that food and drink are an important part of any stay. Whether dining in one of our innovative on-site restaurants or having a healthy Hilton Breakfast in-room, you’ll find delicious and accessible options to satisfy any craving.
			</p>

                <p>Sign up to our newsletter for more updates and offers!</p>


                <input type="text" name="inputbox" value="Please enter your e-mail">
                <button onclick="signup()">Sign up to our newsletter</button>



            </section>

			<footer>
				<p>&copy; 2017 High Five</p>
				<a href="http://twitter.com"><img src="../img/twitter-wrap.png" alt="Twitter Logo" class="social-icon"></a>
				<a href="http://facebook.com"><img src="../img/facebook-wrap.png" alt="Facebook Logo" class="social-icon"></a>
			</footer>
		</div>
	</body>
</html>
