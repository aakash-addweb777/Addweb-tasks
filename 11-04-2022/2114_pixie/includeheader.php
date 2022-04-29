<head>


</head>

<div id="pre-header">
      <div class="container">
        <div class="row">
          
        </div>
      </div>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    
      <div class="container">
        <a class="navbar-brand" href="#"><img src="assets/images/header-logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="dashboard.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="products.php">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="wishlist.php">Wishlist</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="addcart.php">Your cart</a>
              
            </li>
            <form enctype="multipart/form-data" method="post">
            <input type="text"  name="svalue" placeholder="Search products" title="Type in a name">
            <input type="submit" name="search"  value="Search products" title="Type in a name">
          </ul>
        </div>
      </div>
    </nav>
    <?php
    if(isset($_POST["search"])) {
      $name=$_POST['svalue'];
     $a=mysqli_connect("localhost","root","","base24") or die("Error in connection");
     $query=mysqli_query($a,"select * from images where name=$name");
       
     
    }
    
    ?>