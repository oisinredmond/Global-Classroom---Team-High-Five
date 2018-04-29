<?php include 'php/dbConnect.php'; ?>

	<head>
		<?php 
			$ID = "'BJ7689'";
			$select = "select UName,Phone,Email from USERS where User_id = ".$ID;
			$stmt = $dbConnect->query($select) or die($dbConnect->error);
			$row = $stmt->fetch_assoc();
			
		?>
	</head>
	<body>
		<div id = "booking_div">
			<table id ="Booking_info">
			<table>
		</div>
		<div id = "personal_details_div">
			<table id = "personal Details">
			<tr>
				<td>
					Username
				</td>
				<td>
					<?php 
						if(empty($row)){
							header("Location:http://localhost/Global-Classroom-Team-High-Five/main.php");
						}else{
					
							echo $row['UName'];
						}					
					?>
				</td>
			</tr>
			<tr>
				<td>
					password
				</td>
				<td>
					****
				</td>
			</tr>
			<tr>
				<td>
					Address
				</td>
				<td>
				</td>
			</tr>
			<tr>
				<td>
					Phone
				</td>
				<td>
					<?php echo $row['Phone']; ?>
				</td>
			</tr>
			<tr>
				<td>
					Email
				</td>
					
				<td>
					<?php echo $row['Email']; ?>
				</td>
			</tr>
			</table>
		</div>
	</body>
</html>