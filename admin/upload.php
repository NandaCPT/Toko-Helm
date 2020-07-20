<?php session_start(); ?>

<?php 

	if(!isset($_SESSION['admin'])){
		echo "Anda Belum Login,Silahkan <a href=\"index.php\">LOGIN</a>";
	}else{

 ?>

<?php 

	$id = $_GET['barang'];

 ?>

<!DOCTYPE html>
<html>
<head>
	<link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

	<title>UPLOAD</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-offset-5 col-md-3">
            <div class="form-login">

<center><h2>UPLOAD GAMBAR</h2></center>
<br>

				<form action="aksi.php" method="post" enctype="multipart/form-data">
				Pilih Gambar<input type="file" name="gambar">
				ID:<input type="text" name="id" value="<?php echo $id ?>">
				<input type="submit" name="upload" value="Upload" >
				<p><a href="tampil.php"><span class="glyphicon glyphicon-home"></span> &nbsp Home</a></p>
				</form>
			</div>
		</div>
	</div>
</div>

</body>
</html>
		
<?php } ?>