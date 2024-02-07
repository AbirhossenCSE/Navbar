<?php
include("dbconnect.php");
//////////////////////////////////////////////////
$user = $_SESSION['user'];
$name = $_POST["yourname"];
$username = $_POST["username"];
$pass = $_POST["password"];
$date = $user.'-'.date("d-m-Y");
///////////////////////////////////////////////////

$sql = mysqli_query($conn,"Update register SET name='$name' where id ='".$_GET['id']."'");
$sql = mysqli_query($conn,"Update register SET username='$username' where id ='".$_GET['id']."'");
$sql = mysqli_query($conn,"Update register SET password='$pass' where id ='".$_GET['id']."'");
$sql = mysqli_query($conn,"Update register SET date='$date' where id ='".$_GET['id']."'");


echo '<script type="text/javascript">window.open("admindashboard.php","_self");</script>';