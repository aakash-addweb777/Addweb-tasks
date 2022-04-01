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
input[type=email], select {
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
#logn {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
#signp {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

</style>
</head>
<!-- <script>  
function matchPassword() {  
  var pw1 = document.getElementById("pw");  
  var pw2 = document.getElementById("cpw");  
  if(pw1 != pw2)  
  {   
    alert("Password did not match");  
    
  } else {  
    alert("Password matched. Welcome!");  
  }  
}  
</script>  -->
<script>
function showpassword() {
  var x = document.getElementById("pw");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
<body>
    <form method="POST" id='form'>
        
    Email: <input type="email" name="un" /><br>
    Password: <input type="password" name="pw" id="pw"/><br>
              <input type="checkbox" onclick="showpassword()">Show Password
              <input type="checkbox" name="remember" value="Remember">Remember Me </input></br>
              <input type="submit" name="login" id="logn" onclick="return Validate()" value="login here" />
              <input type="submit" name="su" id="signp" value="signup here" />
              

              <!-- <script type="text/javascript">
    function Validate() {
        var password = document.getElementById("pw").value;
        var confirmPassword = document.getElementById("cpw").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        } else {
        return true;
        }
      } -->

</script>
    </form>
</body>
</html>
<?php
error_reporting(0);
// $a=mysqli_connect("localhost","root","","base24") or die("Error in connection");
// $a=
// $b=$_POST['cpw'];
// if($a=='pw' && $b=='cpw') {
//   echo "<script>alert('password match')</script>";

// } else {
//   echo "<script>alert('password did not match')</script>";
  
  
// }

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



  