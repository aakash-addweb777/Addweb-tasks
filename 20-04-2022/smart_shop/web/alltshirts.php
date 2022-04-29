<?php
ob_Start();
?>
<!DOCTYPE html>
<html>

<head>
	<title>Smart Shop a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
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
	<!-- pignose css -->
	<link href="css/pignose.layerslider.css" rel="stylesheet" type="text/css" media="all" />


	<!-- //pignose css -->
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
	<?php
	include('header.php');
	?>
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
	<!-- //banner-top -->
	<!-- banner -->

	<!-- //banner -->
	<!-- content -->
	<div class="product-easy">
		<div class="container">

			<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
			<script type="text/javascript">
				$(document).ready(function() {
					$('#horizontalTab').easyResponsiveTabs({
						type: 'default', //Types: default, vertical, accordion           
						width: 'auto', //auto or any width like 600px
						fit: true // 100% fit in a container
					});
				});
			</script>
			<div class="sap_tabs">
				<div id="horizontalTab" style="display: block; width: 100%; margin: 10px;">
					<ul class="resp-tabs-list">
						<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Tshirts</span></li>


					</ul>
					<div class="resp-tabs-container">
						<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
							<?php

							try {
								$a = new PDO("mysql:host=localhost;dbname=base24", "root", "") or die("Error in coonection");
								$query = "select * from tshirts";
								$q = $a->query($query);
								$q->setFetchMode(PDO::FETCH_ASSOC);
								while ($row = $q->fetch()) {
									$img = $row["img_url"];
									$name = $row["name"];
									$id = $row["Tid"];
									$price = $row["Price"];
									$brand = $row["Brand"];
									$color = $row["Color"];
									$details = $row["Details"];
									$size = $row["size"];
									$actualprice=$row["actualprice"];
							?>
									<div class="col-md-3 product-men yes-marg">
										<div class="men-pro-item simpleCart_shelfItem">
											<div class="men-thumb-item">
												<div class="pro-image-front">
													<?php echo "<a href=single.php?id=$id><img src='$img'  height=300px width=200px ></a>" ?> </div>



												<div class="men-cart-pro">
													<div class="inner-men-cart-pro">
														<div class="link-product-add-cart">
															<?php echo "<a href=single.php?id=$id&img=$img&name=$name&price=$price&color=$color&brand=$brand&size=$size>Quick View</a>"; ?>
														</div>
													</div>
												</div>
												<span class="product-new-top">Tshirts</span>

											</div>
											<div class="item-info-product ">
												<?php echo
												"<a href=single.php?id=$id><h4>$brand  </h4></a>" ?>
												<div class="info-product-price">
													<?php echo
													"<a href=single.php?id=$id><h4>$details </h6></a>
				  <a href=single.php?id=$id><h4> $color $name </h5></a>"

													?>



													<span class="item_price">
														<h6>Rs <?php echo "{$row["Price"]}" ?> <del><?php echo $actualprice ?></del></h6>
													</span>

												</div>
												<a href="#" class="item_add single-item hvr-outline-out button2">Add to cart</a>
											</div>
										</div>
									</div>
							<?php
								}
							} catch (PDOException $e) {
								die("Could not connect to the database $dbname :" . $e->getMessage());
							}
							?>

						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
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