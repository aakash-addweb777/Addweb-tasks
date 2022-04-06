
<?php
include('header_footer.html');
$id=$_REQUEST['id'];

$a = mysqli_connect("localhost","root","","base24") or die ("error in connection");
$query = mysqli_query($a,"select * from bags where Bid=$id") or die("error in query");
while($row=mysqli_fetch_array($query))
{

$id = $row["Bid"];
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

<a href="bags.php">Image</a>
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
$img="images/".$_FILES["file"]["name"];
$a = mysqli_connect("localhost","root","","base24") or die("error in connection");
$abc="update bags set size='$size', Color='$color', Brand='$Brand',Details='$Details',Material='$material',Fabric='$fabric',img_url='$img' where Bid=$id";
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