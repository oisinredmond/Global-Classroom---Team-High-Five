<?php
include_once("basic.php");
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Hilton Hotel || Dublin</title>
		<link rel="stylesheet" href="css/normalize.css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="../css/main.css">
		<link rel="stylesheet" href="../css/responsive.css">
        <link href="../ninja-slider.css" rel="stylesheet" type="text/css" />
        <script src="../js/ninjaVideoPlugin.js" type="text/javascript"></script>
        <script src="../js/ninja-slider.js" type="text/javascript"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<script type="text/javascript">
            var imagecount = 1;
            var total = 4;

            function slide(x) {
                var Image = document.getElementsByCID('img');
                imagecount = imagecount + 1;
                if (imagecount > total) { imagecount = 1; }
                if(imagecount < 1){ imagecount = total;}
                Image.src ="../img"+ imagecount +".jpg"
            }

            window.setInterval (function slideA() {
                var Image = document.getElementById('img');
                imagecount = imagecount + 1;
                if(imagecount > total){ imagecount = total;}
                Image.src = "../img"+ imagecount +".jpg";
            }, 5000);

        </script>
	</head>

	<body onload="slideA()">



<div
        <div id='ninja-slider'>
            <ul>
                <li>
                    <div data-image="../img/gym.jpg">
                        <h3 style="position:absolute;margin:0;width:100%;height:36px;line-height:36px;top:auto;bottom:0px;text-align:center;color:#fff;background:rgba(0,0,0,0.25);">
                    </div>
                </liv>
                 <li>
                    <div data-image="../img/pool.jpg">
                        <h3 style="position:absolute;margin:0;width:100%;height:36px;line-height:36px;top:auto;bottom:0px;text-align:center;color:#fff;background:rgba(0,0,0,0.25);">
                    </div>
                </liv>

                <li>
                    <div data-image="../img/relax.jpg">
                        <h3 style="position:absolute;margin:0;width100%;height:36px;line-
                        height:36px;top:auto;bottom:0px;text-align:center;color:#fff;background:rgba(
                        0,0,0,0.25);">
                    </div>
                </liv>
                <li>
                    <div data-image="meeting.jpg">
                        <h3 style="position:absolute;margin:0;width:100%;height:36px;line-height:36px;top:auto;bottom:0px;text-align:center;color:#fff;background:rgba(0,0,0,0.25);">
                    </div>
                </liv>
            </ul>
        </div>
</div>

<table>
	<td>
<h3 style = "color: #1e4979;">AMENITIES AND SERVICES</h3>
			Whether conducting business, keeping up with a fitness routine or looking to spend quality time with your family, our Hilton hotel is here to make the most of your stay by offering the services you need, the amenities you expect, and the extras you deserve.</p>
</td>
</table>
<table>
	<td>
<h3 style = "color: #1e4979;">FOR YOUR FITNESS AND RECREATION CONVENIENCE</h3>
			<li>Fitness Room</li>
			<li>Sight Seeing Tours</li>
			<li>Swimming pool</li>
			<li>Gym</li>
			<li>Spa</li>
</td>
</table>

<table>
	<td>
<h3 style = "color: #1e4979;">FOR YOUR ACCESSIBILITY NEEDS</h3>
		<li>Accessible</li>
		<li>Accessible elevators</li>
		<li>Accessible meeting rooms</li>
		<li>Accessible parking</li>
		<li>Accessible parking spaces for cars in the self-parking facility</li>
		<li>Accessible public entrance</li>
		<li>Accessible route from the accessible public entrance to the accessible guestrooms</li>
		<li>Accessible route from the hotel’s accessible entrance to the meeting room/ballroom area</li>
		<li>Accessible route from the hotel’s accessible public entrance to at least one restaurant</li>
		<li>Evacuation chair available to help evacuate a disabled person</li>
		<li>Grab bars in bathroom</li>
		<li>Hotel complies with the Americans with Disabilities Act of 1990</li>
		<li>Level or ramp entrance into the building</li>
		<li>Public Areas/Facilities accessible for physically challenged</li>
		<li>Rooms accessible to wheelchairs (no steps)</li>
		<li>Service support animals welcome</li>
		<li>Wheelchair ramp for lobby/reception access	</li>
</td>
</table>

			 <form align  = "middle">
			<footer>
				<img src = "../img/hilton2.png" alt = "trip" align = "middle" style = "width: 200px; height: 100px;" ><br>
				<p>&copy; 2018 High Five</p>
				<a href="http://twitter.com"><img src="../img/twitter-wrap.png" alt="Twitter Logo" class="social-icon"></a>
				<a href="http://facebook.com"><img src="../img/facebook-wrap.png" alt="Facebook Logo" class="social-icon"></a>

			</footer>
		</form>s
	</body>
</html>
