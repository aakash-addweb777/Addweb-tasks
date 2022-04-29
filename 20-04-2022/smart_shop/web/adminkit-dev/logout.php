<?php
ob_start();


setcookie("Email",$_POST['email'],time() -20764);
setcookie("Firstname",$_POST['firstname'],time() -20764);
header('Location:signin.php');

?>