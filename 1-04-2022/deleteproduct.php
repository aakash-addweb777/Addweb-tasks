<?php
error_reporting(0);
$id=$_REQUEST['id'];

    
$con = mysqli_connect("localhost", "root", "", "base24") or die("Error in Connection");
$query = mysqli_query($con, "Delete from ntable where id='$id'") or die("Error in Query");

header('Location:dashboard.php');


mysqli_close($con);
?>