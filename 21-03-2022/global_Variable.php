<?php 

$x= 5;
function newf(){
    global $x;
    echo " Global variable value inside function : ".$x++."<br>";
}
newf();

echo " Global variable value outside function : $x";
?>