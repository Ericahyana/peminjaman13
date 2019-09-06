<?php
	include "/../../Model/inventory.php";
	
	$inventory = new inventory();
	
	$inventory->id_peminjam = $_POST['id_peminjam'];
	$inventory->tgl_kembali = $_POST['tgl_kembali'];

	$error = $inventory->validasi();
	
	if(!$error)
	{
		header("location: ../../aplication.php?page=peminjaman");
	} else {
		session_start();
		$_SESSION['message'] = $error;
		header("location: ../../aplication.php?page=data-user");
	}
?>
