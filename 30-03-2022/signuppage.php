<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserting Data</title>
    <style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=number], select {
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
    <form method="POST">
        Welcome to signup page <br></br>
        ID: <input type="number" name="employid" /><br>
        Name:     <input type="text" name="name" /></br>
        Address:     <input type="text" name="address" /><br>
        Mobile no.:     <input type="number" name="mobileno" /><br>
        Email:     <input type="text" name="eml" /></br>
        Password:     <input type="text" name="pw" /><br>
        <!-- commision:     <input type="text" name="comm" /></br>
        experience_in_yrs:     <input type="text" name="exinyrs" /><br>
        date_of_joining:     <input type="text" name="dtofj" /></br>
        country:     <input type="text" name="country" /><br> -->
        <input type="submit" name="login" value="Login here"></br>
        
    </form>
</body>
</html>
<?php
error_reporting(0);
if(isset($_POST['login'])) {
    $employid=$_POST['employid'];
    $name=$_POST['name'];
    $address=$_POST['address'];
    $mobilen=$_POST['mobileno'];
    $email=$_POST['eml'];
    $password=$_POST['pw'];
    $a=mysqli_connect("localhost","root","","base24") or die("Error in connecting to database");
    $query=mysqli_query($a,"Insert into student values($employid,'$name','$address',$mobilen,'$email','$password')") or die("Error in inserting values into database");
    if($query) {
        echo "Data inserted";
        setcookie("EMAIL",$_POST['eml'],time() +86400);
        setcookie("USERNAME",$_POST['un'],time() +86400);
        // setcookie("PASSWORD",$_POST['pw'],time() +86400);
        header('Location:loginpage.php');
    }
    else {
        echo "Data not inserted";
    }
    mysqli_close($a);
}
?>
 