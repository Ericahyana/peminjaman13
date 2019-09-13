<?php
	include "../../Model/inventory.php";
	
	$inventory = new inventory();
	
	$inventory->id_barang = $_POST['id_barang'];

	$error = $inventory->hapus_barang();
	
	if(!$error)
	{
		header("location: ../../aplication.php?page=input-barang");
	} else {
		session_start();
		$_SESSION['message'] = $error;
		header("location: ../../aplication.php?page=input-barang");
	}
?>
