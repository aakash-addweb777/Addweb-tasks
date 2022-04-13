<?php
ob_start();
?>
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
            <?php
            try{
            $a=new PDO("mysql:host=localhost;dbname=base24","root","") or die("Error in coonection");
            $query="select * from images";
            $q = $a->query($query);
            $q->setFetchMode(PDO::FETCH_ASSOC);
            while($row=$q->fetch()) {
              $a=$row['tnames'];
            ?>
              <a  href=<?php echo "$a" ?>>
                <div class="featured-item">
                  <img src=<?php echo "{$row["img_url"]}" ?> height="325px" width="250px" alt="Item 1">
                  <br>
                  <h5><?php echo "{$row["name"]}" ?></h5>
                  <h6 style="color:grey;">View <?php echo "{$row["name"]}" ?></h6>
                </div>
              </a>
              <?php
            }
          }
          catch (PDOException $e) {
            die("Could not connect to the database $dbname :" . $e->getMessage());
        }
           ?>
            </div>
            
          </div>
        </div>
      </div>
    </div>
    
    <!-- Featred Ends Here -->


    <!-- Subscribe Form Starts Here -->
    
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
