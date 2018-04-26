<html>
  <head>
    <meta charset="utf-8">
    <title>Hilton Hotel || Dublin</title>
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
	include 'dbconnect.php';

	if(isset($_GET['room_id'])){
		$room_id = $_GET['room_id'];
	}	
	$query = "SELECT * FROM rooms WHERE Room_id = '$room_id'";
	
	$re = $dbConnect->query($query);
	$row = mysqli_fetch_assoc($re);
	
	?>
  
    <h1><?php echo $row['Room_name'] ?></h1>
	<section class="col-xs-12 col-sm-6 col-md-12">
	  <article class="search-result row">
	    <div class="col-xs-12 col-sm-12 col-md-3">
		  <class="thumbnail">
		    <img src="../<?php echo $row['img']?>"/></a>
		</div>
		
		<div class="col-xs-12 col-sm-12 col-md-2">';
		  <ul class="meta-search">
		    <li><i class="glyphicon glyphicon-user"></i> <span><?php echo $row['Room_Size']?></span></li>
		    <li><i class="glyphicon glyphicon-tags"></i> <span><?php echo $row['Room_name']?></span></li>
		    <li><i class="glyphicon glyphicon-euro"></i> <span><?php echo $row['Rate']?></span></li>
		  </ul>
		</div>
		
		     
	    <div class="col-xs-12 col-sm-12 col-md-7 excerpet">
		  <h3><a href="#" title=""><?php echo $row['Room_name']?></a></h3>
		  <p><?php echo $row['Description']?></p>						
	    </div>
	    <span class="clearfix border"></span>
      </article>;
  </body>
</html>
