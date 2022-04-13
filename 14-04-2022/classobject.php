<?php
class operation {
    function sum($x,$y) {
        $c=$x+$y;
        echo $c."<br>";
    }
    function sub($x,$y) {
        $c=$x-$y;
        echo $c."<br>";
    }
    function multiply($x,$y) {
        $c=$x*$y;
        echo $c."<br>";
    }
    function divide($x,$y) {
        $c=$x/$y;
        echo $c."<br>";
    }
}
$obj1= new operation;
$obj1->sum(5,2);
$obj1->sub(5,2);
$obj1->multiply(5,2);
$obj1->divide(5,2);
?>