<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserting Data</title>
    <style>
input[type=email], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
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
input[type=number], select {
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
body  {
  background-image: url("https://www.w3schools.com/css/img_tree.gif");
  background-size: auto;
  background-repeat: no-repeat;
  background-position: center;
}
</style>
</head>
<body>
    <form method="POST">
        <h3 style="color:#101ac8;font-family: 'Times New Roman', Times, serif;">Welcome to signup page</h3> <br></br>
        <input type="number" placeholder="Enter ID" name="id" /><br>
            <input type="text" placeholder="Enter Name" name="firstname" /></br>
            <input type="text" placeholder="Enter last name" name="lastname" /><br>
            <input type="number" placeholder="Enter Mobile number" name="mobileno" /><br>
            <input type="email" placeholder="Enter Email id" name="email" /></br>
             <input type="password" name="pw" placeholder="Enter password" id="pw" /><br>
         <input type="password" name="cpw" id="cpw" placeholder="Enter password again" /><br>
        <!-- commision:     <input type="text" name="comm" /></br>
        experience_in_yrs:     <input type="text" name="exinyrs" /><br>
        date_of_joining:     <input type="text" name="dtofj" /></br>
        country:     <input type="text" name="country" /><br> -->
        <input type="submit" name="login"  onclick="return Validate()" value="Login here"></br>
        
    </form>
    <script type="text/javascript">
    function Validate() {
        var password = document.getElementById("pw").value;
        var confirmPassword = document.getElementById("cpw").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }else{
          alert("Password match! Welcome.")
        return true;
        }
    }
</script>
</body>
</html>
<?php
error_reporting(0);
if(isset($_POST['login'])) {
    $id=$_POST['id'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    
    $email=$_POST['email'];
    $mobileno=$_POST['mobileno'];
    $password=$_POST['pw'];
    $a=mysqli_connect("localhost","root","","base24") or die("Error in connecting to database");
    $query=mysqli_query($a,"Insert into ntable values($id,'$firstname','$lastname','$email',$mobileno,'$password')") or die("Error in inserting values into database");
    if($query) {
        
        setcookie("EMAIL",$_POST['email'],time() +86400);
        // setcookie("USERNAME",$_POST['un'],time() +86400);
        // setcookie("PASSWORD",$_POST['pw'],time() +86400);
        header('Location:signin.php');
    }
    else {
        echo "Data not inserted";
    }
    mysqli_close($a);
}
?>
 