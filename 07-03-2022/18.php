<?php
$num=1234;
$num1=$num;

$count=0;
while($num1>0)
{
    $d=$num1%10;
    $count= $count+$d;
 
    $num1=(int)($num1/10);
   

}
echo "Sum of all digits is $count <br> ";

?>