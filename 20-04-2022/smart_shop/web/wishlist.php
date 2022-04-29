<?php
ob_start();
?>
<?php
$id=$_REQUEST['id'];
$img=$_REQUEST['img_url'];
$brand=$_REQUEST['Brand'];
$price=$_REQUEST['Price'];
$name=$_REQUEST['pname'];
$size=$_REQUEST['size'];

try {
$conn = new PDO("mysql:host=localhost;dbname=base24", "root", "");

$sql1 = "insert into wishlist(id, img_url, Brand, Price, pname,size) values(:id,:img_url,:Brand,:Price,:pname,:size)";
$query = $conn -> prepare($sql1);
$query -> bindParam(':id', $id, PDO::PARAM_STR);
$query -> bindParam(':img_url', $img, PDO::PARAM_STR);
$query -> bindParam(':Brand', $brand, PDO::PARAM_STR);
$query -> bindParam(':Price', $price, PDO::PARAM_STR);
$query -> bindParam(':pname', $name, PDO::PARAM_STR);
$query -> bindParam(':size', $size, PDO::PARAM_STR);
//echo $query;
$query -> execute();
if($name=='Tshirt'){
header('Location:alltshirts.php');
}
if($name=='Shirts'){
header('Location:allshirts.php');
}
if($name=='Caps'){
header('Location:allcaps.php');
}
if($name=='Trackpants'){
header('Location:alltrackpants.php');
}

if($name=='Bags'){
header('Location:allbags.php');
}
if($name=='Jeans'){
header('Location:alljeans.php');
}
if($name=='Headphones'){
header('Location:allheadphones.php');
}
if($name=='Sunglasses'){
header('Location:sunglasses.php');
}
// $lastInsertId=$conn->lastInsertId();
// if($lastInsertId!="")
// {
// echo "Data Inserted Successfully";
// }
// else
// {
// echo "Error in Inserting";
// }

}
catch (PDOException $e) {
die("Could not connect to the database :".$e->getMessage());
}

?>
