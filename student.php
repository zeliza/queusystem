<html>
<head>
	<title>Queueing System</title>
	 <link rel="stylesheet" type="text/css" href="back.css">
</head>

<body>
	 <div id='container'>
		<div class="header">
				<h3 align="center">Notre Dame of Dadiangas University
				<p style="color:white; font-size:40pt; text-align:center;">Queuing System</p></h3>
			</div>
	<form name="queue" action="student.php" method="post">
	
	<div id='ss'>
	<label class="heading">Please check the box to select transaction.</label> <br> <br>
	
	<input type="checkbox" name="check_list[]" value="Student-Schedule"><label>Student Schedule</label> <br>
	<input type="checkbox" name="check_list[]" value="TOR"><label>TOR</label> <br>
	<input type="checkbox" name="check_list[]" value="Clearance"><label>Student Clearance</label> <br>
	<input type="checkbox" name="check_list[]" value="Grades"><label>Grades Update</label> <br> <br>
	
	
	<center> <input type="submit" name="submit" Value="Submit"/> </center>
<?php include 'claim.php';?>

		
		<h3> <button onclick="goBack()">Previous</button> </h3>

<script>
function goBack() {
    window.history.back();
	window.history.back();
}
</script>
	</form>
	</div> 
	</body>
	</html>