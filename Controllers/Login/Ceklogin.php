<?php
session_start();
	include_once "../../Model/Database.php";
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$db = new Database();
	$dbConnect = $db->connect();
	$data = mysqli_query($dbConnect,"select * from login where username='$username' AND password='$password'");
	$cek = mysqli_num_rows($data);

	if($cek > 0 ) {
		while ($rows = mysqli_fetch_array($data)):
           $_SESSION['namauser'] = $rows['namauser'];
		   $_SESSION['username'] = $username;
           endwhile;
		   header("location:../../aplication.php?page=halaman-utama");
		  
	}else {
		header("location:../../index.php?pesan=gagal");
	}
	
	
	
	
?>
