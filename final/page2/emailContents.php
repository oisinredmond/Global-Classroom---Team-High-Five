<?php
session_start();

include './auth.php';
$email = "";
$fname = "";
$lname = "";
$total = "";
$deposit = "";
$bal = "";
$id = $_SESSION['booking_id'];
if(isset($id) && !empty($id)){
mysqli_query($dbConnect,"UPDATE  `booking` SET  `payment_status` =  'confirmed' WHERE  `booking`.`booking_id` = '".$id."';");
mysqli_query($dbConnect,"UPDATE  `bookings` SET  `Payment_Status` =  'paid' WHERE  `bookings`.`Booking_id` = '".$id."';");
mysqli_query($dbConnect,"UPDATE  `bookings` SET  `Payment_Status` =  'paid' WHERE  `bookings`.`Booking_id` = '".$id."';");
$result = mysqli_query($dbConnect,"SELECT * from booking where booking_id = 3");
if(mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_array($result))
		{
		$email = $row['email'];
		$fname = $row['first_name'];
		$lname = $row['last_name'];
		$total = $row['total_amount'];
		$deposit = $row['deposit'];
		$bal = $row['total_amount']-$row['deposit'];

		}
	}



}
?>


		<body>
		<table class="body-wrap">
		 <tr>;
		 	<td></td>
		 	<td class="container" width="600">;
		 		<div class=\"content\">\n";
		 			<table class=\"main\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\">\n";
		 				<tr>\n";
		 					<td class=\"content-wrap aligncenter\">\n";
								<table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\">\n";
						<tr>\n";
						<td class=\"content-block\">\n";
		 									<h1>Your Deposit Payment Received!</h1>\n";
		 								</td>\n";
		 							</tr>\n";
		 							<tr>\n";
		 								<td class=\"content-block\">\n";
		 									<h2>Thanks for the payment.</h2>\n";
		 								</td>\n";
		 							</tr>\n";
		 							<tr>\n";
		 								<td class=\"content-block\">\n";
		 									<table class=\"invoice\">\n";
		 										<tr>\n";
		 											<td>Dear ".$fname." ".$lname."<br><br><b>Booking ID #".$id."</b><br><br></td>\n";
		 										</tr>\n";
		 										<tr>\n";
		 											<td>\n";
		 												<table class=\"invoice-items\" cellpadding=\"0\" cellspacing=\"0\">\n";
		 													<tr>\n";
		 														<td style=\"width:200px;\">Total</td>\n";
		 														<td  style=\"width:200px;\"> <b>RM".$total."</b></td>\n";
		 													</tr>\n";
		 													<tr>\n";
		 														<td style=\"width:200px;\">Deposit Paid</td>\n";
		 														<td  style=\"width:200px;\"><b>RM".$deposit."</b></td>\n";
		 													</tr>\n";
		 													<tr>\n";
		 														<td style=\"width:200px;\">Balance</td>\n";
		 														<td  style=\"width:200px;\"><b>RM".$bal."</b></td>\n";
		 													</tr>\n";;
		 													\n";
		 												</table>\n";
		 													<br><b><br>Remarks:</b>\n";
		 														<br>\n";
		 														<b>1. Please pay rest of the balance upon check in.</b><br>\n";
		 														<br>\n";
		 														\n";
		 											</td>\n";
		 										</tr>\n";
		 									</table>\n";
		 								</td>\n";
		 							</tr>\n";
		 							<tr>\n";
		 							</tr>\n";
		 							<tr>\n";
		 								<td>\n";
		 									<br><br>Hotel Address, Street Your address, 50450 Kuala Lumpur, Malaysia\n";
		 								</td>\n";
		 							</tr>\n";
		 						</table>\n";
		 					</td>\n";
		 				</tr>\n";
		 			</table>\n";
		 			<div class=\"footer\">\n";
		 				<table width=\"100%\">\n";
		 					<tr>\n";
		 						<td><br>Questions? Email <a href=\"mailto:\">info@hotel.com or Call Us at 0000000</a></td>\n";
		 					</tr>\n";
		 				</table>\n";
		 			</div></div>\n";
		 	</td>\n";
		 	<td></td>\n";
		 </tr>\n";
		</table></body></html>";

			$headers  ="From: khkim3261738@gmail.com";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
