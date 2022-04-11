<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <title>Pixie - Ecommerce HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/tooplate-main.css">
    <link rel="stylesheet" href="assets/css/owl.css">
<!--
Tooplate 2114 Pixie
https://www.tooplate.com/view/2114-pixie
-->
  </head>

  <body>
    
    <!-- Pre Header -->
    <?php
    include('includeheader.php');
    ?>
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="caption">
              <h2>Ecommerce HTML Template</h2>
              <div class="line-dec"></div>
              <p>Pixie HTML Template can be converted into your desired CMS theme. Total <strong>5 pages</strong> included. You can use this Bootstrap v4.1.3 layout for any CMS. 
              <br><br>Please tell your friends about <a rel="nofollow" href="https://www.facebook.com/tooplate/">Tooplate</a> free template site. Thank you. Photo credit goes to <a rel="nofollow" href="https://www.pexels.com">Pexels website</a>.</p>
              <div class="main-button">
                <a href="#">Order Now!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <!-- Featured Starts Here -->
    <div class="featured-items">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Featured Items</h1>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-carousel owl-theme">
              <a href="alltshirts.php">
                <div class="featured-item">
                  <img src="assets/images/tss5.jpeg" alt="Item 1">
                  <h4>Tshirts</h4>
                  <h6>View T-Shirts</h6>
                </div>
              </a>
              
              <a href="shirts.php">
                <div class="featured-item">
                  <img src="assets/images/shirtss5.jpeg" alt="Item 2">
                  <h4>Shirts</h4>
                  <h6>View Shirts</h6>
                </div>
              </a>
              <a href="caps.php">
                <div class="featured-item">
                  <img src="assets/images/caps.jpeg" alt="Item 3">
                  <h4>Caps</h4>
                  <h6>View Caps</h6>
                </div>
              </a>
              <a href="trackpants.php">
                <div class="featured-item">
                  <img src="assets/images/track1.jpeg" alt="Item 4">
                  <h4>Trackpants</h4>
                  <h6>View Trackpants</h6>
                </div>
              </a>
              <a href="bags.php">
                <div class="featured-item">
                  <img src="assets/images/bags.jpeg" alt="Item 5">
                  <h4>Bags</h4>
                  <h6>View Bags</h6>
                </div>
              </a>
              <a href="jeans.php">
                <div class="featured-item">
                  <img src="assets/images/jeans.jpeg" alt="Item 6">
                  <h4>Jeans</h4>
                  <h6>View Jeans</h6>
                </div>
              </a>
              <a href="headphones.php">
                <div class="featured-item">
                  <img src="assets/images/hd1.jpeg" alt="Item 7">
                  <h4>Headphones</h4>
                  <h6>View Headphones</h6>
                </div>
              </a>
              <a href="sunglasses.php">
                <div class="featured-item">
                  <img src="assets/images/sunglasses.jpeg" alt="Item 8">
                  <h4>Sunglasses</h4>
                  <h6>View Sunglasses</h6>
                </div>
              </a>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Featred Ends Here -->


    <!-- Subscribe Form Starts Here -->
    <div class="subscribe-form">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Subscribe on PIXIE now!</h1>
            </div>
          </div>
          <div class="col-md-8 offset-md-2">
            <div class="main-content">
              <p>Integer vel turpis ultricies, lacinia ligula id, lobortis augue. Vivamus porttitor dui id dictum efficitur. Phasellus vel interdum elit.</p>
              <div class="container">
                <form id="subscribe" action="" method="get">
                  <div class="row">
                    <div class="col-md-7">
                      <fieldset>
                        <input name="email" type="text" class="form-control" id="email" 
                        onfocus="if(this.value == 'Your Email...') { this.value = ''; }" 
                    	onBlur="if(this.value == '') { this.value = 'Your Email...';}"
                    	value="Your Email..." required="">
                      </fieldset>
                    </div>
                    <div class="col-md-5">
                      <fieldset>
                        <button type="submit" id="form-submit" class="button">Subscribe Now!</button>
                      </fieldset>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Subscribe Form Ends Here -->


    
    <!-- Footer Starts Here -->
    <?php
    include('includefooter.php');
    ?>
    <!-- Footer Ends Here -->


    <!-- Sub Footer Starts Here -->
    
    <!-- Sub Footer Ends Here -->


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
