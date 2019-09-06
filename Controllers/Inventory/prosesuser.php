<?php

	include "/../../Model/inventory.php";
	$inventory = new Inventory();
	
	//mengisi attribute dengan hasil dari inputan
	$inventory->username = $_POST['username'];
	$inventory->password = $_POST['password'];
	$inventory->namauser = $_POST['namauser'];
	
	//menampung gasil dari method create_function
	$error = $inventory->createuser();
	
	//pengecekan error atau berhasil, !$error = berhasil
	if(!$error) {
		//memanggil tampilan
		header("location: ../../aplication.php?page=data-user");
	} else {
		//membuat session untuk menampilkan pesan error bernama message
		session_start();
		$_SESSION['message'] = $error;
		//memanggil tampilan create kembali
		header("location: ../../aplication.php?page=data-user.php");
	}
?>