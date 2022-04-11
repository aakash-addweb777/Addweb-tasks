<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <head>
  

  <title></title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet"/>
  <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />

  <!-- PLUGINS CSS STYLE -->
  <link href="assets/plugins/toaster/toastr.min.css" rel="stylesheet" />
  <link href="assets/plugins/nprogress/nprogress.css" rel="stylesheet" />
  <link href="assets/plugins/flag-icons/css/flag-icon.min.css" rel="stylesheet"/>
  <link href="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
  <link href="assets/plugins/ladda/ladda.min.css" rel="stylesheet" />
  <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
  <link href="assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />

  <!-- SLEEK CSS -->
  <link id="sleek-css" rel="stylesheet" href="assets/css/sleek.css" />

  

  <!-- FAVICON -->
  <link href="assets/img/favicon.png" rel="shortcut icon" />

  <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script type="text/javascript" src="assets/plugins/nprogress/nprogress.js"></script>
</head>

</head>
  <body class="bg-light-gray" id="body">
          <div class="container d-flex flex-column justify-content-between vh-100">
          <div class="row justify-content-center mt-5">
            <div class="col-xl-5 col-lg-6 col-md-10">
              <div class="card">
                <div class="card-header bg-primary">
                  <div class="app-brand">
                    <a href="/index22.html">
                      <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="30"
                        height="33" viewBox="0 0 30 33">
                        <g fill="none" fill-rule="evenodd">
                          <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                          <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                        </g>
                      </svg>
                      <span class="brand-name">Sleek Dashboard</span>
                    </a>
                  </div>
                </div>
                <div class="card-body p-5">
                  <h4 class="text-dark mb-5">Sign Up</h4>
                  <form method="post">
                    <div class="row">
                    <div class="form-group col-md-12 mb-4">
                        <input type="number" class="form-control input-lg" id="id" name="id" aria-describedby="emailHelp" placeholder=" Enter id">
                      </div>
                      <div class="form-group col-md-12 mb-4">
                        <input type="text" class="form-control input-lg" id="ftname" name="firstname" aria-describedby="nameHelp" placeholder="First Name">
                      </div>
                      <div class="form-group col-md-12 mb-4">
                        <input type="text" class="form-control input-lg" id="ltname" name="lastname" aria-describedby="nameHelp" placeholder="Last Name">
                      </div>
                      <div class="form-group col-md-12 mb-4">
                        <input type="number" class="form-control input-lg" id="mobno" name="mobileno" aria-describedby="nameHelp" placeholder="Mobile no.">
                      </div>
                      <div class="form-group col-md-12 ">
                        <input type="password" class="form-control input-lg" id="password" name="password" placeholder="Password">
                      </div>
                      <div class="form-group col-md-12 ">
                        <input type="password" class="form-control input-lg" id="cpassword" name="cpassword" placeholder="Confirm Password">
                      </div>
                      <div class="col-md-12">
                        <div class="d-inline-block mr-3">
                          <label class="control control-checkbox">
                            <input type="checkbox" name="chcbo" />
                            <div class="control-indicator"></div>
                            I Agree the terms and conditions
                          </label>
                        </div>
                        <input type="submit" class="btn btn-lg btn-primary btn-block mb-4" id="signu" name="signu" value="sign up">
                        <p>Already have an account?
                          <a class="text-blue" href="signin.php">Sign in</a>
                        </p>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="copyright pl-0">
            <p class="text-center">&copy; 2018 Copyright Sleek Dashboard Bootstrap Template by
              <a class="text-primary" href="http://www.iamabdus.com/" target="_blank">Abdus</a>.
            </p>
          </div>
        </div>
</body>
</html>
<?php

// error_reporting(0);
if(isset($_POST['signu'])){
    $id=$_POST['id'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $mobileno=$_POST['mobileno'];
    $password=$_POST['password'];
    $a=mysqli_connect("localhost","root","","base24") or die("Error in connecting to database");
    $query=mysqli_query($a,"Insert into ntable values($id,'$firstname','$lastname',$mobileno,'$password')") or die("Error in inserting values into database");
    if($query) {
        header('Location:signin.php');
        
    }
    else {
        // echo "Data not inserted";
    }
    mysqli_close($a);
    if(empty($_POST['chcbo'])) {
      echo "Agree to the termse nad conditions first";  
    }
}?>