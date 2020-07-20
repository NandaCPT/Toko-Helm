<?php session_start(); ?>

<?php
include('koneksi.php');
if(isset($_POST['login'])){
$user = $_POST['username'];
$pass = $_POST['password'];
	
	$sql = mysqli_query($conn,"SELECT * FROM user WHERE username='$user' AND password='$pass'") or die(mysqli_error());
	if(mysqli_num_rows($sql) == 0){
		echo "Username atau Password salah,<a href=\"index.php\">coba lagi</a>";
	}else{
		$admin = $_POST['username'];
		$_SESSION['admin'] = $admin;
		header("Location: tampil.php");
	}
}
?>