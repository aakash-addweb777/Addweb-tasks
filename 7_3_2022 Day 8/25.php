<?php
$a=54;
if($a>=65 && $a<=90) 
{
    echo "The Input is a Small Alphabet";
}
else if($a>=97 && $a<=122) 
{
    echo "The Input is a Large Alphabet";
}
else if($a>=48 && $a<=57)
{
    echo "The input is a digit";
}
else
echo "The input is invalid";
?>