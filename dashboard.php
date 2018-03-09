<?php
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard - Secured Page</title>
<!--link rel="stylesheet" href="style.css" /-->
<link rel="stylesheet" href="css/foundation.css"/>
<link rel="stylesheet" href="css/foundation.min.css"/>
</head>
<body>
	<div class="container">
<div class="form" style="border: 2px solid gray;">
<p>Dashboard</p>
<p>This is another secured page.</p>
<p><a href="Dashboard.php">Home</a></p>
<p><a href="index.php">Issue Queue Ticket</a></p>








<a href="logout.php">Logout</a>


</div>
</div>
</body>
</html>