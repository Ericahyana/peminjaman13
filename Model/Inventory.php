<?php
	include "Database.php";
	/*
	* Class dari table db_inventory
	*/
	class Inventory {


		public function tgl_otomatis()
		{
			$date=date("d-m-Y");
			return $date;
		}

		public function getUser($id_user) {
			$db = new Database();	
			$dbConnect = $db->connect();
			$sql = "SELECT * FROM login where id_user = '{$id_user}'"; 
			$data = $dbConnect->query($sql);
			$dbConnect = $db->close();	
			return $data->fetch_array();			
		}
		public function getIsibarang($id_barang) {
			$db = new Database();	
			$dbConnect = $db->connect();
			$sql = "SELECT * FROM barang where id_barang = '{$id_barang}'"; 
			$data = $dbConnect->query($sql);
			$dbConnect = $db->close();	
			return $data->fetch_array();			
		}

		public function hapus_user()
		{
			$db = new Database();
			$dbConnect = $db->connect();
			$sql = "DELETE FROM login where id_user = '{$this->id_user}'";
			$data = $dbConnect->query($sql);
			$dbConnect = $db->close();
			return $data;
		}
		public function ubah_user()
		{
			$db = new Database();
			$dbConnect = $db->connect();
			$sql = "UPDATE `login` SET 
					`namauser` = '{$this->namauser}', 
					`username`='{$this->username}', 
					`password`='{$this->password}'
					WHERE `id_user`='{$this->id_user}'";
			$data = $dbConnect->query($sql);
			$dbConnect = $db->close();
			return $data;
		}
		public function ubah_barang()
		{
			$db = new Database();
			$dbConnect = $db->connect();
			$sql = "UPDATE `barang` SET 
					`id_barang` = '{$this->id_barang}', 
					`namabarang` = '{$this->namabarang}', 
					`spec`='{$this->spec}', 
					`qty`='{$this->qty}', 
					`no_lemari`='{$this->no_lemari}'
					WHERE `id_barang`='{$this->id_barang}'";
			$data = $dbConnect->query($sql);
			$dbConnect = $db->close();
			return $data;
		}
		public function hapus_barang()
		{
			$db = new Database();
			$dbConnect = $db->connect();
			$sql = "DELETE FROM barang where id_barang = '{$this->id_barang}'";
			$data = $dbConnect->query($sql);
			$dbConnect = $db->close();
			return $data;
		}
		public function hapus_peminjaman()
		{
			$db = new Database();
			$dbConnect = $db->connect();
			$sql = "DELETE FROM peminjaman where id_peminjam = '{$this->id_peminjam}'";
			$data = $dbConnect->query($sql);
			$dbConnect = $db->close();
			return $data;
		}		 
		// Method untuk menampilkan semua inventory
		public function getData() {
			$db = new Database();
			$dbConnect = $db->connect();
			$sql = "SELECT * FROM barang";
			$data = $dbConnect->query($sql);
			
			$dbConnect = $db->close();
			return $data;
		}
		public function getLogin() {
			$db = new Database();
			$dbConnect = $db->connect();
			$sql = "SELECT * FROM login order by namauser ASC";
			$data = $dbConnect->query($sql);
			
			$dbConnect = $db->close();
			return $data;
		}

		public function getBarang($no_lemari) {
			$db = new Database();
			$dbConnect = $db->connect();
			$sql = "SELECT * FROM barang where no_lemari='{$no_lemari}' order by namabarang ASC";
			$data = $dbConnect->query($sql);
			
			$dbConnect = $db->close();
			return $data;
		}

		public function getBarang2() {
			$db = new Database();
			$dbConnect = $db->connect();
			$sql = "SELECT DISTINCT namabarang FROM barang order by namabarang ASC";
			$data = $dbConnect->query($sql);
			
			$dbConnect = $db->close();
			return $data;
		}

		public function validasi() {
			$db = new Database();
			//membukan koneksi
			$dbConnect = $db->connect();
			
			//query menyimpan data
			$sql = "UPDATE peminjaman
					SET tgl_kembali = '{$this->tgl_kembali}'
					WHERE id_peminjam = '{$this->id_peminjam}'";
					
			//eksekusi query di atas
			$data = $dbConnect->query($sql);
			
			//menampung error query simpan data
			$error = $dbConnect->error;
			//menutup koneksi
			$dbConnect = $db->close();
			
			//mengembalikan nilai error
			return $error;
		}

		public function getPeminjaman() {
			$db = new Database();
			$dbConnect = $db->connect();
			$sql = "SELECT * FROM peminjaman order by id_peminjam DESC";
			$data = $dbConnect->query($sql);
			
			$dbConnect = $db->close();
			return $data;
		}
		
		
		public function createuser() {
			$db = new Database();
			//membukan koneksi
			$dbConnect = $db->connect();
			
			//query menyimpan data
			$sql = "INSERT INTO login
					(
						username,
						password,
						namauser
					)
					VALUES
					(
						'{$this->username}',
						'{$this->password}',
						'{$this->namauser}'
					)";
			//eksekusi query di atas
			$data = $dbConnect->query($sql);
			
			//menampung error query simpan data
			$error = $dbConnect->error;
		
			//menutup koneksi
			$dbConnect = $db->close();
			
			//mengembalikan nilai error
			return $error;
		}
		

			public function inputbarang() {
			$db = new Database();
			//membukan koneksi
			$dbConnect = $db->connect();
			
			//query menyimpan data
			$sql = "INSERT INTO barang
					(
						id_barang,
						namabarang,
						spec,
						qty,
						no_lemari
					)
					VALUES
					(
						'{$this->id_barang}',
						'{$this->namabarang}',
						'{$this->spec}',
						'{$this->qty}',
						'{$this->keterangan}'

					)";
			//eksekusi query di atas
			$data = $dbConnect->query($sql);
			
			//menampung error query simpan data
			$error = $dbConnect->error;
		
			//menutup koneksi
			$dbConnect = $db->close();
			
			//mengembalikan nilai error
			return $error;
		}

		public function peminjaman() {
			$db = new Database();
			//membukan koneksi
			$dbConnect = $db->connect();
			
			//query menyimpan data
			$sql = "INSERT INTO peminjaman
					(
						namapeminjam,
						no_tlp,
						kelas,
						id_barang,
						qty,
						peruntukkan,
						tgl_pinjam
					)
					VALUES
					(
						'{$this->namapeminjam}',
						'{$this->no_tlp}',
						'{$this->kelas}',
						'{$this->id_barang}',
						'{$this->qty}',
						'{$this->peruntukkan}',
						'{$this->tgl_pinjam}'

					)";
			//eksekusi query di atas
			$data = $dbConnect->query($sql);
			
			//menampung error query simpan data
			$error = $dbConnect->error;
		
			//menutup koneksi
			$dbConnect = $db->close();
			
			//mengembalikan nilai error
			return $error;
		}
		
	}
?>