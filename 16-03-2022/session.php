<!DOCTYPE html>
<html>
<body>


<?php
error_reporting(0);
$a=$_POST['fname'];
$b=$_POST['passwd'];
if($a=='akashchamoli7' && $b=='asdfghjkl') {
    session_start();
    $_SESSION['firstname']= $a;
    $_SESSION['password']=$b;
    header('Location:sessionlogout.php');
}
// else if(empty($_POST['fname']=='') || empty($_POST['passwd']=='')){
//     echo "Enter ID and password";
// }

// else if($a!== 'akashchamoli7' ) {
//     echo "Wrong ID ";
// }
// else if($b!== 'asdfghjkl') {
//     echo "wrong password";
// }

?>
<form method ="POST">
  Name: <input type="text" name="fname">
  Password: <input type="password" name="passwd">
  <input type="submit" value="Log in" name="login">
</form>
</body>
</html>