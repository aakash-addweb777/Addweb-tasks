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

    <title>Pixie </title>

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
<style>
.detail-box {
  margin: 13px 16px 14px -253px;
    vertical-align: middle;
    border-style: none;
    
}
</style>
  </head>

  <body>
    
    <!-- Pre Header -->
    <?php
    include('includeheader.php');
    ?>
    
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    
    <div class="banner">
    <section class="slider_section ">

            <div class="slider_bg_box">
              
               <img src="./images/slider.jpg" alt="">
               
            </div>
            <div id="customCarousel1" class="carousel slide" data-ride="carousel">
              
               <div class="carousel-inner">
                 
                  <div class="carousel-item active">
                    
                     <div class="container ">
                       
                        <div class="row">
                           <div class="col-md-7 col-lg-6 ">
                             
                              <div class="detail-box">
                                
                                 <h1>
                                   
                                    <img src="./images/banner-bg.jpg">
                                    <br>
                                    
                                 </h1>
                                 <p>
                                    <i>20% off on this new collection </i>
                                 </p>
                                 <div class="btn-box">
                                    <a href="" class="btn1">
                                    Shop Now
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item ">
                     <div class="container ">
                        <div class="row">
                           <div class="col-md-7 col-lg-6 ">
                              <div class="detail-box">
                                 <h1>
                                   <div>
                                      <img src="./images/banner-bg.jpg" alt="Image">
                                   </div>
                                    
                                    
                                 </h1>
                                 <p>
                                    <i>20% off on this new collection </i></p>
                                 <div class="btn-box">
                                    <a href="" class="btn1">
                                    Shop Now
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container ">
                        <div class="row">
                           <div class="col-md-7 col-lg-6 ">
                              <div class="detail-box">
                                 <h1>
                                    <div>
                                       <img src="./images/banner-bg.jpg" alt="Image">
                                    </div>
                                    <br>
                                    
                                 </h1>
                                 <p>
                                   <i>20% off on this new collection </i>
                                 </p>
                                 <div class="btn-box">
                                    <a href="" class="btn1">
                                    Shop Now
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="container">
                  <ol class="carousel-indicators">
                     <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
                     <li data-target="#customCarousel1" data-slide-to="1"></li>
                     <li data-target="#customCarousel1" data-slide-to="2"></li>
                  </ol>
               </div>
            </div>
         </section>
      <div class="container">
        
        <div class="row">
          
          <div class="col-md-12">
            
            
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
