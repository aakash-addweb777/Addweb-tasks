<?php
$n= $_GET["number"];
$c=1;
for ($i=1;$i<=$n;$i++)
{
    $c= $c*$i;
    
    
}
echo "factorial is $c";

?>