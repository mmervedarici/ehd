<?php
	
	
	class BelgeModel
	{
		
		private $conn;
		
		function __construct($db)
		{
			$this->conn = $db;
			
		}
		
		function createTable()
		{
			try {
				$sql = "CREATE TABLE IF NOT EXISTS `belge` (
  `belgeID` int(5) NOT NULL AUTO_INCREMENT,
  `seoView` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL,
  `belgeAdi` varchar(100) NOT NULL,
  `durum` tinyint(1) NOT NULL,
  `olusturanKodu` int(3) DEFAULT NULL,
  `olusturan` varchar(200) DEFAULT NULL,
  `olusturmaTarihi` datetime DEFAULT NULL,
  `guncelleyenKodu` int(3) DEFAULT NULL,
  `guncelleyen` varchar(200) DEFAULT NULL,
  `guncellemeTarihi` datetime DEFAULT NULL,
  PRIMARY KEY (belgeID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
";
				$rs = mysqli_query($this->conn, $sql);
				
				if ($rs)
				{
					echo "Belge tablosu oluşturuldu. <br>";
					return true;
				}
				
				else
					return false;
			} catch (Exception $e) {
				die($e);
			}
		}
	
		
	}