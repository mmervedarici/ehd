<?php
	
	
	class EmlakModel
	{
		
		private $conn;
		
		function __construct($db)
		{
			$this->conn = $db;
			
		}
		
		function createTable()
		{
			try {
	$sql = "CREATE TABLE IF NOT EXISTS `emlak` (
  `emlakID` int(5) NOT NULL AUTO_INCREMENT,
  `emlakSira` int(5) NOT NULL,
  `satisDurum` varchar(50) NOT NULL,
  `bolge` varchar(50) NOT NULL,
  `cinsi` varchar(50) NOT NULL,
  `kat` varchar(20) NOT NULL,
  `metreKare` varchar(50),
  `cephe` varchar(20),
  `banyoSayisi` int(2),
  `yapiDurumu` varchar(20),
  `katSayisi` int(2),
  `isinmaTipi` varchar(20),
  `yakitTipi` varchar(20),
  `balkonSayisi` int(2),
  `yapimYili` int(4),
  `aciklama` varchar(100),
  `fiyat` varchar(20),
  `durum` tinyint(1) DEFAULT '0' COMMENT '0:pasif,1:aktif',
  `olusturanKodu` int(3) DEFAULT NULL,
  `olusturan` varchar(200) DEFAULT NULL,
  `olusturmaTarihi` datetime DEFAULT NULL,
  `guncelleyenKodu` int(3) DEFAULT NULL,
  `guncelleyen` varchar(200) DEFAULT NULL,
  `guncellemeTarihi` datetime DEFAULT NULL,

  PRIMARY KEY (emlakID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
				$rs = mysqli_query($this->conn, $sql);
				
				if ($rs)
				{
					echo "Emlak tablosu oluşturuldu. <br>";
					return true;
				}
				
				else{
					echo "modeln içi";
				
					return false;}
			} catch (Exception $e) {
				die($e);
			}
		}
	
		
	}