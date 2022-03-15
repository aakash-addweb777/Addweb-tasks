<?php
error_reporting(0);
$a=$_COOKIE['class'];
$a+=1;
setcookie("class", $a, time()+ 86400);
echo "value is:".$a;


?>