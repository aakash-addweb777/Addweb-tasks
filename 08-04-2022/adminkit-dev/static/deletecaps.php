<?php
ob_start();
?>


<?php


$id = $_REQUEST['id'];

$con = mysqli_connect("localhost","root","","base24") or die("error in connection");
$query= mysqli_query($con,"delete from caps where Cid=$id") or die ("error in query");



header('Location:caps.php');
mysqli_close($con);

?>