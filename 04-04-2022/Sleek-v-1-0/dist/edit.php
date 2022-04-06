<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Sleek - Admin Dashboard Template</title>

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

  <link href="assets/img/favicon.png" rel="shortcut icon" />
  <script src="assets/plugins/nprogress/nprogress.js"></script>
</head>


  <body class="sidebar-fixed sidebar-dark header-light header-fixed" id="body">
    <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script>

    <div class="mobile-sticky-body-overlay"></div>

    <div class="wrapper">
      
              <!--
          ====================================
          ——— LEFT SIDEBAR WITH FOOTER
          =====================================
        -->
        <aside class="left-sidebar bg-sidebar">
          <?php  include('includesidebar.php'); ?>
        </aside>
      <div class="page-wrapper">
                  <!-- Header -->
          <header class="main-header " id="header">
            <?php include('header.php'); ?>
          </header>
        <div class="content-wrapper">
          <div class="content">
<?php
include('header_footer.html');
$id=$_REQUEST['id'];

$a = mysqli_connect("localhost","root","","base24") or die ("error in connection");
$query = mysqli_query($a,"select * from tshirts where Tid=$id") or die("error in query");
while($row=mysqli_fetch_array($query))
{

$id = $row["Tid"];
$size = $row["size"];
$color = $row["Color"];
$brand = $row["Brand"];
$details = $row["Details"];
$material = $row["Material"];
$fabric = $row["Fabric"];
$img = $row["img_url"];
}
mysqli_close($a);

?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form enctype="multipart/form-data" method="post">
Enter Id:
<input type-="text" name="id" value="<?php echo $id ?>"/><br/>
Enter Size:
<input type="text" name="Size" value="<?php echo $size ?>"/><br/>
Enter color:
<input type="text" name="color" value="<?php echo $color ?>"/><br/>
Enter Brand:
<input type="text" name="brand" value="<?php echo $brand ?>"/><br/>
Enter Details:
<input type="details" name="details" value="<?php echo $details ?>"/><br/>
Enter Material:
<input type="text" name="Material" value="<?php echo $material ?>"/><br/>
Enter Fabric:
<input type="text" name="Fabric" value="<?php echo $fabric ?>"/><br/>
Select image :
<input type="file" name="file" value="<?php echo $img ?>"><br/>
<input type="submit" value="Upload" name="Submit1" > <br/>

<a href="tshirts.php">Image</a>
</form>
</body>
</html>

<?php

if(isset($_POST['Submit1'])){
$id=$_POST['id'];
$size=$_POST['Size'];
$Brand=$_POST['brand'];
$Details=$_POST['details'];
$color=$_POST['color'];
$material=$_POST['Material'];
$fabric=$_POST['Fabric'];
$img="images/".$_FILES["file"]["name"];
$a = mysqli_connect("localhost","root","","base24") or die("error in connection");
$abc="update tshirts set size='$size', Color='$color', Brand='$Brand',Details='$Details',Material='$material',Fabric='$fabric',img_url='$img' where Tid=$id";
echo $abc;
$query = mysqli_query($a,$abc);
if($query)
{
echo "<script>alert('data updated');</script>";
}
else
{
echo "<script>alert('error in updating');</script>";
}
mysqli_close($a);
}

?>
</div>
        </div>
      </div>
    </div>

    <footer class="footer mt-auto">
      <div class="copyright bg-white">
          <p>
                &copy; <span id="copy-year">2019</span> Copyright Sleek Dashboard Bootstrap Template by
                <a
                  class="text-primary"
                  href="http://www.iamabdus.com/"
                  target="_blank"
                  >Abdus</a
                >.
          </p>
      </div>
      <script>
                var d = new Date();
                var year = d.getFullYear();
                document.getElementById("copy-year").innerHTML = year;
      </script>
      </footer>

    </div>
  </div>

    
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCn8TFXGg17HAUcNpkwtxxyT9Io9B_NcM" defer></script>
<script src="assets/plugins/jquery/jquery.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/plugins/toaster/toastr.min.js"></script>
<script src="assets/plugins/slimscrollbar/jquery.slimscroll.min.js"></script>
<script src="assets/plugins/charts/Chart.min.js"></script>
<script src="assets/plugins/ladda/spin.min.js"></script>
<script src="assets/plugins/ladda/ladda.min.js"></script>
<script src="assets/plugins/jquery-mask-input/jquery.mask.min.js"></script>
<script src="assets/plugins/select2/js/select2.min.js"></script>
<script src="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
<script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill.js"></script>
<script src="assets/plugins/daterangepicker/moment.min.js"></script>
<script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
<script src="assets/plugins/jekyll-search.min.js"></script>
<script src="assets/js/sleek.js"></script>
<script src="assets/js/chart.js"></script>
<script src="assets/js/date-range.js"></script>
<script src="assets/js/map.js"></script>
<script src="assets/js/custom.js"></script>




  </body>
</html>