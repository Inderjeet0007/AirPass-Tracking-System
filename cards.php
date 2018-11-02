
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>AirPass Tracking System</title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta Tags -->

    <!-- Style-sheets -->
    <!-- Bootstrap Css -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Css -->
    <!-- Common Css -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Nav Css -->
    <link rel="stylesheet" href="css/style4.css">
    <!--// Nav Css -->
    <!-- Fontawesome Css -->
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <!--// Fontawesome Css -->
    <!--// Style-sheets -->

    <!--web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!--//web-fonts-->
    <style media="screen">
      .button3 {border-radius: 8px;
        background-color: #008CBA;
        color: white;
        padding: 5px 20px;
        text-align: center;}
        .button2 {border-radius: 8px;
          background-color: #f44336;
          color: white;
          padding: 5px 20px;
          text-align: center;}
    </style>
</head>

<body>
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
                            <a href="readers.php">Readers</a>
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
                                        <?php $user= $_SESSION['username']; echo '<h3 class="sub-title-w3-agileits">'.$user.'</h3>' ?>
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
                                <?php session_destroy(); ?>
                                <a class="dropdown-item" href="login.php">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!--// top-bar -->

            <!-- main-heading -->
            <h2 class="main-title-w3layouts mb-2 text-center">Beacons</h2>
            <!--// main-heading -->
<div class="padding-md">
        <div style="margin-bottom: 1em;" class="pull-right text-right">

            <a href="add_beacon.php" class="btn btn-success">Add New Beacon</a>

        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="table-responsive panel-body">
                        <table style="text-align: center"
                               class="table table-striped table-bordered table-hover dataTables-example">
                            <thead>


	  <tr>

                                <th style='text-align: center'>Beacon name</th>
                                <th style='text-align: center'>Beacon MAC</th>
                                <th style='text-align: center'>Action</th>

       </tr>

                            <?php
//Database credentials
$link = mysqli_connect("localhost", "root", "", "air pass");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


$sql="select beacon_id,b_name,mac_add from beacon ";
$res= mysqli_query($link,$sql);

   while($row = mysqli_fetch_array($res)){
      $id = $row['beacon_id'];
     echo "<tr>";
     echo "<td>" . $row['b_name'] . "</td>";
     echo "<td>" . $row['mac_add'] . "</td>";
     $emessage= 'Are you sure you want to edit ?';
     $dmessage= 'Are you sure you want to proceed ?';
   echo "<td><button class='button3'><a onclick= 'return confirm(\"$emessage\")' href='records.php?id=" . $id . "'>Edit</a></button>
	<button class='button2'><a onclick= 'return confirm(\"$dmessage\")' href='delete.php?id=" . $id . "'>Delete</a></button></td>";


     echo "</tr>"."<br>";


   }     echo"</table>"."<br>";


?>

                    </div>
                </div>
            </div>
        </div>
    </div>


                <!-- Copyright -->
                <div class="copyright-w3layouts py-xl-3 py-2 mt-xl-5 mt-4 text-center">
                    <p>© 2018 APTS . All Rights Reserved</a>
                    </p>
                </div>
                <!--// Copyright -->
            </div>
        </div>


<html>
<head>
<style>
 .input{
             position: relative;
             display: block;
             margin-left: 30%;
        }

</style>
</head>
<body>

</body>
</html>

    <!-- Required common Js -->
    <script src='js/jquery-2.2.3.min.js'></script>
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
    <script src="js/bootstrap.min.js"></script>
    <!-- //Js for bootstrap working -->

</body>

</html>
