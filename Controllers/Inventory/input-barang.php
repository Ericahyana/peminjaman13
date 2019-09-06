<?php

	include "/../../Model/inventory.php";
	$inventory = new Inventory();
	
	//mengisi attribute dengan hasil dari inputan
	$inventory->id_barang = '';
	$inventory->namabarang = $_POST['namabarang'];
	$inventory->spec = $_POST['spec'];
	$inventory->qty = $_POST['qty'];
	$inventory->keterangan = $_POST['no_lemari'];
	
	//menampung gasil dari method create_function
	$error = $inventory->inputbarang();
	
	//pengecekan error atau berhasil, !$error = berhasil
	if(!$error) {
		//memanggil tampilan
		header("location: ../../aplication.php?page=input-barang");
	} else {
		//membuat session untuk menampilkan pesan error bernama message
		session_start();
		$_SESSION['message'] = $error;
		//memanggil tampilan create kembali
		header("location: ../../aplication.php?page=input-barang.php");
	}
?>