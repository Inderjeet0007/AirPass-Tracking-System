
<?php session_start();

 ?>
<html lang="en" dir="ltr">
  <head>
    <title>AirPass Tracking System</title>
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="<?php echo base_url('css/bootstrap.css'); ?>" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo base_url('css/bar.css'); ?>">
    <link href="<?php echo base_url('css/style.css'); ?>" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo base_url('css/style4.css');?>">
    <link href="<?php echo base_url('css/fontawesome-all.css');?>" rel="stylesheet">
   <link href="<?php echo base_url('//fonts.googleapis.com/css?family=Poiret+One');?>;" rel="stylesheet">
    <link href="<?php echo base_url('fonts.googleapis.com/css?family=Open+Sans:300,400,600,700');?>" rel="stylesheet">
  </head>
  <body>

      <div class="wrapper">
          <!-- Sidebar Holder -->
          <nav id="sidebar">
              <div class="sidebar-header">
                  <h1>
                      <a href="<?php echo base_url('/dashboard');?>">AirPass</a>
                  </h1>
                  <span>APTS</span>
              </div>
              <div class="profile-bg"></div>
              <ul class="list-unstyled components">
                  <li class="active">
                      <a href="<?php echo base_url('index.php/dashboard');?>">
                          <i class="fas fa-th-large"></i>
                          Dashboard
                      </a>
                  </li>
                  <li>
                      <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
                          <i class="fas fa-laptop"></i>
                          Components
                          <i class="fas fa-angle-down fa-pull-right"></i>
                      </a>
                      <ul class="collapse list-unstyled" id="homeSubmenu">
                          <li>
                              <a href="<?php echo base_url('index.php/Beacon');?>">Beacons</a>
                          </li>
                          <li>

                              <a href="<?php echo base_url('index.php/Reader');?>">Readers</a>


                          </li>
                      </ul>
                  </li>
                  <li>
                      <a href="<?php echo base_url('index.php/Heatmap');?>">
                          <i class="fas fa-braille"></i>
                          Heatmap
                      </a>
                  </li>
                  <li>
                      <a href="<?php echo base_url('index.php/Alerts');?>">
                          <i class="fas fa-bell"></i>
                          Alerts
                      </a>
                  </li>
                  <li>
                      <a href="<?php echo base_url('index.php/Reports');?>" >
                          <i class="far fa-file"></i>
                          Reports
                      </a>

                  </li>
                  <li>
                      <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false">
                          <i class="fas fa-users"></i>
                          Admins
                          <i class="fas fa-angle-down fa-pull-right"></i>
                      </a>
                      <ul class="collapse list-unstyled" id="pageSubmenu3">

                          <li>
                              <a href="<?php echo base_url('index.php/Add_admin');?>">Register New Admin</a>
                          </li>
                          <li>
                              <a href="<?php echo base_url('index.php/cp');?>">Change password</a>
                          </li>
                      </ul>
                  </li>
                  <li>
                      <a href="<?php echo base_url('index.php/Map');?>">
                          <i class="far fa-map"></i>
                          Floor Plan
                      </a>
                  </li>
              </ul>
          </nav>

          <!-- Page Content Holder -->
          <div id="content">
              <!-- top-bar -->
              <nav class="navbar navbar-default mb-xl-5 mb-4">
                  <div class="container-fluid">

                      <div class="navbar-header">
                          <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                              <i class="fas fa-bars"></i>
                          </button>
                      </div>
                      <!-- Search-from -->
                      <form action="#" method="post" class="form-inline mx-auto search-form">
                          <input class="form-control mr-sm-2 " type="search" placeholder="Search" aria-label="Search" required="">
                          <button class="btn btn-style my-2 my-sm-0" type="submit">Search</button>
                      </form>
                      <!--// Search-from -->
                      <ul class="top-icons-agileits-w3layouts float-right">

                          <li class="nav-item dropdown">

                                  <i class="btn btn-info my-2 my-sm-0 fa fa-power-off"> <a href="<?php $this->load->helper('url'); echo site_url('index.php/authenticate/logout') ?>">Logout</a></i>

                          </li>
                      </ul>
                  </div>
              </nav>

                  <!-- Required common Js -->
                  <script src='<?php echo base_url('js/jquery-2.2.3.min.js');?> '></script>
                  <!-- //Required common Js -->

                  <!-- Sidebar-nav Js -->
                  <script>
                      $(document).ready(function () {
                          $('#sidebarCollapse').on('click', function () {
                              $('#sidebar').toggleClass('active');
                          });
                      });
                  </script>
                  <!--// Sidebar-nav Js -->

                  <!-- dropdown nav -->
                  <script>
                      $(document).ready(function () {
                          $(".dropdown").hover(
                              function () {
                                  $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                                  $(this).toggleClass('open');
                              },
                              function () {
                                  $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                                  $(this).toggleClass('open');
                              }
                          );
                      });
                  </script>
                  <!-- //dropdown nav -->

                  <!-- Js for bootstrap working-->
                  <script src="<?php echo base_url('js/bootstrap.min.js');?> "></script>
                  <!-- //Js for bootstrap working -->

  </body>

</html>
