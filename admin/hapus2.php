<?php 
	include "koneksi.php";
	$id = $_GET['pembeli'];

	mysqli_query($conn, "DELETE FROM pembeli WHERE id_pembeli='$id'");
	header("Location: order.php");


 ?>