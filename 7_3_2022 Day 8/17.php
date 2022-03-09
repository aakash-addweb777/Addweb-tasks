<?php
$num=1234;
$num1=$num;
$k=0;
while($num1>0) {
    $f=$num1%10;
    $k=$k*10+$f;
    $num1=(int)($num1/10);
   
}
echo "The Reverse of the number is " .$k;
?>