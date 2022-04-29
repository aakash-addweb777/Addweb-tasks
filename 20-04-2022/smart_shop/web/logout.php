<?php
if($_SESSION['firstname']== '') {
    header('Location:session.php');
}
session_destroy();
header('Location:dashboard.php');
?>