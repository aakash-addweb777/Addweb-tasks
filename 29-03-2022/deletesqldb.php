<?php
$a=mysqli_connect("localhost","root","","base24") or die("Error in connection");
$query=mysqli_query($a,"delete from govsector where country='brazil'") or die("Error in query");
if($query) {
    echo "Data inserted";
}
else {
    echo "Data not inserted";
}
?>