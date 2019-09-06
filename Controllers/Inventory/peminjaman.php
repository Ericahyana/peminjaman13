<?php

	include "/../../Model/inventory.php";
	$inventory = new Inventory();
	
	//mengisi attribute dengan hasil dari inputan
	$inventory->namapeminjam = $_POST['namapeminjam'];
	$inventory->namabarang = $_POST['namabarang'];
	$inventory->no_tlp = $_POST['no_tlp'];
	$inventory->kelas = $_POST['kelas'];
	$inventory->qty = $_POST['qty'];
	$inventory->peruntukkan = $_POST['peruntukkan'];
	$inventory->tgl_pinjam = $_POST['tgl_pinjam'];
	
	//menampung gasil dari method create_function
	$error = $inventory->peminjaman();
	
	//pengecekan error atau berhasil, !$error = berhasil
	if(!$error) {
		//memanggil tampilan
		header("location: ../../aplication.php?page=peminjaman");
	} else {
		//membuat session untuk menampilkan pesan error bernama message
		session_start();
		$_SESSION['message'] = $error;
		//memanggil tampilan create kembali
		header("location: ../../aplication.php?page=peminjaman");
	}
?>