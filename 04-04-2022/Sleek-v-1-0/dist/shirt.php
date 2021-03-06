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
?>
<html>
<head>
<style>
a:link {
  color: green;
  background-color: transparent;
  text-decoration: none;
}
a:visited {
  color: pink;
  background-color: transparent;
  text-decoration: none;
}
a:hover {
  color: red;
  background-color: transparent;
  text-decoration: underline;
}
a:active {
  color: yellow;
  background-color: transparent;
  text-decoration: underline;
}
</style>

</head>


<?php
error_reporting(0);
if($_POST['addition']) {
    echo "hi";
    header('Location:addshirt.php');
}
if(($_POST['ed'])) {
        header('Location:editshirt.php');
}
if(($_POST['del'])) {
    header('Location:deleteshirt.php');
}
ob_start();
include('connection.php');
$sql = "Select * from shirts";

$query =mysqli_query($a, $sql);
echo "<div class=card card-table-border-none id=recent-orders>";
echo "<div class=card-header justify-content-between>";
echo "<div class=card-body pt-0 pb-5>";
echo "<table class=table card-table table-responsive table-responsive-large style=width:100%>";
while($row=mysqli_fetch_array($query))
{
    $id=$row["Sid"];
    echo "<tr>";
    echo "<td rowspan=10>"."<img src=".$row["img_url"]." height=300px width=200px ></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>"."ID: ".$row["Sid"]."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Size: <b>".$row["size"]."</b></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>"."Color:".$row["Color"]."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>"."Brand: ".$row["Brand"]."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>"."Details: ".$row["Details"]."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>"."Material: ".$row["Material"]."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>"."Fabric: ".$row["Fabric"]."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>"."<a href=deleteshirt.php?id=$id>Delete data</a>"."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>"."<a href=editshirt.php?id=$id>Edit data</a>"."</td>";
    echo "</tr>";
    
    
    
    }
    echo "</table>"; 
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "<center>";
    echo "<br><a href=addshirt.php>Add data</a>";
    echo "</center>";
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