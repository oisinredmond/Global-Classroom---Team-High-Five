<?php
	include 'dbconnect.php';
	
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
	
	$checkin = date('Y-m-d H:i:s', strtotime($checkin));
	$checkout = date('Y-m-d H:i:s', strtotime($checkout));
	
	$query = "SELECT * FROM Rooms WHERE room_id NOT IN (
			SELECT room_id FROM BOOKING
			where (check_in between 2018-05-03 AND 2018-05-08)OR
		(check_out between 2018-05-08 AND 2018-05-03))";


?>
			
			
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

	<div class="container">
	
		<h1>Search Results</h1>
		<h2 class="lead"><strong class="text-danger"><?php echo $num_results ?></strong> results were found for the search.</h2>	

	<section class="col-xs-12 col-sm-6 col-md-12">
	    <?php
				
	$resultset = mysqli_query($dbConnect,$query);
	$num_results = mysqli_num_rows($resultset);
			if($num_results>0) {
				echo '<p>' dkjfkdjfkdjfdkdjfkfdk'</p>';
			}
	    while ($row = mysqli_fetch_array($resultset) )
	    {
		    echo '<article class="search-result row">
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
				 <form method="get">
				 <input type="button" value="View Room" onClick="window.location="view_room.php?var="' . $row['Room_id'] . '">
				 </form>
			     </div>
			     <span class="clearfix border"></span>
		        </article>';
		}	
				
	?>
	  </div>
	</section>
	
</div>
		
	</body>
</html>

	


