 <?php
if(isset($_SESSION['admin_name']))
{
  
}
else
{
  echo "<script>window.location='index';</script>";
}
?> 


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
<?php
  function active($currect_page){
    $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
    $url = end($url_array);  
    if($currect_page == $url){
      echo 'active'; //class name in css 
    } 
  }
  ?>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="dashboard" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Admin panel</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

       <!-- End Notification Nav -->
<!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/girl.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Mitasha Luhar</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Mitasha Luhar</h6>
              <span>Web Developer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

           



          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

<!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link <?php active('dashboard')?>" href="dashboard">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

     <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Category</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="add_category">
              <i class="bi bi-circle"></i><span class="<?php active('car')?>">Add Category</span>
            </a>
          </li>
          <li>
            <a href="manage_category">
              <i class="bi bi-circle"></i><span>manage Category</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->
          

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Product</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
            <a href="add_product">
              <i class="bi bi-circle"></i><span>Add Product</span>
            </a>
          </li>
          <li>
            <a href="manage_product">
              <i class="bi bi-circle"></i><span>manage Product</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->
            <li>
            <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Blog</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
           <li>
            <a href="add_blog">
              <i class="bi bi-circle"></i><span>Add Blog</span>
            </a>
          </li>
          <li>
            <a href="manage_blog">
              <i class="bi bi-circle"></i><span>manage Blog</span>
            </a>
          </li>
        </ul>
      </li>
       
      </li><!-- End Forms Nav -->
        <li class="nav-item">
        <a class="nav-link collapsed" href="contact_report" <?php active('contact_report')?>>
          <i class="bi bi-envelope"></i>
          <span>View Contact Reports</span>
        </a>
      </li>
           <li class="nav-item">
        <a class="nav-link collapsed" href="customer_report" <?php active('customer_report')?>>
          <i class="bi bi-envelope"></i>
          <span>Manage Customer Reports</span>
        </a>
      </li>
       <li class="nav-item">
        <a class="nav-link collapsed" href="cart_report" <?php active('cart_report')?>>
          <i class="bi bi-envelope"></i>
          <span>View Cart Reports</span>
        </a>
      </li>

       <li class="nav-item">
        <a class="nav-link collapsed" href="order_report" <?php active('order_report')?>>
          <i class="bi bi-envelope"></i>
          <span>View Order Reports</span>
        </a>
      </li>

       <?php
             if(isset($_SESSION['admin_name']))
            {
        ?>

              <li>
            <a class="nav-link collapsed" data-bs-target="#icon-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gem"></i><span>Welcome Admin!!  <?php echo $_SESSION['admin_name']?></span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icon-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
           <li>
            <a href="profile">
              <i class="bi bi-circle"></i><span>profile</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>user</span>
            </a>
          </li>
        </ul>

      </li>

       <li class="nav-item">
        <a class="nav-link collapsed" href="adminlogout">
          <i class="bi bi-envelope"></i>
          <span>Logout</span>
        </a>
      </li>




    </ul>
     
      
     
       
                            <?php
                        }
                        else
                        {
                        ?>

                        <?php
                        }
                        ?>




  </aside><!-- End Sidebar-->
