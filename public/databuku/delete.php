<?php
// include database connection file
include_once("../../config/config.php");
 
// Get id from URL to delete that user
$idbuku = $_GET['idbuku'];
 
// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM databuku WHERE idbuku=$idbuku");
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:../../index.php");
?>