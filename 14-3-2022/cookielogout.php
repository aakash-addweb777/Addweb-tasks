<html>
    <head></head>
    <body> <form method="POST">
        <input type="submit" value="logout" name="logout">
    </form>
<?php
error_reporting(0);
if($_COOKIE['NAME']=='') {
    header('Location:cookielogin.php');
}
else
{
    echo "The value is- " .$_COOKIE["NAME"];  
    
}

if($_POST['logout']) {

       header('Location:cookielogin.php');
       setcookie("NAME",$_POST['fname'],time()-20764);
   }


?>
</body>
</html>