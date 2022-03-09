<?php
$num=371;
$num1=$num;
$m=0;
while($num1>0)
{
 $k=$num1%10;
 $m=$m+$k*$k*$k;
 $num1=(int)($num1/10);

}
if($m==$num){
    echo "Given number is a Armstrong number";
}
else
{
    echo "Given number is not a Armstrong number";
}
?>