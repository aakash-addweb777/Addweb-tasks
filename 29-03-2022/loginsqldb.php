<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login db</title>
</head>
<body>
    <form method="POST">
        Username: <input type="text" name="un" />
        Password: <input type="text" name="pw" />
        <input type="submit" name="sub" value="Submit here"/>
    </form>
</body>
</html>
<?php
if(isset($_POST['sub'])) {
    $username=$_POST['un'];
    $password=$_POST['pw'];
    $a=mysqli_connect("localhost","root","","base24") or die("Error in connection");
    $query=mysqli_query($a,"Insert into login value('$username','$password')") or die("Error during query");
    if($query) {
        echo "Data inserted";

    }
    else {
        echo "Data not inserted";
    }
    mysqli_close($a);
}

?>