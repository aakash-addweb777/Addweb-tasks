<?php
ob_start();  

$con = mysqli_connect("localhost", "root", "", "base24") or die("Error in Connection");
$query = mysqli_query($con, "delete from addcart ") or die("Error in Query");
header('Location:maincart.php');
mysqli_close($con);
?>