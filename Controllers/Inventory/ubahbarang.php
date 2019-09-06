<?php
	include "/../../Model/inventory.php";
	
	$inventory = new inventory();
	
	$inventory->id_barang = $_POST['id_barang'];
	$inventory->namabarang = $_POST['namabarang'];
	$inventory->username = $_POST['spec'];
	$inventory->password = $_POST['qty'];
	$inventory->namauser = $_POST['no_lemari'];

	$error = $inventory->ubah_barang();
	
	if(!$error)
	{
		header("location: ../../aplication.php?page=input-barang");
	} else {
		session_start();
		$_SESSION['message'] = $error;
		header("location: ../../aplication.php?page=input-barang");
	}
?>
