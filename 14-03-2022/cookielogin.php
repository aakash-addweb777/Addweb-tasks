
<!DOCTYPE html>
<html>
<body>

<form method ="POST">
  Name: <input type="text" name="fname">
  password: <input type="password" name="passwd">
  <input type="submit" value="Log in" name="login">
</form>

<?php
if(!empty($_POST["login"])) {
    setcookie("NAME",$_POST['fname'],time() +20764);
    header('Location:cookielogout.php');
}

?>

</body>
</html>