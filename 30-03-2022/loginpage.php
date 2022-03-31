<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>first page</title>
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
    <form method="POST">
        
    Email: <input type="text" name="un" /><br>
    Password: <input type="password" name="pw" /><br>
              <input type="password" name="cpw" />
              <input type="checkbox" name="remember" value="Remember">Remember Me </input></br>
              <input type="submit" name="login" value="login here" />
              <input type="submit" name="su" value="signup here" />
    </form>
</body>
</html>
<?php
error_reporting(0);
// $a=mysqli_connect("localhost","root","","base24") or die("Error in connection");
$a=$_POST['pw'];
$b=$_POST['cpw'];
if($a=='pw' && $b=='cpw') {
  echo "<script>alert('password match')</script>";
} else {
  echo "<script>alert('password did not match')</script>";
  header('Location:loginpage.php');
}

if($_POST["su"]) {
    
    header('Location:signuppage.php');
}
// $f=$_POST['un'];
// $j=$_POST['pw'];
// if($f=='akashchamoli7' && $j=='asdfghjkl') {
//     session_start();
//     $_SESSION['firstname']= $a;
//     $_SESSION['password']=$b;
//     header('Location:sessionlogout.php');
// }
if (isset($_POST['remember'])) {
    setcookie("EMAIL",$_POST['un'],time() +20764);
    setcookie("PASSWORD",$_POST['pw'],time() +20764);
}
if (isset($_POST['login'])) {
    $email = $_POST['un'];
    $password = $_POST['pw'];
    
    
$a=mysqli_connect("localhost","root","","base24") or die("Error in Connection");
$query=mysqli_query($a,"select * from student where email='$email' and password='$password'") or die("Error in query");

$rows=mysqli_num_rows($query);
if($rows>0){
    echo "Login Successful";
    header('Location:dashboard.php');
}
else{
    echo "Incorrect Username or password";
}

mysqli_close($a);
}
?>

</body>
</html>

  