<?php include 'php/dbConnect.php'; ?>

	<head>
		<?php 
			session_start();
			/*
			Code to use sessions with system rather than sample
			$ID = $_SESSION['username'];
			$select = "select UName,Phone,Email from USERS where User_id = ".$ID;
			*/
			
			$ID = "'BJ76'";
			$select = "select UName,Phone,Email from USERS where User_id = ".$ID;
			$stmt = $dbConnect->query($select) or die($dbConnect->error);
			$row = $stmt->fetch_assoc();
			
		?>
		
		<script language="JavaScript" type="text/javascript">
				function restyle(x)
				{
					x.style.backgroundColor = "#f2efef";
					x.innerHTML = "<a href='Change_"+x.id+".php'>Change "+x.id+"</a>";
					
				}
				
				function reset(x)
				{
					x.style.backgroundColor = "white";
					if( x.id == "Phone")
					{
						x.innerHTML = <?php echo $row["Phone"]; ?>;
					
					}
					else
					{
						x.innerHTML = "placeholder";
					}
				}
		</script>
		
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
				<td id = "uname" onmouseenter="restyle(this)" onmouseleave="reset(this)">
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
				<td id = "pass" onmouseenter="restyle(this)" onmouseleave="reset(this)">
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
				<td id = "Phone" onmouseenter="restyle(this)" onmouseleave="reset(this)">
					<?php echo $row['Phone']; ?>
				</td>
			</tr>
			<tr>
				<td>
					Email
				</td>
					
				<td id = "Email" onmouseenter="restyle(this)" onmouseleave="reset(this)">
					<?php echo $row['Email']; ?>
				</td>
			</tr>
			</table>
		</div>
	</body>
</html>