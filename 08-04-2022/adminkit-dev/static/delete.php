<?php
ob_start();
?>


<?php


$id = $_REQUEST['id'];
$name=$_REQUEST['tablen'];

$con = mysqli_connect("localhost","root","","base24") or die("error in connection");
$query= mysqli_query($con,"delete from $name where Pid=$id") or die ("error in query");



header("Location:product.php?name=$name");
mysqli_close($con);

?>