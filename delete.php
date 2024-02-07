<?php

include("dbconnect.php");
//////////////////////////////////////////////////
//echo $_GET['id'];
$sql = mysqli_query($conn,"DELETE FROM register WHERE id ='".$_GET['id']."'");

echo '<script type="text/javascript">alert("ID: '.$_GET['id'].' deleted!!!");</script>';
echo '<script type="text/javascript">window.open("admindashboard.php","_self");</script>';