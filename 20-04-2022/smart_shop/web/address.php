<?php
ob_start();
?>
<!DOCTYPE html>
<html>

<head>
	<title>Smart Shop a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Contact :: w3layouts</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Smart Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //for-mobile-apps -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- //js -->
	<!-- cart -->
	<script src="js/simpleCart.min.js"></script>
	<!-- cart -->
	<!-- for bootstrap working -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
	<!-- //for bootstrap working -->
	<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
	<script src="js/jquery.easing.min.js"></script>
</head>

<body>
	<!-- header -->
	<?php
	include('header.php');
	?>
	<!-- //banner-top -->


	<!-- banner -->
	<div class="ban-top">
		<div class="container">
			<div class="top_nav_left">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav menu__list">
								<?php
								try {
									$pdo = new PDO("mysql:host=localhost;dbname=base24", "root", "");

									$sql = 'SELECT * FROM categories';

									$q = $pdo->query($sql);
									$q->setFetchMode(PDO::FETCH_ASSOC);
									while ($row = $q->fetch()) {
										$name = $row['name'];
										$img = $row['img_url'];
										$purl = $row['purl'];

								?>
										<li class=" menu__item"><?php echo  "<a  href=$purl class='menu__link'> $name </a>";  ?></li>
								<?php
									}
								} catch (PDOException $e) {
									die("Could not connect to the database $dbname :" . $e->getMessage());
								}
								?>
							</ul>
						</div>
					</div>
				</nav>
			</div>
			<div class="top_nav_right">
				<div class="cart box_1">
					<a href="maincart.php">
						<h3>
							<div class="total">
								<i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i>
								<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)
							</div>

						</h3>
					</a>
					<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>

				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //banner -->
	<!-- contact -->
	<div class="contact">
		<div class="container">
			<div class="contact-grids">
				<div class="col-md-4 contact-grid text-center animated wow slideInLeft" data-wow-delay=".5s">

				</div>
				<div class="col-md-4 contact-grid text-center animated wow slideInUp" data-wow-delay=".5s">

				</div>
				<div class="col-md-4 contact-grid text-center animated wow slideInRight" data-wow-delay=".5s">

				</div>
				<div class="clearfix"> </div>
			</div>
			<!-- <div class="map wow fadeInDown animated" data-wow-delay=".5s">
				<h3 class="tittle">View On Map</h3>
				<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d2482.432383990807!2d0.028213999961443994!3d51.52362882484525!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1423469959819" frameborder="0" style="border:0"></iframe>
			</div> -->
			<h3 class="tittle">Select a delivery address</h3>
			<center>
				<?php
				session_start();
					
				$Email=$_SESSION['email'];

				try {
					$pdo = new PDO("mysql:host=localhost;dbname=base24", "root", "");

					$sql = "select * from student where email='$Email'";

					$q = $pdo->query($sql);
					$q->setFetchMode(PDO::FETCH_ASSOC);
					while ($row = $q->fetch()) {
						$name = $row['name'];
						$address = $row['address'];
						$mobileno = $row['mobile'];
						$Email = $row['email'];
						$country = $row['Country'];
						$state = $row['State'];
						$landmark = $row['Landmark'];
						$pincode = $row['Pincode'];

				?>
						<form method="post">
							<div class="contact-form2">
								<input type="text" value="<?php echo $name ?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
								<input type="number" value="<?php echo $pincode ?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
								<input type="text" value="<?php echo $country ?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
								<input type="text" value="<?php echo $landmark ?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
								<input type="number" value="<?php echo $mobileno ?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
								<input type="text" value="<?php echo $state ?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
								<input type="text" value="<?php echo $address ?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
								<input type="email" value="<?php echo $Email ?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">

								<input type="submit" name="submit" value="Use this address">
							</div>
						</form>
				<?php
					}
				} catch (PDOException $e) {
					die("Could not connect to the database $dbname :" . $e->getMessage());
				}
				?>
				<center>
		</div>
	</div>

	<!-- //contact -->

	<!-- //product-nav -->

	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="col-md-3 footer-left">
				<h2><a href="index.html"><img src="images/logo3.jpg" alt=" " /></a></h2>
				<p>Neque porro quisquam est, qui dolorem ipsum quia dolor
					sit amet, consectetur, adipisci velit, sed quia non
					numquam eius modi tempora incidunt ut labore
					et dolore magnam aliquam quaerat voluptatem.</p>
			</div>
			<div class="col-md-9 footer-right">
				<div class="col-sm-6 newsleft">
					<h3>SIGN UP FOR NEWSLETTER !</h3>
				</div>
				<div class="col-sm-6 newsright">
					<form>
						<input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
						<input type="submit" value="Submit">
					</form>
				</div>
				<div class="clearfix"></div>
				<div class="sign-grds">
					<div class="col-md-4 sign-gd">
						<h4>Information</h4>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="mens.html">Men's Wear</a></li>
							<li><a href="womens.html">Women's Wear</a></li>
							<li><a href="electronics.html">Electronics</a></li>
							<li><a href="codes.html">Short Codes</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</div>

					<div class="col-md-4 sign-gd-two">
						<h4>Store Information</h4>
						<ul>
							<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Address : 1234k Avenue, 4th block, <span>Newyork City.</span></li>
							<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email : <a href="mailto:info@example.com">info@example.com</a></li>
							<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Phone : +1234 567 567</li>
						</ul>
					</div>
					<div class="col-md-4 sign-gd flickr-post">
						<h4>Flickr Posts</h4>
						<ul>
							<li><a href="single.html"><img src="images/b15.jpg" alt=" " class="img-responsive" /></a></li>
							<li><a href="single.html"><img src="images/b16.jpg" alt=" " class="img-responsive" /></a></li>
							<li><a href="single.html"><img src="images/b17.jpg" alt=" " class="img-responsive" /></a></li>
							<li><a href="single.html"><img src="images/b18.jpg" alt=" " class="img-responsive" /></a></li>
							<li><a href="single.html"><img src="images/b15.jpg" alt=" " class="img-responsive" /></a></li>
							<li><a href="single.html"><img src="images/b16.jpg" alt=" " class="img-responsive" /></a></li>
							<li><a href="single.html"><img src="images/b17.jpg" alt=" " class="img-responsive" /></a></li>
							<li><a href="single.html"><img src="images/b18.jpg" alt=" " class="img-responsive" /></a></li>
							<li><a href="single.html"><img src="images/b15.jpg" alt=" " class="img-responsive" /></a></li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>
			<p class="copy-right">&copy 2016 Smart Shop. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
		</div>
	</div>
	<!-- //footer -->
	<!-- login -->
	<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content modal-info">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body modal-spa">
					<div class="login-grids">
						<div class="login">
							<div class="login-bottom">
								<h3>Sign up for free</h3>
								<form method="post">
									<div class="sign-up">
										<h4>Email :</h4>
										<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">
									</div>
									<div class="sign-up">
										<h4>Password :</h4>
										<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">

									</div>
									<div class="sign-up">
										<h4>Re-type Password :</h4>
										<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">

									</div>
									<div class="sign-up">
										<input type="submit" value="REGISTER NOW">
									</div>

								</form>
							</div>
							<div class="login-right">
								<h3>Sign in with your account</h3>
								<form>
									<div class="sign-in">
										<h4>Email :</h4>
										<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">
									</div>
									<div class="sign-in">
										<h4>Password :</h4>
										<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
										<a href="#">Forgot password?</a>
									</div>
									<div class="single-bottom">
										<input type="checkbox" id="brand" value="">
										<label for="brand"><span></span>Remember Me.</label>
									</div>
									<div class="sign-in">
										<input type="submit" value="SIGNIN">
									</div>
								</form>
							</div>
							<div class="clearfix"></div>
						</div>
						<p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //login -->
</body>

</html>
<?php
if (isset($_POST['submit'])) {
	header('Location:pay.php');
}
?>