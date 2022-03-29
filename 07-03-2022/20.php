<?php
$a=1;
$b=2;
$c=3;
echo "a= ".$a." b=".$b." c=".$c."<br>";

if($a>=$b and $a>=$c){
    if ($b>=$c)
    {
        echo "2nd largest number is b";
    }
    else 
    {
        echo "2nd largest number is c";
    }
}
elseif($b>$c and $b>=$a)
{
    if($a>=c)
    {
        echo "2nd largest number is a";
    }
    else
    {
        echo "2nd largest number is c";
    }
}
elseif($a>=$b)
{
    echo "2nd largest number is a";

}
else{
    echo "2nd largest number is b";
}
?>
