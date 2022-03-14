<?php
function countchar($str)
{
$vowels=0;
$cons=0;
$digs=0;
$sps=0;

for($i=0;$i<strlen($str);$i++)
{
$ch=$str[$i];
if (($ch >= 'a' && $ch <= 'z')||($ch >='A' && $ch <= 'Z'))
{
$ch = strtolower($ch);
if ($ch == 'a' || $ch == 'e' || $ch == 'i' || $ch == 'o' || $ch == 'u')
$vowels++;
else
$cons++;
}
else if ($ch >= '0' && $ch <= '9')
$digs++;
else
$sps++;
}
echo "vowels= ".$vowels;
echo " <br> consonant= ".$cons;
echo "<br> Digit= ".$digs;
echo "<br> Special character= ".$sps;
}
$str="kjghqfr7c6gnuyr";
countchar($str);
?>