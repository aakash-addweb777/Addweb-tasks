<head>
<style>
    input[type=number], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=password], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
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
</style>
</head>
<body>
    <form method="POST">
        Welcome to Delete page <br></br>
        ID: <input type="number" name="employid" /><br>
        Name:     <input type="text" name="name" /></br>
        Address:     <input type="text" name="address" /><br>
        Mobile no.:     <input type="number" name="mobileno" /><br>
        Email:     <input type="text" name="eml" /></br>
        Password:     <input type="password" name="pw" /><br>
        <!-- commision:     <input type="text" name="comm" /></br>
        experience_in_yrs:     <input type="text" name="exinyrs" /><br>
        date_of_joining:     <input type="text" name="dtofj" /></br>
        country:     <input type="text" name="country" /><br> -->
        <input type="submit" name="del" value="Delete"></br>
        
    </form>
</body>
</html>
<?
if(isset($_POST['del'])) {
    
    

$a=mysqli_connect("localhost","root","","base24") or die("Error in connection");
$query=mysqli_query($a,"update into student where email=$email") or die("Error in updating Data");
if($query) {
    echo "Data Inserted";
}
else {
    echo "Data not inserted";
}
}

?>