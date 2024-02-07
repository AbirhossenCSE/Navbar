<?php

include("dbconnect.php");
//////////////////////////////////////////////////
$name = $_POST["yourname"];
$username = $_POST["username"];
$pass = $_POST["password"];
$date = date("d-m-Y");

$sql = mysqli_query($conn,"INSERT INTO register VALUES (NULL,'$name','$username','$pass','$date')");

//echo "data insert successfull.";

echo '<script type="text/javascript">window.open("index.php","_self");</script>';