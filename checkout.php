<?php require_once("koneksi.php");
    if (!isset($_SESSION)) {
        session_start();
    } ?>
    <?php 
require('koneksi.php');


  $no = $_GET['id'];

  $query = mysqli_query($conn, "SELECT * FROM barang WHERE id='$no'");
  $data = mysqli_fetch_assoc($query);
     ?>
<!DOCTYPE html>
<html >
<head>
<title>CHECKOUT | TOKO HELM</title> 

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/bootstrap-responsive.css" rel="stylesheet">
  <link href="admin/css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
</head>
<body>

<header>
  
    <div class="container">    
      <div class="row">
        <div class="logo span3">
            <a class="brand" href="#"><img src="file/logo.png" alt="Logo" > </a>
        </div>
      
   
        
              <nav class="navbar navbar-inverse">
                <div class="container-fluid">

    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> &nbsp Beranda</a></li>
      <li><a href="admin/index.php"><span class="glyphicon glyphicon-user"></span> &nbsp Admin</a></li>
    </ul>
                </div>
              </nav>
      </div>
    </div>

</header>

   
    

  
      <div id="wrapper">
        <div class="container">
          <div class="table-responsive">
            <div class="title"><h3>Form Checkout</h3>
            </div>
              <div class="hero-unit">Silahkan isi form dibawah ini dengan benar
              </div>
          
               
    <form  role="formku" id="formku" method="post" action="checkout2.php">
    <table class="table table-condensed">
 
      
      <tr>
        <td><label>Nama Lengkap</label></td>
        <td><input name="nama_pembeli" type="text" class="required" minlength="6" size="200" /></td>
      </tr>

      <tr>
        <td><label>Email</label></td>
        <td><input name="email_pembeli" type="text" class="email required" minlength="8"  /></td>
      </tr>

      <tr>
        <td><label>No telepon</label></td>
        <td><input name="telepon_pembeli" type="number" class="required" minlength="10"   /></td>
      </tr>

       <tr>
        <td><label>Kota</label></td>
        <td><input name="kota" type="text" class="required" minlength="5"   /></td>
      </tr>

      <tr>
        <td><label>Alamat</label></td>
        <td><input name="alamat_pembeli" type="text" class="required" minlength="15"  /></td>
      </tr>
       <tr>
        <td><label for="kd_pos">Kode Pos</label></td>
        <td><input name="kd_pos" type="number" class="required" minlength="4" /></td>
      </tr>
      <tr>
      <td><label>Barang</label></td>
           <td> <input class="required" type="text" name="barang" value="<?php echo ucwords($data['nama']) ?>" readonly="true" ></td>
      </tr>
       <td><label>Harga</label></td>
           <td> <input class="required" type="text" name="harga" value="<?php echo ucwords($data['harga']) ?>" readonly="true" ></td>
      </tr>

      
      <tr>
      <td></td>
        <td> <a href=""><input type="submit" value="Simpan Data" name="finish" class="btn btn-sm btn-primary"/>&nbsp;<a href="index.php" class="btn btn-sm btn-danger">CANCEL</a></td>
        </tr>
    </table>
    </form>


          </div>
        </div>      
      </div>
      
  
      <div id="wrapper"> 
      <div id="footer">
        <div id="copyright">
          <div class="container">

    
      <p> Copyright &copy<a>2018 Toko Helm</a> </p>
        <p> Powered by Bootstrap </p>
     
  
          </div>
        </div>  
      </div>
    </div>

<script src="js/jquery-1.8.2.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/flexslider.js"></script>
<script src="js/carousel.js"></script>
<script src="js/jquery.cslider.js"></script>
<script src="js/slider.js"></script>
<script def src="js/custom.js"></script>

<script src="jquery.validate.js"></script>
    <script>
    $(document).ready(function(){
        $("#formku").validate();
    });
    </script> 
    
    <style type="text/css">
    label.error {
        color: red;
        padding-left: .5em;
    }
    </style>
</body>
</html>
