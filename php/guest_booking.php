<?php session_start() ?>
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

    <div class="container">
	  <section class="col-xs-12 col-sm-6 col-md-12">
	
		<?php
		if(isset($_POST['room_detail']))
		{
			$room = $_POST['room_detail'];
		}
		$_SESSION['selected_rooms'];
		$_SESSION['total_price'] = 0;

		if(isset($_POST['room_detail']) && !in_array($room, $_SESSION['selected_rooms'])){
			//Adding selected room to session array
			array_push($_SESSION['selected_rooms'],$_POST['room_detail']);
		};
				
		foreach($_SESSION['selected_rooms'] as $room){
			$_SESSION['total_price'] = $_SESSION['total_price'] + $room[8];
			echo '<article class="search-result row">
					  <div class="col-xs-12 col-sm-12 col-md-3">
					  <class="thumbnail"><img src="../' . $room[7] .'"/></a></div>
					  <div class="col-xs-12 col-sm-12 col-md-2">';

				echo '<ul class="meta-search">
					  <li><i class="glyphicon glyphicon-user"></i> <span>' . $room[3] . '</span></li>
					  <li><i class="glyphicon glyphicon-tags"></i> <span>' . $room[5] . '</span></li>
					  <li><i class="glyphicon glyphicon-euro"></i> <span>' . $room[6] . '</span></li>
					  </ul></div>';

				echo '
					 <div class="col-xs-12 col-sm-12 col-md-7 excerpet">
					 <h3>' . $room[5] . '</h3>
					 <p>' . $room[4] . '</p>
					 </div>
					 <span class="clearfix border"></span>
					</article>';
		}
		?>
	
	    <h3>Total Price: €<?php echo $_SESSION['total_price'];?></h3>
	    <h3>Check-in Date: <?php echo $_SESSION['checkin'];?></h3>
	    <h3>Check-out Date: <?php echo $_SESSION['checkout'];?></h3>
        <h2><a href ="search_rooms.php">Add Another Room</a></h2>
	    <form method="post" action="guest_booking.php">
			<input type="submit" value="Clear List" name="clear_list">
		</form></br>
		<form action="guest_details.php">
			<input type="submit" value="Continue">
		</form>
	  </section>
	</div>
	
	<?php
		if(isset($_POST['clear_list']))
		{
			$_SESSION['selected_rooms'] = array();
			header("Refresh:0");
		}
	?>
	
	
  </body>
</html>