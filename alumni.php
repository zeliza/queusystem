<html>
<head>
	<title>Queueing System</title>
	 <link rel="stylesheet" type="text/css" href="back.css">
</head>

<body>
	<!--Sample Code-->
	 <div id='container'>
		<div class="header">
				<h2 align="center">Queueing System of Notre Dame of Dadiangas University</h2>
			</div>
	<form name="queue" action="index.php">
	
	<div id='ss'>
	<label class="heading">Please check the box to select transaction.</label> <br> <br>
	<input type="checkbox" name="check_list[]" value="Diploma"><label>Request Diploma</label> <br>
	<input type="checkbox" name="check_list[]" value="TOR"><label>TOR</label> <br>
	<input type="checkbox" name="check_list[]" value="Ribbon"><label>Red Ribbon</label> <br> <br>
	<center> <input type="submit" name="submit" Value="Submit"/> </center>

		<h3> <button onclick="goBack()">Previous</button> </h3>

<script>
function goBack() {
    window.history.back();
}
</script>
	
	
	</form>
	</div> 
	</body>
	</html>