<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Hilton Hotel || Dublin </title>
	<link rel="stylesheet" href="../css/normalize.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="../css/responsive.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>

    <header>
        <a href="../main.php" id="logo">
            <h1>Hilton Hotel Dublin</h1>
            <h2>Best hotel in the city of Dublin</h2>
        </a>
        <nav>
            <ul>
                <li><a href="../main.php" class="selected">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="offer.html">Offer</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="register.html">Register</a></li>
            </ul>
        </nav>
    </header>

<?php

$servername = "mysql.hostinger.kr";
$database = "u375181454_hotel";
$username = "u375181454_juhee";
$password = "dst1738";
// Create connection
$dbConnect = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$dbConnect) {
    die("Connection failed: " . mysqli_connect_error());
}
	
	if(isset($_POST['quantityAdults'])){
				$quantityAdults = $_POST['quantityAdults'];
			}

			if(isset($_POST['quantityChildren'])){
				$quantityChildren = $_POST['quantityChildren'];
			}

			if(isset($_POST['checkin'])){
				$checkin = $_POST['checkin'];
				$_SESSION['checkin'] = date('y-m-d', strtotime($_POST['checkin']));
			}

			if(isset($_POST['checkout'])){
				$checkout = $_POST['checkout'];
				$_SESSION['checkout'] = date('y-m-d', strtotime($_POST['checkout']));
			}
			
			$datestart =  date('y-m-d', strtotime($_SESSION['checkin']));
			$dateend =  date('y-m-d', strtotime($_SESSION['checkout']));
			
			$query = "SELECT * FROM rooms WHERE room_id NOT IN (
					SELECT room_id FROM bookings
					where (check_in between '$datestart' AND '$dateend')OR
				(check_out between '$dateend' AND '$datestart'))";


			$re = mysqli_query($dbConnect,$query);
			$num_rows = mysqli_num_rows($re);
			$_SESSION['adults'] = $quantityAdults;
			$_SESSION['children'] = $quantityChildren;
			?>
			

				   
			<div class="container">
			<h1>Search Results</h1>
			<h2 class="lead"><strong class="text-danger"><?php echo $num_rows ?></strong> results  found.</h2>
			<section class="col-xs-12 col-sm-6 col-md-12">
			
			<?php
			while ($row = $re->fetch_assoc()){

				echo '<article class="search-result row">
				  <div class="col-xs-12 col-sm-12 col-md-3">
				  <class="thumbnail"><img src="../' . $row['img'] .'"/></a></div>
				  <div class="col-xs-12 col-sm-12 col-md-2">';

				echo '<ul class="meta-search">
				  <li><i class="glyphicon glyphicon-user"></i> <span>' . $row['Room_Size'] . '</span></li>
				  <li><i class="glyphicon glyphicon-tags"></i> <span>' . $row['Room_name'] . '</span></li>
				  <li><i class="glyphicon glyphicon-euro"></i> <span>' . $row['Rate'] . '</span></li>
			      </ul></div>';

				echo '<div class="col-xs-12 col-sm-12 col-md-7 excerpet">
				 <h3>' . $row['Room_name'] . '</h3>
				 <p>' . $row['Description'] . '</p>
				 <form method="post" action="guest_booking.php">';
				
				$int = 1;
				foreach($row as $detail)
				{
					echo '<input type="hidden" name="room_detail[' . $int . ']" value="' . $detail . '">';
					$int ++;
				}				   
			
				echo '<input type="submit" value="Add To My Booking">
				 </form>
			     </div>
			     <span class="clearfix border"></span>
		        </article>';
		}
	?>
	  </div>
	</section>

	</body>
</html>
