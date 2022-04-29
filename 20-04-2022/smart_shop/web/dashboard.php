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
<div class="header-bot">
	<div class="container">
		<div class="col-md-3 header-left">
			<h1><a href="dashboardm.php"><img src="images/logo3.jpg"></a></h1>
		</div>
		
		<div class="col-md-6 header-middle">
			<form method="post">
				<div class="search">
					<input type="search" name="search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" required="">
				</div>
				<div class="section_room">
				
					<select id="country" onchange="change_country(this.value)" class="frm-field required">
						<option value="categories">All categories</option>
						<option value="tshirts">Tshirts</option>     
						<option value="shirts">Shirts</option>
						<option value="caps">Caps</option>
						<option value="jeans">Jeans</option>
						<option value="heaadphones">Heaadphones</option>
						<option value="bags">Bags</option>
						<option value="trackpants">Trackpants</option>
						<option value="sunglasses">Sunglasses</option>
					</select>
				</div>
				<div class="sear-sub">
					<input type="submit" name="submit" value=" ">
				</div>
				<div class="clearfix"></div>
			</form>
		</div>
		<div class="col-md-3 header-right footer-bottom">
			<ul>
				<li><a href="login.php" class="use1"  ><span>Login</span></a>
					
				</li>
				<li><a class="fb" href="#"></a></li>
				<li><a class="twi" href="#"></a></li>
				<li><a class="insta" href="#"></a></li>
				<li><a class="you" href="#"></a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
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
								<li class="active menu__item menu__item--current"><a class="menu__link" href="index.html">Home <span class="sr-only">(current)</span></a></li>
								<li class="dropdown menu__item">
									<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">men's wear <span class="caret"></span></a>
									<ul class="dropdown-menu multi-column columns-3">
										<div class="row">
											<div class="col-sm-6 multi-gd-img1 multi-gd-text ">
												<a href="mens.html"><img src="images/woo1.jpg" alt=" " /></a>
											</div>
											<div class="col-sm-3 multi-gd-img">
												<ul class="multi-column-dropdown">
													<li><a href="mens.html">Tshirts</a></li>
													<li><a href="mens.html">Shirts</a></li>
													<li><a href="mens.html">Caps</a></li>
													<li><a href="mens.html">Jeans</a></li>

												</ul>
											</div>
											<div class="col-sm-3 multi-gd-img">
												<ul class="multi-column-dropdown">
													<li><a href="mens.html">Trackpants</a></li>
													<li><a href="mens.html">Bags</a></li>
													<li><a href="mens.html">Headphones</a></li>
													<li><a href="mens.html">Sunglasses</a></li>
												</ul>
											</div>
											<div class="clearfix"></div>
										</div>
									</ul>
								</li>
								<li class="dropdown menu__item">
									<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">women's wear <span class="caret"></span></a>
									<ul class="dropdown-menu multi-column columns-3">
										<div class="row">
											<div class="col-sm-3 multi-gd-img">
												<ul class="multi-column-dropdown">
													<li><a href="womens.html">Clothing</a></li>
													<li><a href="womens.html">Wallets</a></li>
													<li><a href="womens.html">Footwear</a></li>
													<li><a href="womens.html">Watches</a></li>
													<li><a href="womens.html">Accessories</a></li>
													<li><a href="womens.html">Bags</a></li>
													<li><a href="womens.html">Caps & Hats</a></li>
												</ul>
											</div>
											<div class="col-sm-3 multi-gd-img">
												<ul class="multi-column-dropdown">dashboard.php
													<li><a href="womens.html">Jewellery</a></li>
													<li><a href="womens.html">Sunglasses</a></li>
													<li><a href="womens.html">Perfumes</a></li>
													<li><a href="womens.html">Beauty</a></li>
													<li><a href="womens.html">Shirts</a></li>
													<li><a href="womens.html">Sunglasses</a></li>
													<li><a href="womens.html">Swimwear</a></li>
												</ul>
											</div>
											<div class="col-sm-6 multi-gd-img multi-gd-text ">
												<a href="womens.html"><img src="images/woo.jpg" alt=" " /></a>
											</div>
											<div class="clearfix"></div>
										</div>
									</ul>
								</li>
								<li class=" menu__item"><a class="menu__link" href="electronics.html">Electronics</a></li>
								<li class=" menu__item"><a class="menu__link" href="codes.html">Short Codes</a></li>
								<li class=" menu__item"><a class="menu__link" href="contact.html">contact</a></li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
			<div class="top_nav_right">

			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //banner-top -->
	<!-- banner -->
	<div class="banner-grid">
		<div id="visual">
			<div class="slide-visual">
				<!-- Slide Image Area (1000 x 424) -->
				<ul class="slide-group">
					<li><img class="img-responsive" src="images/ba1.jpg" alt="Dummy Image" /></li>
					<li><img class="img-responsive" src="images/ba2.jpg" alt="Dummy Image" /></li>
					<li><img class="img-responsive" src="images/ba3.jpg" alt="Dummy Image" /></li>
				</ul>

				<!-- Slide Description Image Area (316 x 328) -->
				<div class="script-wrap">
					<ul class="script-group">
						<li>
							<div class="inner-script"><img class="img-responsive" src="images/baa1.jpg" alt="Dummy Image" /></div>
						</li>
						<li>
							<div class="inner-script"><img class="img-responsive" src="images/baa2.jpg" alt="Dummy Image" /></div>
						</li>
						<li>
							<div class="inner-script"><img class="img-responsive" src="images/baa3.jpg" alt="Dummy Image" /></div>
						</li>
					</ul>
					<div class="slide-controller">
						<a href="#" class="btn-prev"><img src="images/btn_prev.png" alt="Prev Slide" /></a>
						<a href="#" class="btn-play"><img src="images/btn_play.png" alt="Start Slide" /></a>
						<a href="#" class="btn-pause"><img src="images/btn_pause.png" alt="Pause Slide" /></a>
						<a href="#" class="btn-next"><img src="images/btn_next.png" alt="Next Slide" /></a>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
		<script type="text/javascript" src="js/pignose.layerslider.js"></script>
		<script type="text/javascript">
			//<![CDATA[
			$(window).load(function() {
				$('#visual').pignoseLayerSlider({
					play: '.btn-play',
					pause: '.btn-pause',
					next: '.btn-next',
					prev: '.btn-prev'
				});
			});
			//]]>
		</script>

	</div>
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
				<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
					<ul class="resp-tabs-list">
						<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>All Products</span></li>
					</ul>
					<div class="resp-tabs-container">
						<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
							<?php
							try {
								$pdo = new PDO("mysql:host=localhost;dbname=base24", "root", "");

								$sql = 'SELECT * FROM categories';

								$q = $pdo->query($sql);
								$q->setFetchMode(PDO::FETCH_ASSOC);
								while ($row = $q->fetch()) {
									$name = $row['name'];
									$img = $row['img_url'];

							?>
									<div class="col-md-3 product-men yes-marg">
										<div class="men-pro-item simpleCart_shelfItem">
											<div class="men-thumb-item">
												<img src=<?php echo "adminkit-dev/" . $img ?> alt="" height=300px width=155px class="pro-image-front">
												<img src=<?php echo "adminkit-dev/" . $img ?> alt="" class="pro-image-back">
												<div class="men-cart-pro">
													<div class="inner-men-cart-pro">
														<a href="single.php" class="link-product-add-cart">Quick View</a>
													</div>
												</div>
												<span class="product-new-top">New</span>

											</div>
											<div class="item-info-product ">
												<h4><a href="single.html"><?php echo $name ?></a></h4>
											</div>
										</div>
									</div>
							<?php
								}
							} catch (PDOException $e) {
								die("Could not connect to the database $dbname :" . $e->getMessage());
							}
							?>
							<div class="clearfix"></div>
						</div>


					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<!-- content2 -->
	<div class="container">

		<div id="horizontalTab" style="display: block; width: 100%; margin-bottom: 20px;">
			<?php
			try {
				$pdo = new PDO("mysql:host=localhost;dbname=base24", "root", "");

				$sql = "SELECT * FROM categories";

				$q = $pdo->query($sql);
				$q->setFetchMode(PDO::FETCH_ASSOC);
				while ($row = $q->fetch()) {
					$name = $row['name'];
					$img = $row['img_url'];

			?>
					<ul class="resp-tabs-list">
						<li class="resp-tab-item" aria-controls="tab_item-0" style="margin-top:30px;" role="tab"><span><?php echo $name ?></span></li>
					</ul>

					<div class="resp-tabs-container">
						<?php
						$sql1 = "SELECT * FROM $name limit 0,4";

						$q1 = $pdo->query($sql1);
						$q1->setFetchMode(PDO::FETCH_ASSOC);
						while ($row1 = $q1->fetch()) {
							$name1 = $row1['name'];
							$img1 = $row1['img_url'];

						?>
							<div class="col-md-3 product-men yes-marg">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src=<?php echo "adminkit-dev/" . $img1 ?> alt="" height=300px width=155px class="pro-image-front">
										<img src=<?php echo "adminkit-dev/" . $img1 ?> alt="" height=300px width=155px class="pro-image-back">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php" class="link-product-add-cart">Quick View</a>
											</div>
										</div>
										<span class="product-new-top">New</span>

									</div>
									<div class="item-info-product ">
										<h4><a href="single.php"><?php echo $name1 ?></a></h4>
									</div>
								</div>
							</div>

						<?php
						}
						?>
						<div class="clearfix"></div>
					</div>


			<?php
				}
			} catch (PDOException $e) {
				die("Could not connect to the database $dbname :" . $e->getMessage());
			}
			?>
		</div>
	</div>
	</div>
	<!-- footer -->
	<?php
	include('footer.php');
	?>
	<!-- //footer -->