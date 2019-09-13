<?php
if (!isset($_SESSION)) {
	session_start();
}

date_default_timezone_set("Asia/Jakarta");

include "../../Model/inventory.php";
$inventory = new Inventory();
$date_core=date("Y-m-d");
$date_now= date("Y-m-d");
	foreach ($inventory->getPeminjaman() as $key ) {
		// $data = [
		// 	'phone'=>$key['no_tlp'],
		// 	'message'=>'asdasdasdsadasdsad',
		// 	'tanggal'=>$key['tgl_pinjam']
		// ];

		if($key['tgl_pinjam']<$date_now){
			if($key['tgl_kembali']=="0000-00-00"){
				// echo $key['no_tlp'];
			$barang = $inventory->getIsibarang($key['id_barang']);		

			$curl = curl_init();
			$token = "iiuKJz7VXGSs3slOhLcOOkI9vbj0Ec1OpbQn7Gi8y2NBIQqG7ZGwMk3Fu72sQiyo";

			curl_setopt($curl, CURLOPT_HTTPHEADER,
				array(
					"Authorization: $token",
				)
			);

			$data = [
				'phone' =>$key['no_tlp'],
				'message' => 'PEMBERITAHUAN, Alat '.$barang['namabarang']." atas nama ".$key['namapeminjam']." sudah Melebihi waktu peminjaman silahkan kembalikan alat yang di pinjam ke petugas. Terimakasih",
			];
			curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
			curl_setopt($curl, CURLOPT_URL, "https://wablas.com/api/send-message");
			curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
			curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
			$result = curl_exec($curl);
			curl_close($curl);

			echo '<script language="javascript">alert("WA Terikirm !"); window.history.back();</script>';
			// echo "<pre>";
			// print_r($result);
			$_SESSION['messageSuccess'] = "Info Telah Berhasil Dikirim";


			}
		}

	// $akun->id_user     	= $_SESSION['id_user'];
	// $akun->action 		= "Telah Mengirim WA ke NIK : ". $_GET['NIK'];
	// $akun->tgl_dibuat  = date('Y-m-d H:i:s');

	// $akun->create_histori();

	}

?>