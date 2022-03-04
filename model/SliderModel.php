<?php
	
	
	class SliderModel
	{
		
		private $conn;
		
		function __construct ($db)
		{
			$this -> conn = $db;
			
		}
		
		function createTable ()
		{
			try {
				$sql = "CREATE TABLE IF NOT EXISTS`slider` (
  `sliderID` int(5) NOT NULL AUTO_INCREMENT,
  `resim` varchar(200) DEFAULT NULL,
  `baslik` varchar(100) NOT NULL,
  `altBaslik` varchar(200) NOT NULL,
  `aciklama` varchar(200) DEFAULT NULL,
  `linkButon1` varchar(200) DEFAULT NULL,
  `link1` varchar(200) DEFAULT NULL,
  `linkButon2` varchar(200) DEFAULT NULL,
  `link2` varchar(200) DEFAULT NULL,
  `durum` tinyint(1) NOT NULL,
  `olusturanKodu` int(3) DEFAULT NULL,
  `olusturan` varchar(200) DEFAULT NULL,
  `olusturmaTarihi` datetime DEFAULT NULL,
  `guncelleyenKodu` int(3) DEFAULT NULL,
  `guncelleyen` varchar(200) DEFAULT NULL,
  `guncellemeTarihi` datetime DEFAULT NULL,
  PRIMARY KEY(sliderID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
				$rs = mysqli_query ($this -> conn, $sql);
				
				if ($rs) {
					echo "slider tablosu oluşturuldu.<br>";
					
					return TRUE;
				} else
					return FALSE;
			} catch (Exception $e) {
				die($e);
			}
		}
		
		
	}