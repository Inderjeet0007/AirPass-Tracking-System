<?php
include 'dbconnect.php';
//include 'nav.php';

$id = intval($_GET['id']);

if($id > 0) {

//deleting the row from table
$result = mysqli_query($db, "DELETE FROM reader WHERE reader_id=$id");
 if($result){
              header("Location: readers.php");
        } else{
            echo "ERROR: Could not able to execute $id. " . mysqli_error($db);
        }
}

?>
