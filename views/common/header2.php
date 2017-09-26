<?php 
if(!isset($_GET['url'])){
    $_GET['url']='admin_dashboard';
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DBI Guest House | Admin</title>

    <!-- Bootstrap -->
    <link href="public/admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="public/admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="public/admin/vendors/nprogress/nprogress.css" rel="stylesheet">
    <link href="public/admin/css/hover.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="public/admin/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="public/admin/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    
    <!-- Bootstrap Select Css -->
    <link href="public/admin/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
    <!-- bootstrap-wysiwyg -->
    <link href="public/admin/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="public/admin/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="public/admin/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="public/admin/vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="public/admin/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="public/admin/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="public/admin/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="public/admin/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="public/admin/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="public/admin/build/css/custom.min.css" rel="stylesheet">
       <style type="text/css">      
     @font-face {
          font-family: 'Raleway';
          src: url('public/admin/Raleway-Medium.ttf') format('truetype');
      }
      .count{
    font-size: 15px !important;
  }
      .activex
      {
        border-right: 5px solid #1ABB9C;
        background-color: rgba(3, 88, 106, 0.70);
      }
      .fade-scale {
  transform: scale(0) !important;
  opacity: 0 !important;
  -webkit-transition: all .25s linear !important;
  -o-transition: all .25s linear !important;
  transition: all .25s linear !important;
}

.fade-scale.in {
  opacity: 1 !important;
  transform: scale(1) !important;
}
/* line 4, ../sass/style.scss */
.outer-box {
  height: 121px;
  border-radius: 5px;
  display: block;
  position: relative;
}
/* line 10, ../sass/style.scss */
.outer-box img {
  height: auto;
}
/* line 15, ../sass/style.scss */
.outer-box .inner-box {
  height: 100%;
  border-radius: 5px;
  width: 100%;
  opacity: 0;
  top: 0;
  left: 0;
  position: absolute;
  padding: 0;
  transition: opacity .9s;
}
/* line 26, ../sass/style.scss */
.outer-box .inner-box p {
  color: #fff;
  line-height: 100px;
  text-align: center;
  font-size: 25px;
}
.outer-box:hover .hover-hide{
  opacity: 0;
}
/* line 36, ../sass/style.scss */
.outer-box:hover .inner-box {
  opacity: 1;
  transition: opacity .5s;
    </style>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo URL?>admin_dashboard" class="site_title"><i class="fa fa-paw"></i> <span>DBI GUEST HOUSE</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="public/admin/images/<?php echo $photo; ?>" alt="Admin Picture" class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Hello, <?php echo $username; ?></span>
                <h2><?php echo $department ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <?php if ($department == 'GMSM') {
              echo '<div class="menu_section">
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Dashboard <span class="fa fa-dashboard"></span></a>
                  </li>
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                  </li>
                </ul>
              </div>';
            } elseif ($department == 'POSM') {
              echo '<div class="menu_section">
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="e_commerce.html">E-commerce</a></li>
                      <li><a href="projects.html">Projects</a></li>
                      <li><a href="project_detail.html">Project Detail</a></li>
                      <li><a href="contacts.html">Contacts</a></li>
                      <li><a href="profile.html">Profile</a></li>
                    </ul>
                  </li>                 
                </ul>
              </div>';
            } elseif ($department == 'SCM') {
              echo '<div class="menu_section">
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                  </li>                 
                </ul>
              </div>';
            } elseif ($department == 'AM') {
              echo '<div class="menu_section">
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                  </li>                 
                </ul>
              </div>';
            } elseif ($department == 'PSIM') {
              echo '<div class="menu_section">
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                  </li>                 
                </ul>
              </div>';
            } elseif ($department == 'SUPER ADMIN') {
              echo '<div class="menu_section">
                <ul class="nav side-menu">
                  <li class="($_GET[url] == "admin_dashboard") ? "activex" : """><a href="'.URL.'admin_dashboard"><i class="fa fa-dashboard"></i> Dashboard </a>
                  </li>         
                  <li class="($_GET[url] == "guests") ? "activex" : """><a href="'.URL.'guests"><i class="fa fa-users"></i> Guests </a>
                  </li>      
                  <li class="($_GET[url] == "ledgers") ? "activex" : """><a href="'.URL.'ledgers"><i class="fa fa-folder-open"></i> Ledgers </a>
                  </li> 
                  <li class="($_GET[url] == "point_of_sales") ? "activex" : """><a href="'.URL.'point_of_sales"><i class="fa fa-cutlery"></i> Point Of Sales </a>
                  </li>      
                  <li class="($_GET[url] == "records") ? "activex" : """><a href="'.URL.'records"><i class="fa fa-book"></i> Records </a>
                  </li>               
                  <li class="($_GET[url] == "reports") ? "activex" : """><a href="'.URL.'reports"><i class="fa fa-bar-chart"></i> Reports </a>
                  </li>      
                  <li class="($_GET[url] == "reservations") ? "activex" : """><a href="'.URL.'reservations"><i class="fa fa-calendar"></i> Reservations </a>
                  </li>      
                  <li class="($_GET[url] == "rooms") ? "activex" : """><a href="'.URL.'rooms"><i class="fa fa-building"></i> Rooms </a>
                  </li>      
                  <li class="($_GET[url] == "admin") ? "activex" : """><a href="'.URL.'users"><i class="fa fa-users"></i> Users </a>
                  </li>      
                </ul>
              </div>';
            } ?>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
             <center><p style="font-size: 10px;"><?php echo date('Y'); ?>&nbsp; &copy; Tentacular Technologies</a><br>All Rights Reserved</p></center>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="<?php echo URL?>views/logout.php" class="user-profile">
                    <i class="fa fa-sign-out"></i> Log Out
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

