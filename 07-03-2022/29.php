<?php
$a=10;
$b=20;
$c=30;
$d=40;
$m=($a>$b && $a>$c && $a>$d)?$a:($b>$c && $b>$d)?$b:($c>$d)?$c:$d;
echo "Maximum is " .$m;
?>