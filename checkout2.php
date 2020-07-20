<?php

  include "koneksi.php";

  if(isset($_POST['finish'])){
 
    $nama = $_POST['nama_pembeli'];
    $email = $_POST['email_pembeli'];
    $telepon = $_POST['telepon_pembeli'];
    $kota = $_POST['kota'];
    $alamat = $_POST['alamat_pembeli'];
    $pos = $_POST['kd_pos'];
    $barang = $_POST['barang'];
    $harga = $_POST['harga'];
    
 

        mysqli_query($conn,"INSERT INTO pembeli (nama_pembeli,email_pembeli,telepon_pembeli,kota,alamat_pembeli,kd_pos,barang,harga) VALUES('$nama','$email','$telepon','$kota','$alamat','$pos','$barang', '$harga')");
     
       echo "<script>alert('Silahkan melakukan pembayaran ke Bank BNI dengan no rekening 1234567 atas nama NandaCPT dan melakukan konfirmasi pembayaran melalui WA : 081319602692'); window.location = 'index.php'</script>";

                   
        
     
      
    }
  



  ?>