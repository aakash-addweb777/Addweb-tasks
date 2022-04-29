<?php
ob_Start();
?>
<!DOCTYPE html>
<html>

<head>
	<title>Smart Shop a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Single :: w3layouts</title>
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
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- //js -->
	<!-- single -->
	<script src="js/imagezoom.js"></script>
	<script src="js/jquery.flexslider.js"></script>
	<!-- single -->
	<!-- cart -->
	<script src="js/simpleCart.min.js"></script>
	<!-- cart -->
	<!-- for bootstrap working -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
	<!-- //for bootstrap working -->
	<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
	<script src="js/jquery.easing.min.js"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<!-- header -->
	
	<!-- //header -->
	<!-- header-bot -->
	<?php
	include('header.php');
	?>
	<!-- //header-bot -->
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
					<p><a href="deleteall.php" class="simpleCart_empty">Empty Cart</a></p>

				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //banner-top -->
	<!-- banner -->

	<!-- //banner -->
	<!-- single -->
	<div class="single">
		<div class="container">

			<div class="col-md-6 single-right-left animated wow slideInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInUp;">
				<div class="grid images_3_of_2">
					<div class="flexslider">
						<!-- FlexSlider -->
						<script>
							// Can also be used with $(document).ready()
							$(window).load(function() {
								$('.flexslider').flexslider({
									animation: "slide",
									controlNav: "thumbnails"
								});
							});
						</script>
						<!-- //FlexSlider-->
						<?php
						$id = $_REQUEST['id'];
						try {
							$a = new PDO("mysql:host=localhost;dbname=base24", "root", "") or die("Error in connection");
							$query = "select * from tshirts where Tid=:Tid";
							$q = $a->prepare($query);
							$q->bindParam(':Tid', $id, PDO::PARAM_STR);

							$q->setFetchMode(PDO::FETCH_ASSOC);
							$q->execute();
							while ($row = $q->fetch()) {
								$img = $row["img_url"];
								$name = $row["name"];
								$id = $row["Tid"];
								$color = $row["Color"];
								$price = $row["Price"];
								$brand = $row["Brand"];
								$size = $row["size"];
								$material = $row["Material"];
								$details = $row["Details"];
								$actualprice=$row["actualprice"];
						?>

								<ul class="slides">
									<?php echo "<img src='$img'  height=200px width=100px >"

									?>

								</ul>



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

			<div class="col-md-6 single-right-left simpleCart_shelfItem animated wow slideInRight animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInRight;">

				<h3 style="color:blue;"><?php echo "$brand" . " " . "$color" . " " . "$name" ?></h3>



				<p><span class="item_price">Rs <?php echo $price ?></span><del><?php echo $actualprice ?></del> </p>
				<div class="rating1" style="color:blue">

					Bank OfferGet additional ₹1250 off on select HDFC Bank Credit Card transactionT&C.<br>

					Bank OfferGet additional ₹2000 off on HDFC Credit/Debit Card EMI transactionT&C.<br>

					Bank Offer5% Cashback on Flipkart Axis Bank CardT&C.<br>

					FreebieFree six (6) months Gaana Plus Subscription on Gaana appT&C.<br>

					Partner OfferBuy this product and get upto ₹500 off on Flipkart FurnitureKnow More
					No cost EMI ₹2,750/month. Standard EMI also availableView Plans.<br>

					Special PriceGet extra ₹500 off (price inclusive of discount)T&C
					Bank OfferGet additional 10% discount upto ₹1500 on SBI Credit and EMI transactionsT&C.<br>

					Partner OfferSign up for Flipkart Pay Later and get Flipkart Gift Card worth ₹100*<br>

				</div>
				<div class="description">
					<h5>Check delivery, payment options and charges at your location</h5>

				</div>
				<div class="color-quality">
					<div class="color-quality-right">

						<h5><i>Size : <?php echo "<b>" . "$size" . "</b>" ?></i></h5>

					</div>
				</div>

				<div class="occasional">
					<h4><i>Color : <?php echo "<b>" . "$color" . "</b>" ?></i></h4>

					<div class="clearfix"> </div>
				</div>

				<div class="occasion-cart">
					<?php echo "<a href=cart.php?id=$id&img_url=$img&pname=$name&Price=$price&Brand=$brand&size=$size type=submit class='item_add hvr-outline-out button2' style=color:white;> Add to Cart </a>"; ?>


				</div>
				<div> <br></br>
					<?php echo "<a href=wishlist.php?id=$id&img_url=$img&pname=$name&Price=$price&Brand=$brand&size=$size>"; ?><i class="fa fa-heart-o" style="font-size:26px"></i></a>
				</div>
			</div>
			<div class="clearfix"> </div>

			<div class="bootstrap-tab animated wow slideInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInUp;">
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<ul id="myTab" class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Description</a></li>
						<li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Reviews(1)</a></li>
						<li role="presentation" class="dropdown">
							<a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents">Information <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
								<li><a href="#dropdown1" tabindex="-1" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">cleanse</a></li>
								<li><a href="#dropdown2" tabindex="-1" role="tab" id="dropdown2-tab" data-toggle="tab" aria-controls="dropdown2">fanny</a></li>
							</ul>
						</li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active bootstrap-tab-text" id="home" aria-labelledby="home-tab">
							<h5>Product Brief Description</h5>
							<p>
							<h4><?php echo $details ?></h4>
							<span></span>
							</p>
						</div>
						<div role="tabpanel" class="tab-pane fade bootstrap-tab-text" id="profile" aria-labelledby="profile-tab">
							<div class="bootstrap-tab-text-grids">
								<div class="bootstrap-tab-text-grid">
									<div class="bootstrap-tab-text-grid-left">
										<img src="images/men3.jpg" alt=" " class="img-responsive">
									</div>
									<div class="bootstrap-tab-text-grid-right">
										<ul>
											<li><a href="#">Admin</a></li>
											<li><a href="#"><span class="glyphicon glyphicon-share" aria-hidden="true"></span>Reply</a></li>
										</ul>
										<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
											suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem
											vel eum iure reprehenderit.</p>
									</div>
									<div class="clearfix"> </div>
								</div>

								<div class="add-review">
									<h4>add a review</h4>
									<form>
										<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
										<input type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">

										<textarea type="text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
										<input type="submit" value="SEND">
									</form>
								</div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade bootstrap-tab-text" id="dropdown1" aria-labelledby="dropdown1-tab">
							<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
						</div>
						<div role="tabpanel" class="tab-pane fade bootstrap-tab-text" id="dropdown2" aria-labelledby="dropdown2-tab">
							<p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //single -->
	<!-- //product-nav -->

	<!-- footer -->
	
	<!-- //footer -->
	<!-- login --><?php
	include('footer.php');
	?>
	<!-- //login -->
</body>

</html>