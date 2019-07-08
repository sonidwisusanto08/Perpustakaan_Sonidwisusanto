<?php
// include database connection file
include_once("config.php");

// Get id from URL to delete that kategori
$id_penerbit = $_GET['id_penerbit'];

// Delete kategori row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM penerbit WHERE id_penerbit=$id_penerbit");

// After delete redirect to Home, so that latest kategori list will be displayed.
header("Location:penerbit.php");
?>