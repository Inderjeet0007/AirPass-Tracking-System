<?php
include 'dbconnect.php';
//include 'nav.php';

$id = intval($_GET['id']);

if($id > 0) {
//deleting the row from table
$result = mysqli_query($db, "DELETE FROM beacon WHERE beacon_id=$id");
 if($result){
              header("Location: cards.php");
        } else{
            echo "ERROR: Could not able to execute $id. " . mysqli_error($db);
        }
}
?>
