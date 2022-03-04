<?php
	
	
	class SayfaModel
	{
		
		private $conn;
		
		function __construct ($db)
		{
			$this -> conn = $db;
			
		}
		
		function createTable ()
		{
			try {
				$sql = "CREATE TABLE IF NOT EXISTS `sayfa` (
  `sayfaID` int(5) NOT NULL AUTO_INCREMENT,
  `ustSayfaKodu` varchar(100) DEFAULT NULL,
  `goster` tinyint(1) NOT NULL COMMENT 'ana menude göster:1, gösterme:0',
  `link` varchar(200) NOT NULL,
  `video` text NOT NULL,
  `buton` varchar(200) NOT NULL,
  `butonLink` varchar(200) NOT NULL,
  `baslik` varchar(200) NOT NULL,
  `altBaslik` varchar(500) NOT NULL,
  `icerik` text NOT NULL,
  `resim` varchar(200) NOT NULL,
  `resimKonum` tinyint(1) NOT NULL COMMENT '0:yok,1:sağ,2:alt,3:sol,4:ust',
  `menuKonum` tinyint(1) NOT NULL COMMENT '0:yok, 1:sagda, 2:altta',
  `galeriKonum` tinyint(1) NOT NULL COMMENT '0:yok, 1:buyuk, 2:kucuk',
  `icon` varchar(100) NOT NULL,
  `durum` tinyint(1) NOT NULL DEFAULT '0',
  `olusturanKodu` int(3) DEFAULT NULL,
  `olusturan` varchar(200) DEFAULT NULL,
  `olsturmaTarihi` datetime DEFAULT NULL,
  `guncelleyenKodu` int(3) DEFAULT NULL,
  `guncelleyen` varchar(200) DEFAULT NULL,
  `guncellemeTarihi` datetime DEFAULT NULL,
  PRIMARY KEY(sayfaID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
				$rs = mysqli_query ($this -> conn, $sql);
				
				if ($rs) {
					echo "sayfa tablosu oluşturuldu.<br>";
					
					return TRUE;
				} else
					return FALSE;
			} catch (Exception $e) {
				die($e);
			}
		}
		
		
	}