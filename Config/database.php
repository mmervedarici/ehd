<?php



	class database
	{
		private $host     = "localhost";
		private $db_name  = "rnzyapi_db";
		private $username = "root";
		private $password = "";
		
		public $conn;

		
		
		public function getConnection()
		{
			$this->conn = null;
			try {
				$this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->db_name);
				$this->conn->set_charset("utf8");
				
			} catch (PDOException $e) {
				echo "Bağlantı hatası: " . $e->getMessage();
			}
			return $this->conn;
		}
		
		
	}