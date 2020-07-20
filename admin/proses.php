<?php 
	include "koneksi.php";
	$id = $_GET['pembeli'];

	mysqli_query($conn, "UPDATE pembeli SET status='Proses' WHERE id_pembeli='$id'");
	header("Location: order.php");


 ?>