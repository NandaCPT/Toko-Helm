<?php session_start(); ?>

<?php 

	if(!isset($_SESSION['admin'])){
		echo "Anda Belum Login,Silahkan <a href=\"index.php\">LOGIN</a>";
	}else{

 ?>

<?php 
	include "koneksi.php";

	$id = $_GET['barang'];

	$query = mysqli_query($conn, "SELECT * FROM barang WHERE id='$id'");
	$isi = mysqli_fetch_assoc($query);

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

 	<title>EDIT DATA</title>

 </head>
 <body>

 		<div class="container">
   			<div class="row">
        		<div class="col-md-offset-5 col-md-3">
            		<div class="form-login">
 						<form action="edit-proses.php" method="post">
 		 		<h4>Perbarui Data Barang</h4>
 				ID Barang:<input type="number" name="id" value="<?php echo $isi['id'] ?>" readonly="true">
 				Nama Helm:<input type="text" name="nama" value="<?php echo $isi['nama'] ?>">
 				Harga Helm:<input type="number" name="harga" value="<?php echo $isi['harga'] ?>">
 				Stok Helm:<input type="number" name="stok" value="<?php echo $isi['stok'] ?>">
 	
 			<input type="submit" name="update" value="Perbarui">
 		 <p><a href="tampil.php"><span class="glyphicon glyphicon-home"></span> &nbsp Home</a></p>
 						
 						</form>
					</div>
				</div>
			</div>
		</div>
  
     
</body>
</html>

 <?php } ?>