<?php
ob_start();
?>
<!DOCTYPE html>
<html>
<head>

</head>
<!-- <body>
<form method="post">
ID: <input type="number" name="id" /><br/>

<input type="submit" name="del" value ="Delete data"/>

</form>
</body> -->
</html>

<?php


$id = $_REQUEST['id'];

$con = mysqli_connect("localhost","root","","base24") or die("error in connection");
$query= mysqli_query($con,"delete from caps where Cid=$id") or die ("error in query");



header('Location:caps.php');
mysqli_close($con);

?>