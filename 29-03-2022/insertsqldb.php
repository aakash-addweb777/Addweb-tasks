<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserting Data</title>
</head>
<body>
    <form method="POST">
        employid: <input type="text" name="employid" /><br>
        name:     <input type="text" name="name" /></br>
        salary:     <input type="number" name="sal" /><br>
        annualsalary:     <input type="number" name="annsal" /><br>
        workingplace:     <input type="text" name="workp" /></br>
        employjob:     <input type="text" name="empjob" /><br>
        commision:     <input type="text" name="comm" /></br>
        experience_in_yrs:     <input type="text" name="exinyrs" /><br>
        date_of_joining:     <input type="text" name="dtofj" /></br>
        country:     <input type="text" name="country" /><br>
        <input type="submit" name="Insert_here" value="Insert_here"></br>
        
    </form>
</body>
</html>
<?php
if(isset($_POST['Insert_here'])) {
    $employid=$_POST['employid'];
    $name=$_POST['name'];
    $salary=$_POST['sal'];
    $annualsalary=$_POST['annsal'];
    $workingplace=$_POST['workp'];
    $employjob=$_POST['empjob'];
    $commision=$_POST['comm'];
    $experience_in_yrs=$_POST['exinyrs'];
    $date_of_joining=$_POST['dtofj'];
    $country=$_POST['country'];
    $con=mysqli_connect("localhost","root","","base24") or die ("Error in connection");
    $query=mysqli_query($con, "Insert into govsector values($employid,'$name',$salary,$annualsalary,'$workingplace','$employjob','$commision',$experience_in_yrs,'$date_of_joining','$country')") or die ("Error connection during query");
    if($query) {
        echo "<script>alert('Data inserted')</script>";
    }
    else {
        echo "<script>alert('Data not inserted')</script>";
    }
    mysqli_close($con);
}
?>