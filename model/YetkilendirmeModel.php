<?php
	
	
	class YetkilendirmeModel
	{
		
		private $conn;
		
		function __construct ($db)
		{
			$this -> conn = $db;
			
		}
		
		function createTable ()
		{
			try {
				$sql = "CREATE TABLE IF NOT EXISTS`yetkilendirme` (
  `yetkilendirmeID` int(5) NOT NULL AUTO_INCREMENT,
  `yetkiKodu` varchar(10) NOT NULL COMMENT 'ilk iki hane sayfa adı, sonraki 1:ekle,2:düzenle,3:listele,4:sil,son iki hane ID''si olacak.',
  `durum` tinyint(1) NOT NULL DEFAULT '0',
  `olusturanKodu` int(3) DEFAULT NULL,
  `olusturan` varchar(200) DEFAULT NULL,
  `olusturmaTarihi` datetime DEFAULT NULL,
  `guncelleyenKodu` int(3) DEFAULT NULL,
  `guncelleyen` varchar(200) DEFAULT NULL,
  `guncellemeTarihi` datetime DEFAULT NULL,
  PRIMARY KEY(yetkilendirmeID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
				$rs = mysqli_query ($this -> conn, $sql);
				
				if ($rs) {
					echo "yetkilendirme tablosu oluşturuldu.<br>";
					
					return TRUE;
				} else
					return FALSE;
			} catch (Exception $e) {
				die($e);
			}
		}
		
		
	}