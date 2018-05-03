<?php
session_start();

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
	
	$uname = $_POST['uname'];
	$email = $_POST['email'];
	$pword = $_POST['pword'];
	$fullname = $_POST['full_name'];
	$street1 = $_POST['street1'];
	$street2 = $_POST['street2'];
	$phone = $_POST['phone'];
	$city = $_POST['city'];
	$post = $_POST['post'];
	
	$adults = $_SESSION['adults'];
	$children = $_SESSION['children'];
	$checkin = $_SESSION['checkin'];
	$checkout = $_SESSION['checkout'];
	$total_price = $_SESSION['total_price'];
	
	function randLetter()
	{
		$int = rand(0,25);
		$a_z = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
		$rand_letter = $a_z[$int];
		return $rand_letter;
	}
	
	
	$timestamp = date('m-d-Y h:i:s', time());
	$user_id = randLetter() . randLetter() . rand(0,9) . rand(0,9);
	if(!isset($_SESSION['booking_id']))
	{
		$_SESSION['booking_id'] = randLetter() . randLetter() . randLetter() . rand(0,9) . rand(0,9) . rand(0,9);
	}
	
	$stmt1 = "INSERT INTO Users VALUES('$user_id','$uname','$pword','$phone','$email','N')";
	$stmt2 = "INSERT INTO Address(Line_1,Line_2,city,Ad_State,Post_code,Country,UserId) VALUES('$street1','$street2','$city','temp','$post','IRL','$user_id')";
	$stmt3 = "INSERT INTO Bookings(Booking_id,Booking_date,Total_adults,Total_children,Check_in,Check_out,User_id,Total_cost) VALUES('" . $_SESSION['booking_id'] . "','$timestamp','$adults','$children','$checkin','$checkout','$user_id','$total_price')";
	
	
	
	if ($dbConnect->query($stmt1) === TRUE) {
		echo "New user created successfully</br>";
	} else {
		echo "</br>Error: " . $stmt1 . "</br>" . $dbConnect->error;
	}
	
	if ($dbConnect->query($stmt2) === TRUE) {
		echo "New Address created successfully</br>";
	} else {
		echo "</br>Error: " . $stmt2 . "</br>" . $dbConnect->error;
	}
	
	if ($dbConnect->query($stmt3) === TRUE) {
		echo "New booking created successfully</br>";
	} else {
		echo "</br>Error: " . $stmt3 . "</br>" . $dbConnect->error;
	}
	
	foreach($_SESSION['selected_rooms'] as $room){
		$room_id = $room[1];
		if($dbConnect->query("INSERT INTO Booking_item VALUES('" . $_SESSION['booking_id'] . "','$room_id')")==TRUE) {
			echo "Booking item entry created successfully</br>";
		}else {
			echo "</br>Error: " . $dbConnect->error;
		}
	}
	
	$query = "SELECT * FROM Booking WHERE Booking_id = '" . $_SESSION['booking_id'];
	$result = mysqli_query($dbConnect,$query);
?>
