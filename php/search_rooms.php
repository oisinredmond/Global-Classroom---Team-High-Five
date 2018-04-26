
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
					}

					if(isset($_POST['checkout'])){
						$checkout = $_POST['checkout'];
					}
					$_SESSION['checkout'] = date('y-m-d', strtotime($_POST['checkout']));
					$_SESSION['checkin'] = date('y-m-d', strtotime($_POST['checkin']));
					$datestart =  date('y-m-d', strtotime($_SESSION['checkin']));
					$dateend =  date('y-m-d', strtotime($_SESSION['checkout']));
					$query = "SELECT * FROM Rooms WHERE room_id NOT IN (
							SELECT room_id FROM bookings
							where (check_in between '$datestart' AND '$dateend')OR
						(check_out between '$dateend' AND '$datestart'))";

    
				if($re = $dbConnect->query($query)){
				   printf("Errormessage: %s\n", $dbConnect->error);
			 while ($row = $re->fetch_assoc()) {


		    echo '<div class="container">
				  <h1>Search Results</h1>
				  <h2 class="lead"><strong class="text-danger"></strong> results were found for the search.</h2>

				  <section class="col-xs-12 col-sm-6 col-md-12">
				  <article class="search-result row">
				  <div class="col-xs-12 col-sm-12 col-md-3">
				  <class="thumbnail"><img src="../' . $row['img'] .'"/></a></div>
				  <div class="col-xs-12 col-sm-12 col-md-2">';

		    echo '<ul class="meta-search">
				  <li><i class="glyphicon glyphicon-user"></i> <span>' . $row['Room_Size'] . '</span></li>
				  <li><i class="glyphicon glyphicon-tags"></i> <span>' . $row['Room_name'] . '</span></li>
				  <li><i class="glyphicon glyphicon-euro"></i> <span>' . $row['Rate'] . '</span></li>
			      </ul></div>';

		    echo '
			     <div class="col-xs-12 col-sm-12 col-md-7 excerpet">
				 <h3><a href="#" title="">' . $row['Room_name'] . '</a></h3>
				 <p>' . $row['Description'] . '</p>
				 <form action="view_room.php">
				   <input type="hidden" name="room_id" value="' . $row['Room_id'] . '">
				   <input type="submit" value="View Room">
				 </form>
			     </div>
			     <span class="clearfix border"></span>
		        </article>';
		}
}

	?>
	  </div>
	</section>

</div>

	</body>
</html>
