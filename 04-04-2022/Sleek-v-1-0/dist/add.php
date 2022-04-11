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

<a href="tshirt.php">Image</a>
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

$sql = "INSERT INTO tshirts VALUES ($id,'$size','$color','$brand','$details','$material','$fabric','$filepath')";
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
<?php
$id=$_REQUEST['id'];

$a = mysqli_connect("localhost","root","","base24") or die ("error in connection");
$query = mysqli_query($a,"select * from tshirts where Tid=$id") or die("error in query");
while($row=mysqli_fetch_array($query))
{

$id = $row["Tid"];
$size = $row["size"];
$color = $row["Color"];
$brand = $row["Brand"];
$details = $row["Details"];
$material = $row["Material"];
$fabric = $row["Fabric"];
$img = $row["img_url"];
}
mysqli_close($a);

?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form enctype="multipart/form-data" method="post">
Enter Id:
<input type-="text" name="id" value="<?php echo $id ?>"/><br/>
Enter Size:
<input type="text" name="Size" value="<?php echo $size ?>"/><br/>
Enter color:
<input type="text" name="color" value="<?php echo $color ?>"/><br/>
Enter Brand:
<input type="text" name="brand" value="<?php echo $brand ?>"/><br/>
Enter Details:
<input type="details" name="details" value="<?php echo $details ?>"/><br/>
Enter Material:
<input type="text" name="Material" value="<?php echo $material ?>"/><br/>
Enter Fabric:
<input type="text" name="Fabric" value="<?php echo $fabric ?>"/><br/>
Select image :
<input type="file" name="file" value="<?php echo $img ?>"><br/>
<input type="submit" value="Upload" name="Submit1" > <br/>

</form>
</body>
</html>

<?php

if(isset($_POST['Submit1'])){
$id=$_POST['id'];
$size=$_POST['Size'];
$Brand=$_POST['brand'];
$Details=$_POST['details'];
$color=$_POST['color'];
$material=$_POST['Material'];
$fabric=$_POST['Fabric'];

$imgnew=$_FILES["file"]["name"];
$a = mysqli_connect("localhost","root","","base24") or die("error in connection");

if($imgnew=='')
{
    $imgnew=$img;
}
else
{
    $imgnew="images/photos/".$imgnew;
}
$abc="update tshirts set size='$size', Color='$color', Brand='$Brand',Details='$Details',Material='$material',Fabric='$fabric',img_url='$imgnew' where Tid=$id";
echo $abc;
$query = mysqli_query($a,$abc);
if($query)
{
echo "<script>alert('data updated');</script>";
}
else
{
echo "<script>alert('error in updating');</script>";
}
mysqli_close($a);
}
?>