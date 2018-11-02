<?php
include 'dbconnect.php';
//include 'nav.php';


$id = intval($_GET['id']);
echo "<br>BEACON ID: ".$id."<br><br>";
if($id > 0) {
  $res = mysqli_query($db, "SELECT * FROM beacon WHERE beacon_id = $id");
  $row= mysqli_fetch_array($res);
}

if(isset($_POST['update']))
{
    $b_name=$_POST['b_name'];
    $mac_add=$_POST['mac_add'];

    // checking empty fields
    if(empty($b_name) || empty($mac_add)) {
        if(empty($b_name)) {
            echo "<font color='red'>Beacon Name field is empty.</font><br/>";
        }

        if(empty($mac_add)) {
            echo "<font color='red'>Mac Address field is empty.</font><br/>";
        }
<<<<<<< HEAD


    } else {
        //updating the table
        $sql= "UPDATE beacon "."SET b_name= '$b_name', mac_add= '$mac_add' ". "WHERE beacon_id=$id";

        $result = mysqli_query($db, $sql);
        if($result){
              header("Location: cards.php");
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
        }

=======


    } else {
        //updating the table
        $sql= "UPDATE beacon "."SET b_name= '$b_name', mac_add= '$mac_add' ". "WHERE beacon_id=$id";

        $result = mysqli_query($db, $sql);
        if($result){
              header("Location: cards.php");
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
        }

>>>>>>> 3561bd4693f934932641bc8cd9c46518cc2ca8d3
        // Close connection
        mysqli_close($db);

    }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <title>AirPass Tracking System</title>
  <script>
      addEventListener("load", function () {
          setTimeout(hideURLbar, 0);
      }, false);
<<<<<<< HEAD

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
                                        <h3 class="sub-title-w3-agileits">Inderjeet Saluja</h3>
                                        <a href="mailto:info@example.com">info@example.com</a>
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
                                <a class="dropdown-item" href="login.html">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

<div class="padding-md">
  <div class="row">
      <div class="col-md-12">
          <div class="panel panel-default">
            <h3 align="center">Retrived Data</h3>
            <form  method="post" action="<?php $_PHP_SELF ?>">
              <?php echo "<br>BEACON ID: ".$id."<br><br>"; ?>
              <label>BEACON NAME</label><br/>
              <input type="text" name="b_name" value='<?php echo $row['b_name'];?>'><br/><br>
              <label>MAC ADDRESS</label><br/>
              <input type="text" name="mac_add" value='<?php echo $row['mac_add'];?>'><br/><br>
              <input type="submit" class="btn btn-warning" name="update" value="Update" >
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

=======

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
    
    <form  method="post" action="<?php $_PHP_SELF ?>">
      <label>BEACON NAME</label><br/>
      <input type="text" name="b_name" value='<?php echo $row['b_name'];?>'><br/>
      <label>MAC ADDRESS</label><br/>
      <input type="text" name="mac_add" value='<?php echo $row['mac_add'];?>'><br/>
      <input type="submit" class="btn btn-success" name="update" value="Update" >
    </form>
>>>>>>> 3561bd4693f934932641bc8cd9c46518cc2ca8d3
  </body>
</html>
