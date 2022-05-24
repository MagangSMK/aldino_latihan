<?php
// include database connection file
include_once("../../config.php");
 
// Get id from URL to delete that user
$idtransaksi = $_GET['idtransaksi'];
 
// Delete user row from table based on given id
$result2 = mysqli_query($mysqli, "DELETE FROM transaksi WHERE idtransaksi=$idtransaksi");
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:../../index.php");
?>