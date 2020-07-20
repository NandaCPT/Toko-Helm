<?php 

	include 'koneksi.php';

	if(isset($_POST['upload'])){
		$file = $_FILES['gambar']['tmp_name'];
		$file_pure = addslashes(file_get_contents($file));
		$myfile = $_FILES['gambar']['name'];

			$id = $_POST['id'];


			move_uploaded_file($file, "gambar/..".$myfile);

			$lokasi = "gambar/..".$myfile;

			mysqli_query($conn, "UPDATE barang SET foto='$lokasi' WHERE id='$id'");
			header("Location: tampil.php");
		}



 ?>