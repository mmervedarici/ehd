<?php
	
	
	class SeoModel
	{
		
		private $conn;
		
		function __construct ($db)
		{
			$this -> conn = $db;
			
		}
		
		function createTable ()
		{
			try {
				$sql = "CREATE TABLE IF NOT EXISTS `seo` (
  `seoID` int(5) NOT NULL AUTO_INCREMENT,
  `view` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL,
  `baslik` varchar(200) NOT NULL,
  `icerik` text,
  `kategori` int(1) NOT NULL DEFAULT '1' COMMENT '1:Statik, 2:Dinamik',
  `sorguTuru` tinyint(1) NOT NULL,
  `durum` tinyint(1) NOT NULL,
  `sayac` int(11) DEFAULT NULL,
  `olusturanKodu` int(3) DEFAULT NULL,
  `olusturan` varchar(200) DEFAULT NULL,
  `olusturmaTarihi` datetime DEFAULT NULL,
  `guncelleyenKodu` int(3) DEFAULT NULL,
  `guncelleyen` varchar(200) DEFAULT NULL,
  `guncellemeTarihi` datetime DEFAULT NULL,
  PRIMARY KEY(seoID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
				$rs = mysqli_query ($this -> conn, $sql);
				
				if ($rs) {
					echo "seo tablosu oluşturuldu.<br>";
					
					return TRUE;
				} else
					return FALSE;
			} catch (Exception $e) {
				die($e);
			}
		}
		
		
	}