<?php
	include "../../Model/inventory.php";
	
	$inventory = new inventory();
	
	$inventory->id_peminjam = $_POST['id_peminjam'];

	$error = $inventory->hapus_peminjaman();
	
	if(!$error)
	{
		header("location: ../../aplication.php?page=peminjaman");
	} else {
		session_start();
		$_SESSION['message'] = $error;
		header("location: ../../aplication.php?page=peminjaman");
	}
?>
