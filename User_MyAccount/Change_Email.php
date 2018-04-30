<html>
	<head>
		<script>
			function Test()
			{
				var x = document.getElementById("E1");
				var y = document.getElementById("E2");
				var z = document.getElementById("error");
				console.log(x.value);
				console.log(y.value);
				
				if(x.value != y.value)
				{
					error.innerHTML = "Emails do not match";
				}
				else
				{
					error.innerHTML = "";
				}
				
			}
		</script>
	</head>
	<body>
		<p id="error">
		</p>
		<form >
			Enter New Email: <input type="text" id = "E1"></input>
			Confirm New Email: <input type="text" id= "E2" onblur="Test()"></input>
			<input type="submit" value="Submit">
		<form>
	</body>
</html>