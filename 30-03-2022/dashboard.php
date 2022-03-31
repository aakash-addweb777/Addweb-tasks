<html>
    <head></head>
    <body>
        <form method="POST">
            <input type="submit" name="logt" value="Log out" >
            <input type="submit" name="addition" value="add" >
        </form>
    </body>
</html>
 <?php
//  error_reporting(0);
// echo "Hello ".$_COOKIE['un'];
error_reporting(0);
if($_POST['addition']) {
    echo "hi";
    header('Location:edit.php');
}
$email=$_COOKIE['EMAIL'];
$a=mysqli_connect("localhost","root","","base24") or die("Error in connection");
$query=mysqli_query($a,"select * from student where email='$email'") or die("Error in query");
while($row=mysqli_fetch_array($query)) 
{   
echo "hello ".$row['name']."<br><br><br>";}
$query=mysqli_query($a,"select * from student") or die("Error in query");
echo "<table border=2><tr><td>employid</td><td>name</td><td>address</td><td>mobilen</td><td>email</td><td>password</td><td>Edit</td><td>Delete</td></tr>";
while($row=mysqli_fetch_array($query)) 
{  
    $user=$row["email"]; 
    echo "<tr>";
    echo "<td>".$row["id"]."</td>";
    echo "<td>".$row["name"]."</td>";
    echo "<td>".$row["address"]."</td>";
    echo "<td>".$row["mobile"]."</td>";
    echo "<td>".$row["email"]."</td>";
    echo "<td>".$row["password"]."</td>";
    echo "<td><a href=edit.php?email=$user>Edit</a></td>";
    echo "<td><a href=delete.php?email=$user>Delete</a></td>";
    echo "</tr>";
}
if(($_POST['logt'])) {
    // setcookie("EMAIL",$_POST['un'],time() -20764);
    // setcookie("PASSWORD",$_POST['pw'],time() -20764);    
    header('Location:loginpage.php');
}
else {
    echo "Error ";
}


mysqli_close($a);

?> 
