<?php session_start(); ?>

<?php 

	if(!isset($_SESSION['admin'])){
		echo "Anda Belum Login,Silahkan <a href=\"index.php\">LOGIN</a>";
	}else{

 ?>

<!DOCTYPE html>
<html>
<head>

	<title>DASHBOARD</title>
	<link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>
<body>
<table style="text-align: center";"  cellpadding="6" border="4">

		<th> &nbsp ID &nbsp</th>
		<th>NAMA</th>
		<th> &nbsp &nbsp HARGA &nbsp &nbsp</th>
		<th>GAMBAR</th>
	
		
		<nav class="navbar navbar-inverse">
  			<div class="container-fluid">
  				<div class="navbar-header">
  					<div class="navbar-brand">DASHBOARD</div>
   		  		</div>

    <ul class="nav navbar-nav">
		<li><a href="tampil.php"><span class="glyphicon glyphicon-home"></span> &nbsp Home</a> </li>
		<li> <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> &nbsp Logout</a> </li>
		<li> <a href="tambah.php"><span class="glyphicon glyphicon-plus"></span> &nbsp Tambah</a> </li>
		<li> <a href="order.php"><span class="glyphicon glyphicon-list-alt"></span> &nbsp Pesanan</a> </li>
	</ul>
			</div>
 		</nav>
		
			
		
		<th colspan="1"> &nbsp HAPUS DATA &nbsp</th>
		<th colspan="1"> &nbsp UBAH DATA &nbsp</th>
		<th colspan="2"> &nbsp UPLOAD GAMBAR &nbsp</th>

		<?php

		include('koneksi.php');

		$query = mysqli_query($conn,"SELECT * from barang");

		if(mysqli_num_rows($query)==0){
			echo "Barang Kosong";
		} else {
			while($isi = mysqli_fetch_assoc($query)){
				echo "<tr>";
					echo "<td>".$isi['id']."</td>";
					echo "<td>".$isi['nama']."</td>";
					echo "<td>Rp.".$isi['harga']."</td>";
					echo '<td><img src="'.$isi['foto'].'" alt="No Pict" width="200px"/></td>';
					
					echo "<td><a href=\"hapus.php?barang=$isi[id]\"class='btn btn-lg btn-danger'>Hapus</a></td>";
					echo "<td><a href=\"edit.php?barang=$isi[id]\"class='btn btn-lg btn-danger'>Edit</a></td>";
					echo "<td><a href=\"upload.php?barang=$isi[id]\"class='btn btn-lg btn-success'>Upload</a></td>";
				echo "</tr>";
			}
		}

		?>

	</table>


      <div id="footer">
        <div id="copyright">
          <div class="container">

    
      <p> Copyright &copy<a>2018 Toko Helm</a> </p>
        <p> Powered by Bootstrap </p>
     
  
          </div>
        </div>  
      </div>
    

</body>
</html>

<?php } ?>