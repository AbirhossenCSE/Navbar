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
  <style>
    .team-banner {
        background-color: white;
        color: black;
        text-align: center;
        padding: 20px;
      }
      
      .team-members {
        display: flex;
        justify-content: space-between;
      }
      
      .member {
        text-align: center;
      }
      .member:hover {
        quotes: inherit;
      }
      .navbar {
  background-color: black;
}
.navbar-brand,
.navbar-nav li a {
  color: black;
}
.navbar {
  background-color: black;
}

.navbar-brand,
.navbar-nav li a {
  color: white;
}

      </style>
</head>
<body>
<nav class="navbar navbar" style="background:">
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

<div class="container">
	
	<div class="row">
		
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
		<center>	<h2> ABOUT US</h2></center>
		</div>
		<div class="col-sm-4"></div>
    
	</div>
	<br>
	
	<div class="team-banner">
       <center> <h2>Students of East West University</h2></center>
        <p>This website was created by the students of CSE102 section 1 from summer 23 session and our group is called Team UTHAOO,This site is solely created for the project work only.</p>
        <div class="team-members">
          <div class="member">
            <img src="akib.jpg" alt="adri" style="width: 250;height: 250px;">
            <h3>MD.AKIB HOSSAIN</h3>
          </div>
          <div class="member">
            <img src="shustha.jpg" alt="" style="width: 250;height: 250px;">
            <h3>SHUSTHA SAHA</h3>
          </div>
          <div class="member">
            <img src="onoy.jpg" alt="" style="width: 250;height: 250px;">
            <h3>MD. RAKIB RAIHAN ONOY</h3>
          </div>
          <div class="member">
            <img src="siam.jpg" alt="" style="width: 250;height: 250px;">
            <h3>MIRZA SIAM</h3>
          </div>
          
        </div>
      </div>
</body>
</html>