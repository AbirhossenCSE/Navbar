<?php

include("dbconnect.php");
//////////////////////////////////////////////////
$username = $_POST["uname"];
$pass = $_POST["pwd"];


$sql = mysqli_query($conn,"SELECT * FROM register where username = '$username' AND password='$pass'");
$cnt = mysqli_num_rows($sql);
$data = mysqli_fetch_array($sql);

if($cnt == 1){
	$un = $data['username'];
	$pwd = $data['password'];
	
	if($username == $un AND $pass == $pwd){
		$_SESSION['user'] = $username;
		echo '<script type="text/javascript">window.open("home.php","_self");</script>';
	}
}
else{
	echo '<script type="text/javascript">alert("wrong username or password!!!");</script>';
	echo '<script type="text/javascript">window.open("index.php","_self");</script>';
}
