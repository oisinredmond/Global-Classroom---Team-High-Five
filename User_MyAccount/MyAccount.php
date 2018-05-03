<?php include '../php/dbConnect.php'; ?>

	<head>
		<link rel="stylesheet" href="../css/main.css">
		<?php 
			session_start();
			/*
			Code to use sessions with system rather than sample
			$ID = $_SESSION['username'];
			$select = "select UName,Phone,Email from USERS where User_id = ".$ID;
			*/
			$count = 0;
			$ID = "'BJ76'";
			$userDataselect = "select UName,Phone,Email from USERS where User_id = ".$ID;
			$userBookingselect = "select Booking_id,Booking_date,Check_in,Check_out,Total_Cost,deposit,Payment_Status from Booking where User_id = ".$ID;
			$stmt1 = $dbConnect->query($userDataselect) or die($dbConnect->error);
			$row = $stmt1->fetch_assoc();
			$stmt2 = $dbConnect->query($userBookingselect) or die($dbConnect->error);
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
					
					}else if(x.id == "Email"){
						
						x.innerHTML = <?php echo "'" . $row["Email"] . "'";?>;
					}else if(x.id == "uname")
					{
						x.innerHTML = <?php echo "'" . $row["UName"] . "'";?>;
					}else{
						
						x.innerHTML = "****";
						
					}
					
					
				}
				
				function Redirect(x)
				{
					

					var id = x.firstChild.innerHTML;
					var newReq = new XMLHttpRequest();
					
					newReq.open('GET','BookingBreakdown.php?data='+id,true);
					newReq.onreadystatechange = function () { 
						if (newReq.readyState === 4) {
							// puts response into suggestion div
							var c = document.getElementById('booking_div');
							c.innerHTML = newReq.responseText;
							console.log(newReq.responseText);
							console.log("shit shoot bippity boot");
							
						}
					};
					newReq.send();
				}
		</script>
		
	</head>
	<body>
		<div id = "booking_div">
		<h1 style ="color:Black";> Booking Info <h1>
			<table id ="Booking_info">
				<tr id = booking_headers>
					<th>Booking Reference</th>
					<th>booking Date</th>
					<th>Check in</th>
					<th>Check out</th>
					<th>price</th>
					<th>Deposit</th>
					<th>Payment Status</th>
				</tr>
					<?php 
						
						while($row2 = $stmt2->fetch_assoc())
						{
							$count++;
							echo "<tr id = ".$count." onclick = 'Redirect(this)'>";
							echo "<td>".$row2['Booking_id']."</td>";
							echo "<td>".$row2['Booking_date']."</td>";
							echo "<td>".$row2['Check_in']."</td>";
							echo "<td>".$row2['Check_out']."</td>";
							echo "<td>".$row2['Total_Cost']."</td>";
							echo "<td>".$row2['deposit']."</td>"; 
							echo "<td>".$row2['Payment_Status']."</td>";
							echo "</tr>";
						}
					
					
					?>
					
			</table>
		</div>
		<div id = "personal_details_div">
		<h1 style ="color:Black";> Personal Details </h1>
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