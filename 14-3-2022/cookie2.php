<?php
if(!empty($_POST["remember"])) {
	setcookie ("username",$_POST["username"],time()+ 3600);
	setcookie ("password",$_POST["password"],time()+ 3600);
	echo "Cookies Set Successfully";
} else {
	setcookie("username","");
	setcookie("password","");
	echo "Cookies Not Set";
}


?>
<html>
	<head></head>
	<body>
	
	</body>
</html>
