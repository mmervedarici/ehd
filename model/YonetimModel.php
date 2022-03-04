<?php
	
	
	class YonetimModel
	{
		
		private $conn;
		
		function __construct ($db)
		{
			$this -> conn = $db;
			
		}
		
		function createTable ()
		{
			try {
				$sql = "CREATE TABLE IF NOT EXISTS`yonetim` (
  `yonetimID` int(5) NOT NULL AUTO_INCREMENT,
  `yonetimKodu` int(5) NOT NULL,
  `yetkiTuru` tinyint(1) NOT NULL DEFAULT '2' COMMENT '0:yok,1:root,2:yetkili,3:sınırlı yetki',
  `TC` int(11) DEFAULT NULL,
  `resim` varchar(200) DEFAULT NULL,
  `kullaniciAdi` varchar(100) NOT NULL,
  `sifre` text NOT NULL,
  `adSoyad` varchar(100) NOT NULL,
  `gorev` varchar(100) NOT NULL,
  `eposta` varchar(100) NOT NULL,
  `cepTelefonu` varchar(20) NOT NULL,
  `sabitTelefon` varchar(20) DEFAULT NULL,
  `dahiliTelefon` varchar(10) NOT NULL,
  `token` text NOT NULL,
  `sonGirisTarihi` datetime NOT NULL,
  `Ip1` varchar(50) NOT NULL,
  `Ip2` varchar(50) NOT NULL,
  `Ip3` varchar(200) NOT NULL,
  `durum` tinyint(1) NOT NULL,
  `olusturanKodu` int(3) DEFAULT NULL,
  `olusturan` varchar(200) DEFAULT NULL,
  `olusturmaTarihi` datetime DEFAULT NULL,
  `guncelleyenKodu` int(3) DEFAULT NULL,
  `guncelleyen` varchar(200) DEFAULT NULL,
  `guncellemeTarihi` datetime DEFAULT NULL,
  PRIMARY KEY(yonetimID) 
) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
				$rs = mysqli_query ($this -> conn, $sql);
				
				if ($rs) {
					echo "Yönetim tablosu oluşturuldu.<br>";
					
					return TRUE;
				} else
					return FALSE;
			} catch (Exception $e) {
				die($e);
			}
		}
		
		
	}