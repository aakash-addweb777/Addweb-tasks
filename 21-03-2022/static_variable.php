<?php 


function newf(){
    static $x;
    echo $x."<br>";
    $x++;
}
newf();
newf();
newf();

?>