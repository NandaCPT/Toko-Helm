<?php require_once("koneksi.php");
    if (!isset($_SESSION)) {
        session_start();
    } ?>
<!DOCTYPE html>
<html >
<head>
<title>BERANDA | TOKO HELM</title> 

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/bootstrap-responsive.css" rel="stylesheet">
  <link href="admin/css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>
<body>

<header>
  
    <div class="container">    
      <div class="row">
        <div class="logo span3">
            <a class="brand" href="#"><img src="file/logo.png" alt="Logo" > </a>
        </div>
      
   
        
              <nav class="navbar navbar-inverse navbg">
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
        	          <div class="container text-center ">
    		              <div class="hero-unit">
                        <div class="title"><h3>Produk Kami</h3>
                        </div>
    		              </div>
	
                      <div class="row">
	                  <?php
                      $sql = mysqli_query($conn, "SELECT * FROM barang ORDER BY nama ");
                      while($data = mysqli_fetch_array($sql)){
                        
                    ?>
                    
                        <div class="span4">
          			          <div class="icons-box-container">
                            <div class="title"><h4><?php echo $data['nama']; ?></h4>
                            </div>
                              <img src="admin/<?php echo $data['foto']; ?> " width='200px' height='200px'/>
						                      <div class="txt"><h4>Rp.<?php echo number_format($data['harga'],2,",",".");?></h4>
                                  </div>
                                  <br>
                                  <center>  <div class="clear"><a href="checkout.php?act=add&amp;id=<?php echo $data['id']; ?> &amp;ref=index.php" class="btn btn-info" >Beli</a>


                                     </div> </center>
                          </div>
					              </div>
                      
                    
        	       
                <?php   
                   }
                ?>
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

</body>
</html>