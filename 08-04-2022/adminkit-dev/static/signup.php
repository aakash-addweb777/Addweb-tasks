<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-up.html" />

	<title>Sign Up | AdminKit Demo</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">Get started</h1>
							<p class="lead">
								Sign up your account to get started
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									<form>
										<div class="mb-3">
											<label class="form-label">Name</label>
											<input class="form-control form-control-lg" type="text" name="name" placeholder="Enter your name" />
										</div>
										<div class="mb-3">
											<label class="form-label">Company</label>
											<input class="form-control form-control-lg" type="text" name="company" placeholder="Enter your company name" />
										</div>
										<div class="mb-3">
											<label class="form-label">Email</label>
											<input class="form-control form-control-lg" type="email" name="email" placeholder="Enter your email" />
										</div>
										<div class="mb-3">
											<label class="form-label">Password</label>
											<input class="form-control form-control-lg" type="password" name="password" placeholder="Enter password" />
										</div>
										<div class="mb-3">
											<label class="form-label">Password</label>
											<input class="form-control form-control-lg" type="password" name="password" placeholder="Enter password" />
										</div>
										<div class="mb-3">
											<label class="form-label">Password</label>
											<input class="form-control form-control-lg" type="password" name="password" placeholder="Enter password" />
										</div>
										<small>
            <a href="#" >Already have an account</a>
			
          </small>
										<div class="text-center mt-3">
											
											<input type="submit" class="btn btn-primary" name="signup" value="Sign Up"></input>
											<a href="signin.php" class="btn btn-lg btn-primary">Sign In</a>
											<!-- <button type="submit" class="btn btn-lg btn-primary">Sign up</button> -->
										</div>
									</form>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</main>

	<script src="js/app.js"></script>

</body>

</html>
<?php
error_reporting(0);
if(isset($_POST['signup'])) {
    $employid=$_POST['employid'];
    $name=$_POST['name'];
    $address=$_POST['address'];
    $mobilen=$_POST['mobileno'];
    $email=$_POST['eml'];
    $password=$_POST['pw'];
    $a=mysqli_connect("localhost","root","","base24") or die("Error in connecting to database");
    $query=mysqli_query($a,"Insert into student values($employid,'$name','$address',$mobilen,'$email','$password')") or die("Error in inserting values into database");
    if($query) {
        echo "Data inserted";
        setcookie("EMAIL",$_POST['eml'],time() +86400);
        setcookie("USERNAME",$_POST['un'],time() +86400);
        // setcookie("PASSWORD",$_POST['pw'],time() +86400);
        header('Location:loginpage.php');
    }
    else {
        echo "Data not inserted";
    }
    mysqli_close($a);
}
?>