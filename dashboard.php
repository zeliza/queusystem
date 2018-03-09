<?php
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard - Secured Page</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="css/foundation.css"/>
<link rel="stylesheet" href="css/foundation.min.css"/>
</head>
<body>
<div class="form" style="border: 2px solid gray; float: left; background-color: lightgreen; box-shadow: 0px 5px 5px 2px gray; margin-left: 20px; margin-top: 30px; padding: 20px;" >
<h1>Dashboard</h1>
<p><a href="login-main.php">Home</a></p>
<p><a href="index.php">Issue Queue Ticket</a></p>
<br><br>
<a href="logout.php">Logout</a>
</div>

<div class="form" style="border: 2px solid gray; float: left; box-shadow: 0px 5px 5px 2px gray; margin-left: 20px; margin-top: 30px; padding: 20px; width: 70%;" >
	<h3>Call</h3>
<table>
  <thead>
    <tr>
      <th width="200">ID</th>
      <th>Queue Number</th>
      <th width="150">Type of Request	</th>
      <th width="150">Counter</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>1001</td>
      <td>Transcript of Record</td>
      <td>Windows 2</td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>


</div>





</body>
</html>