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
	<title>ORDERAN</title>
</head>
<body>
<table style="text-align: center";"  cellpadding="6" border="4">
<p><a href="tampil.php"><span class="glyphicon glyphicon-home"></span> &nbsp Home</a></p>
		
		<th>NAMA</th>
		<th> &nbsp &nbsp Kota &nbsp &nbsp</th>
		<th> &nbsp &nbsp Alamat &nbsp &nbsp</th>
		<th> &nbsp &nbsp Kode Pos &nbsp &nbsp</th>
		<th>email</th>
		<th>Telpon</th>
		<th>Barang</th>
		<th>Harga</th>
		<th colspan="1"> &nbsp Proses &nbsp</th>
		<th>Status</th>
		
		<?php

		include('koneksi.php');

		$query = mysqli_query($conn,"SELECT * from pembeli");

		if(mysqli_num_rows($query)==0){
			echo "Kosong";
		} else {
			while($isi = mysqli_fetch_assoc($query)){
				echo "<tr>";
					
					echo "<td> &nbsp".$isi['nama_pembeli']." &nbsp </td>";
					echo "<td> &nbsp".$isi['kota']."</td>";
					echo "<td> &nbsp ".$isi['alamat_pembeli']."&nbsp </td>";
					echo "<td> &nbsp".$isi['kd_pos']."</td>";
					echo "<td> &nbsp".$isi['email_pembeli']."  &nbsp </td>";
					echo "<td> &nbsp".$isi['telepon_pembeli']."  &nbsp </td>";
					echo "<td> &nbsp".$isi['barang']."</td>";
					echo "<td> &nbsp".$isi['harga']."  &nbsp </td>";
					echo "<td>   &nbsp <a href=\"proses.php?pembeli=$isi[id_pembeli]\"class='btn'>Konfirmasi</a> &nbsp  </br>";
					echo "<td> &nbsp".$isi['status']."  &nbsp </td>";
					
				
					
				
			}
		}

		?>
		
		</table>


    

</body>
</html>

<?php } ?>