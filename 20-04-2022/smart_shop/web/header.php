<!-- header -->
<?php
ob_start();
error_reporting(0);
session_start();
?>
<div class="header">

	<div class="container">
		<form method="POST">
			
				<input style="background-color: #4CAF50; border: none;color: white;  padding: 15px 32px;  text-align: center;  text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 1px;  cursor: pointer;" type="submit" value="Log out" name="logout">

				
			
		</form>
		
			
			
				<?php if ($_SESSION['name'] == "") {
					header('Location:dashboard.php');
				} else {
					echo "Welcome! " . $_SESSION['name'];
				}
				if ($_POST['logout']) {
					session_destroy();
					header('Location:dashboard.php');
				}
				?>
			
			<!-- </li> -->
		
	</div>

</div>
<!-- //header -->
<!-- header-bot -->
<div class="header-bot">
	<div class="container">
		<div class="col-md-3 header-left">
			<h1><a href="dashboardm.php"><img src="images/logo3.jpg"></a></h1>
		</div>

		<div class="col-md-6 header-middle">
			<form method="post">
				<div class="search">
					<input type="search" name="search" value="Search" onkeypress="f1()">
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

				<li>
					<div><a class="twi" href="mainwishlist.php"></div></a>
				</li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //header-bot -->