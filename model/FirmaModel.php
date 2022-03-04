<?php
	
	
	class FirmaModel
	{
		
		private $conn;
		
		function __construct ($db)
		{
			$this -> conn = $db;
			
		}
		
		function createTable ()
		{
			try {
				$sql = "CREATE TABLE IF NOT EXISTS`firma` (
  `firmaID` int(3) NOT NULL AUTO_INCREMENT,
  `firmaAdi` varchar(200) NOT NULL,
  `siteAdi` varchar(200) NOT NULL,
  `vergiDairesi` varchar(200) NOT NULL,
  `vergiNo` varchar(100) NOT NULL,
  `yetkiliKodu` int(5) NOT NULL,
  `yetkili` varchar(100) NOT NULL,
  `slogan` mediumtext NOT NULL,
  `keyword` mediumtext NOT NULL,
  `siteAdresi` varchar(200) NOT NULL,
  `siteAdresi2` varchar(200) NOT NULL,
  `renk` varchar(20) NOT NULL,
  `eposta` varchar(200) NOT NULL,
  `eposta2` varchar(200) NOT NULL,
  `telefon` varchar(20) NOT NULL,
  `sabitTelefon` varchar(20) DEFAULT NULL,
  `dahili` varchar(10) DEFAULT NULL,
  `fax` varchar(20) DEFAULT NULL,
  `adres` mediumtext,
  `koordinat` mediumtext,
  `map` mediumtext,
  `facebook` mediumtext,
  `twitter` mediumtext,
  `google` mediumtext,
  `instagram` mediumtext,
  `linkedin` mediumtext,
  `youtube` mediumtext,
  `swarm` mediumtext,
  `whatsapp` mediumtext,
  `skype` mediumtext,
  `durum` tinyint(1) NOT NULL,
  `olusturanKodu` int(3) DEFAULT NULL,
  `olusturan` varchar(200) DEFAULT NULL,
  `olusturmaTarihi` datetime DEFAULT NULL,
  `guncelleyenKodu` int(3) DEFAULT NULL,
  `guncelleyen` varchar(200) DEFAULT NULL,
  `guncellemeTarihi` datetime DEFAULT NULL,
  PRIMARY KEY (firmaID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
				$rs = mysqli_query ($this -> conn, $sql);
				
				if ($rs) {
					echo "Firma tablosu oluşturuldu.<br>";
					
					return TRUE;
				} else
					return FALSE;
			} catch (Exception $e) {
				die($e);
			}
		}
		
		
	}