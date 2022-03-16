<html>
    <head></head>
    <body> <form method="POST">
        <input type="submit" value="logout" name="logout">
    </form>
    <?php
    error_reporting(0);
    session_start();
    if($_SESSION['firstname']== '') {
        header('Location:session.php');
    }
    else {
        echo "Welcome!Username <br></br>" .$_SESSION['firstname'];

    }
    if($_POST['logout']) {
        session_destroy();
        header('Location:session.php');
        
    }
    ?>