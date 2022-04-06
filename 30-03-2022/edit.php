<?php
error_reporting(0);
$email=$_REQUEST['email'];
$con=mysqli_connect("localhost","root","","base24") or die("Error in Connection");
$query=mysqli_query($con,"select * from student where email='$email' ") or die("Error in query");
while($row=mysqli_fetch_array($query))
{
    $sid=$row["id"];
    $sname=$row["name"];
    $saddress=$row["address"];
    $smobile=$row["mobile"];
    $semail=$row["email"];
    $spassword=$row["password"];
}
mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Insert data</title>
    <style>
      input[type=number], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=password], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>

<body>
    <form method="post">
        Id: <input type="number" name="id" value="<?php echo $sid ?>" /><br />
        Name: <input type="text" name="name" value="<?php echo $sname ?>" /><br />
        Address :<input type="text" name="address" value="<?php echo $saddress ?>" /><br />
        Mobile: <input type="number" name="mobile" value="<?php echo $smobile ?>" /><br />
        Email: <input type="text" name="eml" value="<?php echo $semail ?>" /><br />
        Password: <input type="password" name="pw" value="<?php echo $spassword ?>" /><br />
        <input type="submit" name="Update" value="Update Data" />
    </form>
</body>
</html>

<?php
if (isset($_POST['Update'])) {
    $pid=$_POST['id'];
    $pname = $_POST['name'];
    $paddress = $_POST['address'];
    $pmobile = $_POST['mobile'];
    $pemail = $_POST['eml'];
    $ppassword = $_POST['pw'];
    $con = mysqli_connect("localhost", "root", "", "base24") or die("Error in Connection");
    $query = mysqli_query($con, "update student set id=$pid, name='$pname',address='$paddress', mobile=$pmobile ,email='$pemail' ,password='$ppassword' where email='$pemail'") or die("Error in Query");
    if ($query) {
        echo "<script>alert('Data Updated');</script>";
        header('Location:dashboard.php');
    } else {
        echo "<script>alert('Error in Updating');</script>";
    }

    mysqli_close($con);
}
?>