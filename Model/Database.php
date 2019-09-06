<?php

	class Database {
	
		private $conn;
		
		// Method untuk menghubungkan ke database
		public function connect() {
			$this->conn = new mysqli("localhost", "root", "", "db_inventory");
			return $this->conn;
		}
		
		// method untuk memutuskan koneksi dengan database
		public function close() {
			return $this->conn->close();
		}
	}
	
?>