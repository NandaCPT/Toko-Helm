<?php 
	include('koneksi.php');

 	if(isset($_POST['update'])){
 		$id = $_POST['id'];
 		$nama = $_POST['nama'];
 		$harga = $_POST['harga'];
 		$stok = $_POST['stok'];
 		

 		mysqli_query($conn, "UPDATE barang SET nama='$nama', harga='$harga', stok='$stok' WHERE id=$id");
 		}

 		header("Location: tampil.php");

 	 ?>