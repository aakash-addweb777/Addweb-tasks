<?php
$str = "Hello! welcome here";
$w = 1;
$c = 0;
for($i=0;$i<strlen($str);$i++)
{
    $c++;
    if($str[$i]==' ')
        $w++;

}
echo "Total no. of character= ".$c."<br>";
echo "Total no. of words= ".$w;
?>