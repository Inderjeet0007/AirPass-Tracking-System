<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "air pass");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$b_name = mysqli_real_escape_string($link, $_REQUEST['b_name']);
$mac_add = mysqli_real_escape_string($link, $_REQUEST['mac_add']);


// Attempt insert query execution
$sql = "INSERT INTO reader (r_name, mac_add) VALUES ('$b_name', '$mac_add')";
if(mysqli_query($link, $sql)){

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);

header("Location: readers.php");

?>
