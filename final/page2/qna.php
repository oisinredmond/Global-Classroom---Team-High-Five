<?
include_once("./basic.php");
?>
<html>
	<head>
		<script>
			function count(x)
			{
				var y = x.value;
				console.log(y.length+1);
				var counter = y.length
				var z = document.getElementById("charcount");
				z.innerHTML = (250-counter)+"/250";

			}
		</script>
	</head>
	<body>
		<form method = "POST"; action = "sendMail.php" >
			Please enter your email:<input name = "Email" id = "Email"></input>
			<br/>
			Subject:<select name = "subject"; id="sub">
				<option>Staying in the hotel</option>
				<option>Facilities</option>
				<option>Check in/check out</option>
				<option> complaints </option>
				<option> other </option>

			</select>
			<br/>
			Additional info:<br>
			<textarea name = "data" id = "info" maxlength = 250 onkeyup=count(this) ></textarea><p id = "charcount"> 250/250</p>
			<input type="submit"></type>
		</form>

	</body>
</html>
