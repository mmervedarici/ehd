<?php
	
	
	class YetkiListesiModel
	{
		
		private $conn;
		
		function __construct ($db)
		{
			$this -> conn = $db;
			
		}
		
		function createTable ()
		{
			try {
				$sql = "CREATE TABLE IF NOT EXISTS`yetki_listesi` (
  `yetkiID` int(5) NOT NULL AUTO_INCREMENT,
  `yetkiKodu` varchar(20) NOT NULL,
  `modul` varchar(50) NOT NULL,
  `aciklama` varchar(500) NOT NULL,
  PRIMARY KEY(yetkiID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
				$rs = mysqli_query ($this -> conn, $sql);
				
				if ($rs) {
					echo "yetkiListesi tablosu oluşturuldu.<br>";
					
					return TRUE;
				} else
					return FALSE;
			} catch (Exception $e) {
				die($e);
			}
		}
		
		
	}