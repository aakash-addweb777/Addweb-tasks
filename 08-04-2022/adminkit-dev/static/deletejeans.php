<?php
ob_start();
?>


<?php


$id = $_REQUEST['id'];

$con = mysqli_connect("localhost","root","","base24") or die("error in connection");
$query= mysqli_query($con,"delete from jeans where Jid=$id") or die ("error in query");



header('Location:jeans.php');
mysqli_close($con);

?>