<?php
$p=10000;
$r=10;
$t=5;
$si=($p*$r*$t)/(100*$t*12);
$n=1;
$ci=$p*(1+$r/100)- $p;
echo "The Si is " .$si;
echo "<br>";
echo "The Ci is " .$ci;

?>
