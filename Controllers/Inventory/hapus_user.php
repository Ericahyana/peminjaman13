<?php
	include "../../Model/inventory.php";
	
	$inventory = new inventory();
	
	$inventory->id_user = $_POST['id_user'];

	$error = $inventory->hapus_user();
	
	if(!$error)
	{
		header("location: ../../aplication.php?page=data-user");
	} else {
		session_start();
		$_SESSION['message'] = $error;
		header("location: ../../aplication.php?page=data-user");
	}
?>
