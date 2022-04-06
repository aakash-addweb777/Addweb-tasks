<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=base24","root","");
    $search='raj';
    $sql = 'SELECT * FROM govsector where name= :name';
    $query = $pdo -> prepare($sql);
    $query -> bindParam(':name', $search , PDO::PARAM_STR);
    $query -> execute();
    $query ->setFetchMode(PDO::FETCH_ASSOC);
    while($row=$query ->fetch())
    {
            echo $row['employid']." ".$row['name']." ".$row['salary']." ".$row['annualsalary']." ".$row['workingplace']." ".$row['employjob']." ".$row['commision']." ".$row['experience_in_yrs']." ".$row['date_of_joining']." ".$row['country'];
    }
} catch (PDOException $e) {
    die("could not connect to the database :". $e ->getMessage());
}
?>