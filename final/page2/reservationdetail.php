<div class="row">
<?php

session_start();
 include_once ("./basic.php");
$id= $_SESSION['booking_id'];

$result = mysqli_query($dbConnect,"select * from booking where booking_id = '".$id."';");

//$result = mysqli_query($dbConnect,$sql);

$row = mysqli_fetch_array($result);



	$fname = $row['first_name'];
$lastname = $row['last_name'];
$email = $row['email'];
$phone = $row['telephone_no'];
$addressline1 = $row['add_line1'];
$addressline2 = $row['add_line2'];
$postcode = $row['postcode'];
$city = $row['city'];
$state = $row['state'];
$country= $row['country'];
$requirement = $row['special_requirement'];
$checkindate = date('d-m-y', strtotime($row['checkin_date']));
$checkoutdate = date('d-m-y', strtotime($row['checkout_date']));
$bookingdate = date('d-m-y', strtotime($row['booking_date']));
$deposit = $row['deposit'];
$total = $row['total_amount'];
//$ ["balance"] = $ ["total"] - $ ["deposit"];
////$nightstay = $row['nightstay'];
//$chosenroom = $row['chosenroom'];
$totaladult = $row['total_adult'];
$totalchild = $row['total_children'];
?>
	<div class="large-12 columns blackblur fontcolor" style="font-size : 20px;padding-top:10px;margin-left :80px" id="guestdetails">
		<p><b>Your Reservation Details</b><hr></p>
		<p><b>Guest Details</b></p>
		<form>
		  <div class="row">
			<div class="large-6 columns">
				<p>First Name : <b> <?php echo $fname ?></b></p>
			</div>
			<div class="large-6 columns">
				<p>Last  Name : <b><?php echo $lastname ?></b></p>
			</div>
		  </div>
		  <div class="row">
			<div class="large-6 columns">
			  <p>Email Address : <b><?php echo $email ?></b>
			  </p>
			</div>
			<div class="large-6 columns">
			  <p>Telephone : <b><?php echo $phone ?></b>
			  </p>
			</div>
		  </div>
		  <div class="row">
			<div class="large-6 columns">
				<p><?php print "Address :<br><b>";echo $addressline1 ?><br><?php echo $addressline2 ?><br><?php echo $postcode ?><?php echo $city ?><br><?php echo $state ?><?php echo $country?></b></p>
			</div>
			<div class="large-6 columns">
			  <p>Special Requirements <br><b><?php echo $requirement?></b>
				</p>
			</div>
		  </div>
		<p><hr><b>Room Details</b></p>
		<div class="row">
      <div class="large-6 columns">
				<p>Booking Confirmed Date : <b><?php echo $bookingdate;?></b></p>
			</div>
			<div class="large-6 columns">
				<p>Check In Date : <b><?php echo $checkindate;?></b></p>
			</div>
			<div class="large-6 columns">
			  <p>Check Out Date : <b><?php echo $checkoutdate?></b></p>
			</div>
		</div>
			<div class="row">
				<div class="large-6 columns">
					<p>Total Price : <b><?php echo $total;?> EUR</b></p>
				</div>
				<div class="large-6 columns">
					<p>Deposit : <b><?php echo $deposit?> EUR</b></p>
				</div>
			</div>


		<div class="row">
			<div class="large-6 columns">
			  <p>Adult :<b><?php echo $totaladult;?></b></p>
			</div>
			<div class="large-6 columns">
			  <p>Children :<b><?php echo $totalchild?></b></p>
			</div>
		</div>

		  <div class="row">
			<div class="large-12 columns" >

			</div>
		  </div>
		</form>

			<div class="row">
				<br>
				<div class="large-12 columns" >
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" >
					<input type="hidden" name="cmd" value="_xclick">
					<input type="hidden" name="business" value="khkim3261738@gmail.com">
					<input type="hidden" name="lc" value="EU">
					<input type="hidden" name="item_name" value="15% Hotel Deposit Payment">
					<input type="hidden" name="amount" value="<?php $amount = $global_deposit; print $amount; ?>">
					<input type="hidden" name="currency_code" value="EUR">
					<input type="hidden" name="button_subtype" value="services">
					<input type="hidden" name="no_note" value="0">
					<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
					<input type="image" src="https://img.deusm.com/informationweek/2015/03/1319694/PayPal2.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!" style="width:20%; height:20%; background-color:#00136b; padding:1%;">
					<img alt="" border="0" src="http://pluspng.com/img-png/paypal-paypal-png-800.png" width="1" height="1">
					</form>
				</div>
			</div>

	</div>


</div>

</body></html>
