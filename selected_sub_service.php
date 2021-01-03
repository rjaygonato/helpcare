<?php include 'includes/session.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Helpcare | Home</title>

  <!-- Google Font: Source Sans Pro -->
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> -->
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./dist/css/adminlte.min.css">
  <!-- Client style -->
  <link rel="stylesheet" href="./dist/css/style.css">
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
       <!-- Start breadcrumbs -->
      <li class="nav-item d-none d-sm-inline-block">
        <a href="home.php" class="nav-link">Home /</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="sub_category.php" class="nav-link">Salont At Home</a>
      </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include 'customer_nav.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper dash-wrap">
    <!-- Content Header (Page header) -->
    <div class="header-wrap">
            <h4>Manicure and Pedicure</h4>
            <p>Approximate time: 50 to 60 mins</p>
    </div>

    <div class="row card service_details">
            <h5>Service details</h5>
            <p>Keep your hands and feet looking clean and healthy. A regular mini-pedi helps
             strength your nails and leaves you with smoother skin.
             </p>
             <h5>About the service pro</h5>
             <p>Our nail technicians are all highly trained professionals and are the top rated technicians in the city.</p>
    </div>

    <!-- List of service providers -->
    <h5>Our HelpCare Expert</h5>
    <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-3 mb-5">
            <div class="small-box shadow-sm bg-white rounded text-center box-adjust">
                <a href="booking_pro_profile.php"><img src="images/profile_pic/person_5.jpg" class="img-fluid responsive-img rounded-circle" style="width:200px;height:160px;">
                <p>Mae A.</p></a>
                <p>Brgy Linao, Ormoc City</p>
                <p>Ratings: 4 out of 5</p>
                <p>Job Completed: 44</p>
                <p>Rate: Php 120</p>
                <a class="cta-service-pro" href="#">Book Now</a>
            </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-3 mb-5">
            <div class="small-box shadow-sm bg-white rounded text-center box-adjust">
                <a href="#"><img src="images/profile_pic/person_7.jpg" class="img-fluid responsive-img rounded-circle" style="width:200px;height:160px;">
                <p>Grace A.</p></a>
                <p>Brgy Ipil, Ormoc City</p>
                <p>Ratings: 2 out of 5</p>
                <p>Job Completed: 11</p>
                <p>Rate: Php 130</p>
                <a class="cta-service-pro" href="#">Book Now</a>
            </div>
        </div>
        
        <div class="col-sm-6 col-md-4 col-lg-3 mb-5">
            <div class="small-box shadow-sm bg-white rounded text-center box-adjust">
                <a href="#"><img src="images/profile_pic/person_6.jpg" class="img-fluid responsive-img rounded-circle" style="width:200px;height:160px;">
                <p>Vio B.</p></a>
                <p>Dist. 32, Ormoc City</p>
                <p>Ratings: 1 out of 5</p>
                <p>Job Completed: 5</p>
                <p>Rate: Php 110</p>
                <a class="cta-service-pro" href="#">Book Now</a>
            </div>
        </div>



    </div>
    
    
   


    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <?php include 'footer.php'; ?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="./plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="./dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="./plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="./dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="./dist/js/pages/dashboard3.js"></script>
</body>
</html>
