<?php session_start(); ?>
<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login</title>
    <link href="css/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  	<link href="css/login.css" rel="stylesheet">
</head>
<body style="background-color: #0ac5d6">
	<br> 
	<div id="wrapper">
		<form action="login_act.php" method="post">
			
		<center><h1>ADMIN LOGIN</h1></center>
			<table align="center block-center">
	<br>
		<tr>
			
			<td><label>Username:</label></td>
			<td><input type="text" name="username" placeholder="Username" class="form-control center-block" required /></td>
		</tr>
		<tr>
			<td><label>Password:</label></td>
				<td><input type="password" name="password" placeholder="Password" class="center-block form-control" required /></td>	
		</tr>
		<tr>
			<td><input type="submit" name="login" value="Login" /><a href="../index.php">Beranda <span class="glyphicon glyphicon-home"></span> </a>
			</td>
		</tr>
			</table>
		</form>
	</div>
</body>
</html>