<?php
include "dbconnect.php";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * from admin where username='".$username."' AND password='".$password."'";
    $result = mysqli_Query($conn, $sql);
    $row = mysqli_fetch_array($result);

    if($row)
    {
        echo '<script type="text/javascript">window.open("admindashboard.php","_self");</script>';
    }
    else
    {
        echo "LOGIN FAILED";
        ?>
        <meta http-equiv="refresh" content="3; url=http://localhost/lab3/adminlogin.php" />
        <?php
    }
}
?>
