<html>
<head>
<title>Dashboard</title>
</head>
<body>

<form enctype="multipart/form-data" method="post">
Enter Id:
<input type-="text" name="id"/><br/>
Select image :
<input type="file" name="file"><br/>
<input type="submit" value="Upload" name="Submit1"> <br/>

<a href="tshirt.php">Image</a>
</form>
<?php
$a=mysqli_connect("localhost","root","","base24");
if(isset($_POST['Submit1']))
{ 
    $id=$_POST['id'];
$filepath = "images/" . $_FILES["file"]["name"];

$sql = "INSERT INTO image (id,img_url) VALUES ($id,'$filepath')";
move_uploaded_file($_FILES["file"]["tmp_name"], $filepath);
$query =mysqli_query($a, $sql);
if($query) 
{
    $a=mysqli_connect("localhost","root","","base24") or die("Error in connection");
$query=mysqli_query($a,"select * from tshirt where id='$id'") or die("Error in query");
echo "Data Inserted";
echo "<table border=1><tr><td>id</td><td>firstname</td><td>lastname</td><td>mobileno</td><td>password</td><td>Add</td><td>Show</td></tr>";
while($row=mysqli_fetch_array($query)) 
{  
    $user=$row["id"]; 
    echo "<tr>";
    echo "<td>".$row["id"]."</td>";
    echo "<td>".$row["firstname"]."</td>";
    echo "<td>".$row["lastname"]."</td>";
    echo "<td>".$row["mobileno"]."</td>";
    echo "<td>".$row["password"]."</td>";
    echo "<td><a href=edit.php?email=$user>Add</a></td>";
    echo "<td><a href=delete.php?email=$user>Show</a></td>";
    echo "</tr>";
}
} 
else 
{
echo "Error !!";
}
} 
?>

</body>
</html>