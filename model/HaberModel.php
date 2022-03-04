<?php
	
	
	class HaberModel
	{
		
		private $conn;
		
		function __construct ($db)
		{
			$this -> conn = $db;
			
		}
		
		function createTable ()
		{
			try {
				$sql = "CREATE TABLE IF NOT EXISTS`haber` (
  `haberID` int(5) NOT NULL AUTO_INCREMENT,
  `hkategoriID` int(5) NOT NULL,
  `link` varchar(100) NOT NULL,
  `baslik` varchar(200) NOT NULL,
  `altBaslik` varchar(500) DEFAULT NULL,
  `icerik` longtext,
  `resim` varchar(200) DEFAULT NULL,
  `video` text,
  `resimKonum` tinyint(1) NOT NULL COMMENT '0:yok,1:sağ,2:alt,3:sol,4:ust',
  `menuKonum` tinyint(1) NOT NULL COMMENT '0:yok,1:sağ,2:alt,3:sol,4:ust',
  `galeriKonum` tinyint(1) NOT NULL COMMENT '0:yok,1:dikey-büyük,2:yatay-kücük',
  `baslamaTarihi` datetime NOT NULL,
  `bitisTarihi` datetime DEFAULT NULL,
  `durum` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0:pasif,1:aktif,2:sil',
  `olusturanKodu` int(3) DEFAULT NULL,
  `olusturan` varchar(200) DEFAULT NULL,
  `olusturmaTarihi` datetime DEFAULT NULL,
  `guncelleyenKodu` int(3) DEFAULT NULL,
  `guncelleyen` varchar(200) DEFAULT NULL,
  `guncellemeTarihi` datetime DEFAULT NULL,
  PRIMARY KEY (haberID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
";
				$rs = mysqli_query ($this -> conn, $sql);
				
				if ($rs) {
					echo "Haber tablosu oluşturuldu.<br>";
					
					return TRUE;
				} else
					return FALSE;
			} catch (Exception $e) {
				die($e);
			}
		}
		
		
	}