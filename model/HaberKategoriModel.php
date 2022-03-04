<?php
	
	
	class HaberKategoriModel
	{
		
		private $conn;
		
		function __construct ($db)
		{
			$this -> conn = $db;
			
		}
		
		function createTable ()
		{
			try {
				$sql = "CREATE TABLE IF NOT EXISTS`haber_kategori` (
  `hkategoriID` int(5) NOT NULL AUTO_INCREMENT,
  `link` varchar(100) NOT NULL,
  `baslik` varchar(200) NOT NULL,
  `menuGoster` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1:aktif,0:pasif',
  `durum` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1:aktif,0:pasif',
  `olusturanKodu` int(3) DEFAULT NULL,
  `olusturan` varchar(100) DEFAULT NULL,
  `olusturmaTarihi` datetime DEFAULT NULL,
  `guncelleyenKodu` int(3) DEFAULT NULL,
  `guncelleyen` varchar(100) DEFAULT NULL,
  `guncellemeTarihi` datetime DEFAULT NULL,
  PRIMARY KEY (hkategoriID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
				$rs = mysqli_query ($this -> conn, $sql);
				
				if ($rs) {
					echo "HaberKategori tablosu oluşturuldu.<br>";
					
					return TRUE;
				} else
					return FALSE;
			} catch (Exception $e) {
				die($e);
			}
		}
		
		
	}