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
		$data = $_REQUEST["data"];
		$bkquery = "SELECT Booking_id,BOOKING_ITEM.Room_id,Room_Size,Room_num,Price,Rate from BOOKING_ITEM INNER JOIN ROOMS on BOOKING_ITEM.Room_id = ROOMS.Room_id where Booking_id ="."'".$data."'";
		$bkstmt = $dbConnect->query($bkquery) or die($dbConnect->error);

		$TotalCost = 0;
		echo "<h3><a href = 'MyAccount.php'><---- Back</a></h3>";
		echo "<h1 style='color:black'> Booking Breakdown:".$data."</h1>";
		echo "<table>";
		echo "<tr>";
		echo "<th> Room Number </th>";
		echo "<th> Type </th>";
		echo "<th> Price </th>";
		echo "<tr>";

		while($Booking = $bkstmt->fetch_assoc())
		{
			$actual_price=$Booking["Price"]*$Booking["Rate"];
			echo "<tr>";
			echo "<td>".$Booking["Room_num"]."</td>";
			echo "<td>".$Booking["Room_Size"]."</td>";
			echo "<td>"."&euro;".($actual_price)."</td>";
			$TotalCost = $TotalCost+$actual_price;
		}
			echo "<tr>";
			echo "<th colspan = 2;> TOTAL : </th>";
			echo "<td>"."&euro;".$TotalCost."</td>";
	?>
