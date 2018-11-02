<?php
include 'dbconnect.php';
?>

<!DOCTYPE html>
<html lang="en">

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
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <style>
body, html {
    height: 100%;
    font-family: Arial, Helvetica, sans-serif;
}

* {
    box-sizing: border-box;
}

.bg-img {
    /* The image used */
    background-image: url("images/h1.jpg");

    min-height: 380px;

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* Add styles to the form container */
.container {
    position: absolute;
    right: 0;
    margin: 20px;
    max-width: 300px;
    padding: 16px;
    background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Set a style for the submit button */
.btn {
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.btn:hover {
    opacity: 1;
}
</style>
</head>



<body>
  <h2>AirPass Tracking System</h2>
  <div class="bg-img">
    <form name="login" method="post">
      <div class="container">
        <h1>Login</h1>

  		<p> Username</p>
  			<input type="text" id="username" name="username" placeholder="Enter username">
  			<p> Password</p>
  			<input type="password" id="password"  name="password" placeholder="password" required>
        <button type="submit" name="login"class="btn">Login</button>
      </div>
    </form>

<?php
  if(isset($_POST['login']))
  {

    $username = $_POST["username"];
    $password = $_POST["password"];


    $result = mysqli_query($db, "SELECT * FROM login WHERE username = '$username'");

    $row = mysqli_fetch_array($result);

    if($row["username"]==$username && $row["password"]==$password)
      {
        session_start();
        if($row){
          $_SESSION['valid_user'] = true;
          $_SESSION['username'] = $username;
           header("Location: index.php");
         }
       }

    else
        echo"Sorry, your credentials are not valid, Please try again.";
  }
?>
  </div>

    <!-- Required common Js -->
    <script src='js/jquery-2.2.3.min.js'></script>
    <!-- //Required common Js -->

    <!-- Js for bootstrap working-->
    <script src="js/bootstrap.min.js"></script>
    <!-- //Js for bootstrap working -->

</body>

</html>
