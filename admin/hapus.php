<?php 
	include "koneksi.php";
	$id = $_GET['barang'];

	mysqli_query($conn, "DELETE FROM barang WHERE id='$id'");
	header("Location: tampil.php");


 ?>