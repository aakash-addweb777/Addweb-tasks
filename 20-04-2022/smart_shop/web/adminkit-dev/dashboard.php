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

	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title>AdminKit Demo - Bootstrap 5 Admin Template</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<?php
        include('includesidebar.php');
      ?>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
      <?php
        include('includeheader.php');
        
      ?>	
			</nav>

			<main class="content">
				<div class="container-fluid p-0">

					<!--  -->
								<div class="card-header">
                <div class="row">
						<div class="col-10 col-md-2">
							<div class="card">
								<img class="card-img-top" src="images/tss3.jpeg" alt="Unsplash">
								<div class="card-header">
									<h5 class="card-title mb-0">T-shirts</h5>
								</div>
								<div class="card-body">
									<p class="card-text">View t-shirts you have added</p>
									<a href="tshirts.php" class="card-link">T-shirts</a>
									
								</div>
							</div>
						</div>
            <!-- <div class="card-header">
                <div class="row"> -->
						<div class="col-10 col-md-2">
							<div class="card">
								<img class="card-img-top" src="images/shirtss4.jpeg" alt="Unsplash">
								<div class="card-header">
									<h5 class="card-title mb-0">Shirts</h5>
								</div>
								<div class="card-body">
									<p class="card-text">View Shirts you have added</p>
									<a href="shirts.php" class="card-link">Shirts</a>
									
								</div>
							</div>
						</div>
            <!-- <div class="card-header">
                <div class="row"> -->
						<div class="col-10 col-md-2">
							<div class="card">
								<img class="card-img-top" src="images/caps.jpeg" alt="Unsplash">
								<div class="card-header">
									<h5 class="card-title mb-0">caps</h5>
								</div>
								<div class="card-body">
									<p class="card-text">View caps you have added</p>
									<a href="caps.php" class="card-link">caps</a>
									
								</div>
							</div>
						</div>
            <!-- <div class="card-header">
                <div class="row"> -->
						<div class="col-12 col-md-2">
							<div class="card">
								<img class="card-img-top" src="images/track1.jpeg" alt="Unsplash">
								<div class="card-header">
									<h5 class="card-title mb-0">Trackpants</h5>
								</div>
								<div class="card-body">
									<p class="card-text">View Trackpants you have added</p>
									<a href="trackpants.php" class="card-link">Trackpants</a>
									
								</div>
							 </div>
						</div>
            <!-- <div class="card-header">
                <div class="row"> -->
						<div class="col-12 col-md-2">
							<div class="card">
								<img class="card-img-top" src="images/bags.jpeg" alt="Unsplash">
								<div class="card-header">
									<h5 class="card-title mb-0">Bags</h5>
								</div>
								<div class="card-body">
									<p class="card-text">View Bags you have added</p>
									<a href="bags.php" class="card-link">Bags</a>
									
								</div>
							</div>
						</div>
            <!-- <div class="card-header">
                <div class="row"> -->
						<div class="col-10 col-md-2">
							<div class="card">
								<img class="card-img-top" src="images/jeans.jpeg" alt="Unsplash">
								<div class="card-header">
									<h5 class="card-title mb-0">Jeans</h5>
								</div>
								<div class="card-body">
									<p class="card-text">View Jeans you have added</p>
									<a href="jeans.php" class="card-link">Jeans</a>
									
								</div>
							</div>
						</div>
            <!-- <div class="card-header">
                <div class="row"> -->
						<div class="col-10 col-md-2">
							<div class="card">
								<img class="card-img-top" src="images/hd3.jpg" alt="Unsplash">
								<div class="card-header">
									<h5 class="card-title mb-0">Headphones</h5>
								</div>
								<div class="card-body">
									<p class="card-text">View Headphones you have added</p>
									<a href="headphones.php" class="card-link">Headphones</a>
									
								</div>
							</div>
						</div>
            <!-- <div class="card-header">
                <div class="row"> -->
						<div class="col-10 col-md-2">
							<div class="card">
								<img class="card-img-top" src="images/sunglasses.jpeg" alt="Unsplash">
								<div class="card-header">
									<h5 class="card-title mb-0">Sunglasses</h5>
								</div>
								<div class="card-body">
									<p class="card-text">View Sunglasses you have added</p>
									<a href="sunglasses.php" class="card-link">Sunglasses</a>
									
								</div>
							</div>
						</div>
									<!-- <h5 class="card-title mb-0">Monthly Sales</h5>
								</div>
								<div class="card-body d-flex w-100">
									<div class="align-self-center chart chart-lg">
										<canvas id="chartjs-dashboard-bar"></canvas>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div> -->
			</main>

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0">
								<a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>AdminKit</strong></a> &copy;
							</p>
						</div>
						<div class="col-6 text-end">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Support</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Help Center</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Privacy</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Terms</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>

	<script src="js/app.js"></script>

	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var ctx = document.getElementById("chartjs-dashboard-line").getContext("2d");
			var gradient = ctx.createLinearGradient(0, 0, 0, 225);
			gradient.addColorStop(0, "rgba(215, 227, 244, 1)");
			gradient.addColorStop(1, "rgba(215, 227, 244, 0)");
			// Line chart
			new Chart(document.getElementById("chartjs-dashboard-line"), {
				type: "line",
				data: {
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
					datasets: [{
						label: "Sales ($)",
						fill: true,
						backgroundColor: gradient,
						borderColor: window.theme.primary,
						data: [
							2115,
							1562,
							1584,
							1892,
							1587,
							1923,
							2566,
							2448,
							2805,
							3438,
							2917,
							3327
						]
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					tooltips: {
						intersect: false
					},
					hover: {
						intersect: true
					},
					plugins: {
						filler: {
							propagate: false
						}
					},
					scales: {
						xAxes: [{
							reverse: true,
							gridLines: {
								color: "rgba(0,0,0,0.0)"
							}
						}],
						yAxes: [{
							ticks: {
								stepSize: 1000
							},
							display: true,
							borderDash: [3, 3],
							gridLines: {
								color: "rgba(0,0,0,0.0)"
							}
						}]
					}
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Pie chart
			new Chart(document.getElementById("chartjs-dashboard-pie"), {
				type: "pie",
				data: {
					labels: ["Chrome", "Firefox", "IE"],
					datasets: [{
						data: [4306, 3801, 1689],
						backgroundColor: [
							window.theme.primary,
							window.theme.warning,
							window.theme.danger
						],
						borderWidth: 5
					}]
				},
				options: {
					responsive: !window.MSInputMethodContext,
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					cutoutPercentage: 75
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Bar chart
			new Chart(document.getElementById("chartjs-dashboard-bar"), {
				type: "bar",
				data: {
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
					datasets: [{
						label: "This year",
						backgroundColor: window.theme.primary,
						borderColor: window.theme.primary,
						hoverBackgroundColor: window.theme.primary,
						hoverBorderColor: window.theme.primary,
						data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
						barPercentage: .75,
						categoryPercentage: .5
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					scales: {
						yAxes: [{
							gridLines: {
								display: false
							},
							stacked: false,
							ticks: {
								stepSize: 20
							}
						}],
						xAxes: [{
							stacked: false,
							gridLines: {
								color: "transparent"
							}
						}]
					}
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var markers = [{
					coords: [31.230391, 121.473701],
					name: "Shanghai"
				},
				{
					coords: [28.704060, 77.102493],
					name: "Delhi"
				},
				{
					coords: [6.524379, 3.379206],
					name: "Lagos"
				},
				{
					coords: [35.689487, 139.691711],
					name: "Tokyo"
				},
				{
					coords: [23.129110, 113.264381],
					name: "Guangzhou"
				},
				{
					coords: [40.7127837, -74.0059413],
					name: "New York"
				},
				{
					coords: [34.052235, -118.243683],
					name: "Los Angeles"
				},
				{
					coords: [41.878113, -87.629799],
					name: "Chicago"
				},
				{
					coords: [51.507351, -0.127758],
					name: "London"
				},
				{
					coords: [40.416775, -3.703790],
					name: "Madrid "
				}
			];
			var map = new jsVectorMap({
				map: "world",
				selector: "#world_map",
				zoomButtons: true,
				markers: markers,
				markerStyle: {
					initial: {
						r: 9,
						strokeWidth: 7,
						stokeOpacity: .4,
						fill: window.theme.primary
					},
					hover: {
						fill: window.theme.primary,
						stroke: window.theme.primary
					}
				},
				zoomOnScroll: false
			});
			window.addEventListener("resize", () => {
				map.updateSize();
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var date = new Date(Date.now() - 5 * 24 * 60 * 60 * 1000);
			var defaultDate = date.getUTCFullYear() + "-" + (date.getUTCMonth() + 1) + "-" + date.getUTCDate();
			document.getElementById("datetimepicker-dashboard").flatpickr({
				inline: true,
				prevArrow: "<span title=\"Previous month\">&laquo;</span>",
				nextArrow: "<span title=\"Next month\">&raquo;</span>",
				defaultDate: defaultDate
			});
		});
	</script>

</body>

</html>