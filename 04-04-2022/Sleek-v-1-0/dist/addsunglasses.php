<html>
<head>
<title>PHP File Upload example</title>
</head>
<body>

<form enctype="multipart/form-data" method="post">
Enter Id:
<input type-="number" name="id"/><br/><br/>
Enter size:
<input type="text" name="size"/><br/><br/>
Enter color:
<input type="text" name="color"/><br/><br/>
Enter brand:
<input type="text" name="brand"/><br/><br/>
Enter details:
<input type="text" name="details"/><br/><br/>
Enter material:
<input type="text" name="material"/><br/><br/>
Enter fabric:
<input type="text" name="fabric"/><br/><br/>
Select image :
<input type="file" name="file"><br/><br/>
<input type="submit" value="Upload" name="Submit"> <br/><br/>

<a href="sunglasses.php">Image</a>
</form>
<?php
error_reporting(0);
$a=mysqli_connect("localhost","root","","base24");
if(isset($_POST['Submit']))
{
$id=$_POST['id'];
$size=$_POST['size'];
$color=$_POST['color'];
$brand=$_POST['brand'];
$details=$_POST['details'];
$material=$_POST['material'];
$fabric=$_POST['fabric'];
$filepath = "images/" . $_FILES["file"]["name"];

$sql = "INSERT INTO sunglasses VALUES ($id,'$size','$color','$brand','$details','$material','$fabric','$filepath')";
move_uploaded_file($_FILES["file"]["tmp_name"], $filepath);
$query =mysqli_query($a, $sql);
if($query)
{
echo "Data Inserted";
}
else
{
echo "Error !!";
}
}
?>

</body>
</html>