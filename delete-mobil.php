<?php
// include database connection file
include_once("koneksi.php");
 
// Get id from URL to delete that user
$id = $_GET['id_mobil'];
 
// Delete user row from table based on given id
$result = mysqli_query($koneksi, "DELETE FROM mobil WHERE id_mobil=$id");
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php");
?>