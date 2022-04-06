<?php
error_reporting(0);
$email=$_REQUEST['email'];

    
$con = mysqli_connect("localhost", "root", "", "base24") or die("Error in Connection");
$query = mysqli_query($con, "delete from student where email='$email'") or die("Error in Query");

header('Location:dashboard.php');


mysqli_close($con);
?>