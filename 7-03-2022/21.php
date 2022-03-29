<?php
$num=1991;
$num1=$num;
$i=0;
while($num1>0)
{
    $d=$num1%10;
    $i=$i*10+$d;
    $num1=(int)($num1/10);

}
if($i==$num){
    echo "Given number is a palindrome";
}
else
{
    echo "given number is not a palindrome";
}

?>