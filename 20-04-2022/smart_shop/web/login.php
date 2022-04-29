<?php
ob_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login here</title>
    <style>
input[type=text], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=password], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=email], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 50%;
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
body  {
  background-image: url("data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwoHBgYGBwgIBwYGBgoGBgcHCA8ICQYKFREWFhURExMYHSggGBolGxMTITEhJSkrLi4uFx8zODMsNygtLisBCgoKDQ0NDw0NFSsdHx0rKysrKysrKzcrKysrKysrKysrKysrLSsrKysrKysrKysrKysrKysrKysrKysrKysrK//AABEIAKgBLAMBIgACEQEDEQH/xAAXAAEBAQEAAAAAAAAAAAAAAAAAAgEH/8QAFRABAQAAAAAAAAAAAAAAAAAAABH/xAAYAQEBAQEBAAAAAAAAAAAAAAAAAQIDBP/EABURAQEAAAAAAAAAAAAAAAAAAAAR/9oADAMBAAIRAxEAPwDrwDs9QAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAKACAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAoAIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADKUGjKUGjKUGiaUKoTSqVQmlCqE0oVQmlCqE0oVQmlCqE0oVQmlCqE0oVQmlCqE0oVQmlCqE0oVTGNqFApQqKVFK051VKmlEq6VFKFVW1FKFXWVNKFVSppQq6VFKFXSopRaulSyhV0qKUKulSUKqlTShVUqKUKulRWhVUqaUKqlRShV0qaUKqlTShVUqaUKgTSq5VQmlCqE0oVQmlCqE0oVQmlCqE0oVVKmlCqpU0oVVKmlCqpU0oVVKmlCqpU0oVVKmlCqpU0oVVKmlCqpU0oVVKmlCqpU0oVICsAAAAANBg0Bg0Bg0Bg1gAAAAAAAAAAAAAAAAAAAAAAAkEUMAaMpQaMpQaMrQAAAAAAAAABQAQAAAAAAAAAAAAAAABIkVlQltBoygVowCtGAVowRa0YBWjAK0YBWgBQAKABQAKABQAKDAK0YBWjAK0YUKkY1WAAAAAAKNYBWjAK0YBWjAK2lYBW0rAWtpWAVtKwCtpWAVtKwCtpWAVtGAlaMArRgFawAY0AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAf//Z");
  background-size: auto;
  /* background-repeat: no-repeat; */
  background-position: center;
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
  <center>
    <form method="POST" id='form'>
        
    <h4 style="color:#101ac8;font-family: 'Times New Roman', Times, serif;" >Enter your Email:</h4> <input type="email" name="email" /><br>
    <h4 style="color:#101ac8;font-family: 'Times New Roman', Times, serif;" >Name:</h4> <input type="text" name="name" /><br>
    <h4 style="color:#101ac8;font-family: 'Times New Roman', Times, serif;" >Password:</h4> <input type="password" name="password" id="password"/><br>
              <input type="checkbox" onclick="showpassword()" style="color:#101ac8;">Show Password
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
    </center>
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
    
    header('Location:signup.php');
}
// $f=$_POST['un'];
// $j=$_POST['pw'];
// if($f=='akashchamoli7' && $j=='asdfghjkl') {
//     session_start();
//     $_SESSION['firstname']= $a;
//     $_SESSION['password']=$b;
//     header('Location:sessionlogout.php');
// }

if (isset($_POST['login'])) {
    $Email = $_POST['email'];
    $Password = $_POST['password'];
    $Name = $_POST['name'];
    
    
$con=mysqli_connect("localhost","root","","base24") or die("Error in Connection");
// $q=mysqli_query($con,"select * from student where email='$Email' and password='$Password'") or die("Error in query");
$q="select * from student where email='$Email' and password='$Password'";
echo $q;
$query = mysqli_query($con,$q ) or die("error in query!");
$rows=mysqli_num_rows($query);
if($rows>0){
  session_start();
  $_SESSION['name']=$Name;
  $_SESSION['email']=$Email;
    header('Location:dashboardm.php');
}
else{
    echo "Incorrect Username or password";
}

mysqli_close($con);
}
?>



  