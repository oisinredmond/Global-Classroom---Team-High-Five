<?php

session_start();
include 'authorization.php';
$_SESSION['checkin_date'] = "";
$_SESSION['checkout_date'] = "";
//$_SESSION['bookingid'] = "";
//$_SESSION['firstname']= "";

if(isset($_POST["checkin"])){
$_SESSION['checkin_date'] = date('d-m-y', strtotime($_POST['checkin']));
$datestart =  date('y-m-d', strtotime($_POST['checkin']));
}
if(isset( $_POST["checkout"] ) ){
$_SESSION['checkout_date'] = date('d-m-y', strtotime($_POST['checkout']));
$dateend =  date('y-m-d', strtotime($_POST['checkout']));
}
//if(isset( $_POST["bookingid"] ) ){
//$_SESSION['bookingid'] = $_POST["bookingid"];
//}
//if(isset( $_POST["firstname"] ) ){
//$_SESSION['firstname'] = $_POST["firstname"];
//}
include './auth.php';

	if(!empty($_POST["checkin"]) && !empty($_POST["checkout"])){
		$sql3="SELECT * from bookings where
			((bookings.check_in between '".$datestart."' AND '".$dateend."') OR (bookings.Check_out between '".$dateend."' AND '".$datestart."'))
			";
					$_SESSION['result'] = $dbConnect->query($sql3);
	}
	else {
	$sql2= "SELECT bookings.*  from bookings;";	echo mysqli_error($dbConnect);
			$_SESSION['result'] =  $dbConnect->query($sql2);
	}


	if(mysqli_num_rows($_SESSION['result']) > 0){
				while ($row = mysqli_fetch_array($_SESSION['result']) ){
							print "<tr style=\"\">		 <td>".$row['Booking_id']."</td>\n";
							print "                  <td>".$row['Check_in']."</td>\n";
							print "                  <td>".$row['Check_out']."</td>\n";
											print "<td>";
											$q = mysqli_query($dbConnect,"SELECT count(booking_item.room_id) AS total, rooms.room_name AS name
																FROM booking_item
																LEFT JOIN rooms ON booking_item.room_id = rooms.room_id
																WHERE booking_item.booking_id =".$row['Booking_id'].";");
											while($r = mysqli_fetch_array($q))
											{
											print "                  ".$r['total']." ".$r['name']."<br> \n";
											}
											print "</td>";
							print "                  <td>Adult:".$row['Total_Adults']."<br>Child:".$row['Total_Children']."</td>\n";
							print "                  <td>".$row['Total_Cost']."</td>\n";
							print "                  <td>".$row['Deposit']."</td>\n";
							print "                  <td>".($row['Total_Cost']-$row['Deposit'])."</td>\n";
							print "                  <td>".$row['Payment_Status']."</td><td><a href=\"detail.php?booking=".$row['Booking_id']."\"  \">More Details</a></td><td><a class=\"delete\" href=\"deletebooking.php?booking=".$row['Booking_id']."\"    >Delete</a></td></tr>";

				}
			}
	else{
	print "<tr><td>No Record</td></tr>";
	}



?>
