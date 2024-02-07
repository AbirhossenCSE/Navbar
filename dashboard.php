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

<!--////////////////////////////////////////////////////////////////-->

<div class="container">
	
	<div class="row">
		
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<h2> User Registration Table</h2>
		</div>
		<div class="col-sm-4"></div>
    
	</div>
	<br>
	
	<table class="table table-bordered">
		<thead>
			<tr style="background:#d4d9d4;">
				<th>S/n</th>
				<th>Name</th>
				<th>Username</th>
				
				<th>Date</th>
				<!--<th>Update</th>
				<th>Delete</th>-->
			</tr>
		</thead>
		
		<tbody>
		<?php
		$sql = mysqli_query($conn, "Select * from register");
		$cnt = mysqli_num_rows($sql);
		$i = 1;
		if($cnt == 0){
			echo "<tr><td colspan='12'><center style='color:red;font-size:20px;'>There is no data available.</center></td></tr>";
		}
		else{
			
		while($data = mysqli_fetch_array($sql)){	
		?>
		  <tr>
			<td><?php echo $i++;?></td>
			<td><?php echo $data['name'];?></td>
			<td><?php echo $data['username'];?></td>
			
			<td><?php echo $data['date'];?></td>
			<!--<td><center><a href="update_form.php?id=<?php echo $data['id'];?>"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a></center></td>
			<td><center><a href="delete.php?id=<?php echo $data['id'];?>"><i class="fa fa-trash-o fa-2x" aria-hidden="true"></i></a></center></td>-->
		  </tr>
		<?php }	
		}?>
		</tbody>
	</table>
  
</div>

</body>
</html>
