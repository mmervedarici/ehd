<?php
	
	
	class SeoYonlendirmeModel
	{
		
		private $conn;
		
		function __construct ($db)
		{
			$this -> conn = $db;
			
		}
		
		function createTable ()
		{
			try {
				$sql = "CREATE TABLE IF NOT EXISTS `seo_yonlendirme` (
  `seoYonlendirmeID` int(5) NOT NULL AUTO_INCREMENT,
  `seoID` int(5) NOT NULL,
  `eskiLink` varchar(100) NOT NULL,
  `yeniLink` varchar(100) DEFAULT NULL,
  `durum` tinyint(1) NOT NULL DEFAULT '0',
  `olusturanKodu` int(3) DEFAULT NULL,
  `olusturan` varchar(200) DEFAULT NULL,
  `olusturmaTarihi` datetime DEFAULT NULL,
  `guncelleyenKodu` int(3) DEFAULT NULL,
  `guncelleyen` varchar(200) DEFAULT NULL,
  `guncellemeTarihi` datetime DEFAULT NULL,
  PRIMARY KEY(seoYonlendirmeID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
				$rs = mysqli_query ($this -> conn, $sql);
				
				if ($rs) {
					echo "seoYonlendirme tablosu oluşturuldu.<br>";
					
					return TRUE;
				} else
					return FALSE;
			} catch (Exception $e) {
				die($e);
			}
		}
		
		
	}