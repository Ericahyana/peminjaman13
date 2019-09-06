<?php
	include "/../../Model/inventory.php";
	
	$inventory = new inventory();
	
	$inventory->id_user = $_POST['id_user'];
	$inventory->username = $_POST['username'];
	$inventory->password = $_POST['password'];
	$inventory->namauser = $_POST['namauser'];

	$error = $inventory->ubah_user();
	
	if(!$error)
	{
		header("location: ../../aplication.php?page=data-user");
	} else {
		session_start();
		$_SESSION['message'] = $error;
		header("location: ../../aplication.php?page=data-user");
	}
?>
