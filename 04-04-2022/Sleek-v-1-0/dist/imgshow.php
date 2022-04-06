<?php
ob_start();
$a=mysqli_connect("localhost","root","","base24");
$sql = "Select * from images";

$query =mysqli_query($a, $sql);
while($row=mysqli_fetch_array($query))
{
    echo "<tr>";
    echo "<td rowspan=9>"."<img src=".$row["img_url"]." height=300px width=200px ></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>"."ID: ".$row["Tid"]."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Size: <b>".$row["size"]."</b></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>"."Color:".$row["color"]."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>"."brand: ".$row["Brand"]."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>"."details: ".$row["Details"]."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>"."Material: ".$row["Material"]."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>"."Fabric: ".$row["Fabric"]."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>"."img_url: ".$row["img_url"]."</td>";
    echo "</tr>";
    
    }
    echo "</table>";
} 
?>