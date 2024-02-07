<?php
include("dbconnect.php");
//echo $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<nav class="navbar navbar" style="background:#d4d9d4;">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="home.php">UTHAOO</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.php">HOME</a></li>
	  <li class="active"><a href="dashboard.php">DASHBOARD</a></li>
      <li><a href="about.php">ABOUT US</a></li>
	  <li><a href="driver.php">DRIVER REG</a></li>
	  <li><a href="contact.php">CONTACT US</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="register.php" target="_blank"><span class="glyphicon glyphicon-log-out"></span>Register</a></li> 
	  <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>
</body>
</html>