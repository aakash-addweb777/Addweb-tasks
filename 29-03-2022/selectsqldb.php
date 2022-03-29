<?php
// error_reporting(0);
$a=mysqli_connect("localhost", "root", "","base24") or die("Error in connections");
$query=mysqli_query($a,"select * from govsector") or die ("Error in connection");
echo "<table border=2><tr><td>employid</td><td>name</td><td>salary</td><td>employjob</td><td>workingplace</td></tr>";
while($row=mysqli_fetch_array($query)) 
{   
    echo "<tr>";
    echo "<td>".$row["employid"]."</td>";
    echo "<td>".$row["name"]."</td>";
    echo "<td>".$row["salary"]."</td>";
    echo "<td>".$row["employjob"]."</td>";
    echo "<td>".$row["workingplace"]."</td>";
    echo "</tr>";
}
mysqli_close($a);
?>