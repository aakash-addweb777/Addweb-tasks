<?php
ob_start();
?>


<?php
$id = $_REQUEST['id'];
$a = mysqli_connect("localhost","root","","base24") or die("error in connection");
$query= mysqli_query($a,"delete from addcart where id=$id") or die ("error in query");
if($query) {
header('Location:maincart.php');
}
mysqli_close($a);

?>