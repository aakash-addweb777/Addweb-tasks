<?php
ob_start();
?>


<?php


$id = $_REQUEST['id'];

$con = mysqli_connect("localhost","root","","base24") or die("error in connection");
$query= mysqli_query($con,"delete from trackpants where Trid=$id") or die ("error in query");



header('Location:trackpants.php');
mysqli_close($con);

?>