<?php
include 'dbconnect.php';
//include 'nav.php';

$id = intval($_GET['id']);
<<<<<<< HEAD

if($id > 0) {

=======
echo "<br>BEACON ID: ".$id."<br><br>";
if($id > 0) {
 
>>>>>>> 3561bd4693f934932641bc8cd9c46518cc2ca8d3
//deleting the row from table
$result = mysqli_query($db, "DELETE FROM beacon WHERE beacon_id=$id");
 if($result){
              header("Location: cards.php");
        } else{
            echo "ERROR: Could not able to execute $id. " . mysqli_error($db);
        }
}
<<<<<<< HEAD

?>
=======
        
?>

<!DOCTYPE html>
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
    
    <form  method="post" action="<?php $_PHP_SELF ?>">
      <label>BEACON NAME</label><br/>
      <input type="text" name="b_name" value='<?php echo $row['b_name'];?>'><br/>
      <label>MAC ADDRESS</label><br/>
      <input type="text" name="mac_add" value='<?php echo $row['mac_add'];?>'><br/>
      <input type="submit" class="btn btn-success" name="delete" value="delete" >
    </form>
  </body>
</html>
>>>>>>> 3561bd4693f934932641bc8cd9c46518cc2ca8d3
