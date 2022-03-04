<?php
	
	
	class PopModel
	{
		
		private $conn;
		
		function __construct ($db)
		{
			$this -> conn = $db;
			
		}
		
		function createTable ()
		{
			try {
				$sql = "CREATE TABLE IF NOT EXISTS`pop` (
  `popID` int(5) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(100) NOT NULL,
  `icerik` text NOT NULL,
  `resim` text NOT NULL,
  `link` text NOT NULL,
  `otomatik` int(11) NOT NULL DEFAULT '1' COMMENT '0:manuel,1:otomatik',
  `baslamaTarihi` datetime NOT NULL,
  `bitisTarihi` datetime NOT NULL,
  `gorunum` tinyint(1) NOT NULL COMMENT '0:anasayfa,1:tümsayfalar',
  `durum` tinyint(1) NOT NULL COMMENT '0:kapalı,1:aktif,2:sil',
  `olusturanKodu` int(3) DEFAULT NULL,
  `olusturan` varchar(200) DEFAULT NULL,
  `olusturmaTarihi` datetime DEFAULT NULL,
  `guncelleyenKodu` int(3) DEFAULT NULL,
  `guncelleyen` varchar(200) DEFAULT NULL,
  `guncellemeTarihi` datetime DEFAULT NULL,
  PRIMARY KEY(popID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
				$rs = mysqli_query ($this -> conn, $sql);
				
				if ($rs) {
					echo "Pop tablosu oluşturuldu.<br>";
					
					return TRUE;
				} else
					return FALSE;
			} catch (Exception $e) {
				die($e);
			}
		}
		
		
	}