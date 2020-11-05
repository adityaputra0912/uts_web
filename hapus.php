<?php
include 'conn.php';
if(isset($_GET['SKU'])){
	$delete = mysqli_query($conn, "DELETE FROM barang WHERE SKU = '".$_GET['SKU']."' ");
	header('location:index.php');
}
?>