<?php
$a=mysqli_connect("localhost","root","","base24") or die("Error in connection");
$query=mysqli_query($a,"update govsector set name='bhuvan bam' where employid=1006") or die("Error in query");
if($query) {
    echo "Data inserted";
}
else {
    echo "Not data inserted";
}
?>