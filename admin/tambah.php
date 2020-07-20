<?php session_start(); ?>

<?php 

	if(!isset($_SESSION['admin'])){
		echo "Anda Belum Login,Silahkan <a href=\"index.php\">LOGIN</a>";
	}else{

 ?>

<!DOCTYPE html>
<html>
<head>
	<link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<title>TAMBAH BARANG</title>
</head>
<body>
	<div class="container">
    	<div class="row">
       		<div class="col-md-offset-5 col-md-3">
            	<div class="form-login">
            		<form action="" method="post"> 
            		<h4>Masukkan Data Barang</h4>
            		<input type="number" name="id" class="form-control input-sm chat-input" placeholder="ID Barang" required="" autofocus="" />
            		<input type="text" name="nama" class="form-control input-sm chat-input" placeholder="Nama Helm" required="" />
            		<input type="number" name="harga" class="form-control input-sm chat-input" placeholder="Harga" required="" />
            		<input type="number" name="stok" class="form-control input-sm chat-input" placeholder="Stok" required="" />
               		<input type="submit" name="tambah" value="Tambah" />
               		<p><a href="tampil.php"><span class="glyphicon glyphicon-home"></span> &nbsp Home</a></p>
	<?php

	include "koneksi.php";

	if(isset($_POST['tambah'])){
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$harga = $_POST['harga'];
		$stok = $_POST['stok'];
		
		$hasil = mysqli_query($conn,"SELECT id FROM barang WHERE id=$id");
		$sama = mysqli_fetch_assoc($hasil);
	if($sama['id'] == $id){
		echo "ID sudah ada,ganti yang lain";
	}
      else {
      	mysqli_query($conn,"INSERT INTO barang (id,nama,harga,stok) VALUES('$id','$nama','$harga','$stok')");
      	echo "SUCCES";
      }
	}



	?>


</body>
</html>

<?php } ?>