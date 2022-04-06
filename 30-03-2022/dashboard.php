
<html>
    <head><style> #logt  {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}

/* #logt {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
} */

#logt:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
} 
#addi  {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}

/* #addi {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
} */

#addi:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
} </style>
</head>
    <body>
        <form method="POST">
            <input type="submit" name="logt" id="logt" value="Log out" >
            <input type="submit" name="addition" id="addi" value="add" >
        </form>
    </body>
</html>
 <?php
//  error_reporting(0);
// echo "Hello ".$_COOKIE['un'];
error_reporting(0);
if($_POST['addition']) {
    echo "hi";
    header('Location:signuppage.php');
}
if(($_POST['logt'])) {
    // setcookie("EMAIL",$_POST['un'],time() -20764);
    // setcookie("PASSWORD",$_POST['pw'],time() -20764);    
    header('Location:loginpage.php');
}

$email=$_COOKIE['EMAIL'];
$a=mysqli_connect("localhost","root","","base24") or die("Error in connection");
$query=mysqli_query($a,"select * from student where email='$email'") or die("Error in query");
while($row=mysqli_fetch_array($query)) 
{   
echo "hello ".$row['name']."<br><br><br>";}
$query=mysqli_query($a,"select * from student") or die("Error in query..");
echo "<table border=1><tr><td>employid</td><td>name</td><td>address</td><td>mobilen</td><td>email</td><td>password</td><td>Edit</td><td>Delete</td></tr>";
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



mysqli_close($a);

?> 
