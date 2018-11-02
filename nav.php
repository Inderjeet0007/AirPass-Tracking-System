<<<<<<< HEAD
<?php session_start();
include 'dbconnect.php'
 ?>
=======

>>>>>>> 3561bd4693f934932641bc8cd9c46518cc2ca8d3
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
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="css/bar.css">
    <link rel="stylesheet" type="text/css" href="css/pignose.calender.css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="css/style4.css">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  </head>
  <body>
      <div class="se-pre-con"></div>
      <div class="wrapper">
          <!-- Sidebar Holder -->
          <nav id="sidebar">
              <div class="sidebar-header">
                  <h1>
                      <a href="index.html">AirPass</a>
                  </h1>
                  <span>APTS</span>
              </div>
              <div class="profile-bg"></div>
              <ul class="list-unstyled components">
                  <li class="active">
                      <a href="index.php">
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
                              <a href="cards.php">Beacons</a>
                          </li>
                          <li>
<<<<<<< HEAD
                              <a href="readers.php">Readers</a>
=======
                              <a href="carousels.php">Readers</a>
>>>>>>> 3561bd4693f934932641bc8cd9c46518cc2ca8d3
                          </li>
                      </ul>
                  </li>
                  <li>
                      <a href="charts.php">
                          <i class="fas fa-braille"></i>
                          Heatmap
                      </a>
                  </li>
                  <li>
                      <a href="grids.php">
                          <i class="fas fa-bell"></i>
                          Alerts
                      </a>
                  </li>
                  <li>
                      <a href="#pageSubmenu1" data-toggle="collapse" aria-expanded="false">
                          <i class="far fa-file"></i>
                          Reports
                      </a>

                  </li>
                  <li>
                      <a href="mailbox.php">
                          <i class="far fa-envelope"></i>
                          Mailbox
                          <span class="badge badge-secondary float-md-right bg-danger">5 New</span>
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
                              <a href="login.php">Profile</a>
                          </li>
                          <li>
                              <a href="register.php">Register New Admin</a>
                          </li>
                          <li>
                              <a href="forgot.php">Change password</a>
                          </li>
                      </ul>
                  </li>
                  <li>
                      <a href="maps.php">
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
                          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" required="">
                          <button class="btn btn-style my-2 my-sm-0" type="submit">Search</button>
                      </form>
                      <!--// Search-from -->
                      <ul class="top-icons-agileits-w3layouts float-right">

                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true"
                                  aria-expanded="false">
                                  <i class="far fa-user"></i>
                              </a>
                              <div class="dropdown-menu drop-3">
                                  <div class="profile d-flex mr-o">
                                      <div class="profile-l align-self-center">
                                          <img src="images/profile.jpg" class="img-fluid mb-3" alt="Responsive image">
                                      </div>
                                      <div class="profile-r align-self-center">
<<<<<<< HEAD

                                          <?php $user= $_SESSION['username']; echo '<h3 class="sub-title-w3-agileits">'.$user.'</h3>' ?>

=======
                                          <h3 class="sub-title-w3-agileits">Inderjeet Saluja</h3>
                                          <a href="mailto:info@example.com">info@example.com</a>
>>>>>>> 3561bd4693f934932641bc8cd9c46518cc2ca8d3
                                      </div>
                                  </div>
                                  <a href="#" class="dropdown-item mt-3">
                                      <h4>
                                          <i class="far fa-user mr-3"></i>My Profile</h4>
                                  </a>
                                  <a href="#" class="dropdown-item mt-3">
                                      <h4>
                                          <i class="far fa-thumbs-up mr-3"></i>Support</h4>
                                  </a>
                                  <div class="dropdown-divider"></div>
<<<<<<< HEAD
                                   <?php session_destroy(); ?>
                                   <a class="dropdown-item" href="login.php">Logout</a>

=======
                                  <a class="dropdown-item" href="login.html">Logout</a>
>>>>>>> 3561bd4693f934932641bc8cd9c46518cc2ca8d3
                              </div>
                          </li>
                      </ul>
                  </div>
              </nav>
<<<<<<< HEAD
  </body>

</html>
<?php

  // Close connection
  mysqli_close($db);

  ?>
=======

  </body>

</html>
>>>>>>> 3561bd4693f934932641bc8cd9c46518cc2ca8d3
