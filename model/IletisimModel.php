<?php
	
	
	class IletisimModel
	{
		
		private $conn;
		
		function __construct ($db)
		{
			$this -> conn = $db;
			
		}
		
		function createTable ()
		{
			try {
				$sql = "CREATE TABLE IF NOT EXISTS `iletisim` (
  `iletisimID` int(5) NOT NULL AUTO_INCREMENT,
  `adSoyad` varchar(100) NOT NULL,
  `eposta` varchar(100) NOT NULL,
  `telefon` varchar(16) NOT NULL,
  `mesaj` longtext NOT NULL,
  `ip1` varchar(50) NOT NULL,
  `ip2` varchar(50) NOT NULL,
  `ip3` varchar(200) NOT NULL,
  `durum` tinyint(1) NOT NULL,
  `olusturulmaTarihi` datetime DEFAULT NULL,
  `okuyanKodu` int(3) NOT NULL,
  `okuyan` varchar(200) NOT NULL,
  `okumaTarihi` datetime NOT NULL,
  `guncelleyenKodu` int(3) NOT NULL,
  `guncelleyen` varchar(200) NOT NULL,
  `guncellemeTarihi` datetime NOT NULL,
  PRIMARY key (iletisimID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;";

				$rs = mysqli_query ($this -> conn, $sql);
				
				if ($rs) {
					echo "Iletisim tablosu oluşturuldu.<br>";
					
					return TRUE;
				} else
					return FALSE;
			} catch (Exception $e) {
				die($e);
			}
		}
		
		
	}