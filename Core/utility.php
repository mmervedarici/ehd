<?php

class utility
{
    public function temizle($connection, $data)
    {
        $data = mysqli_escape_string($connection, strip_tags(htmlspecialchars(addslashes($data))));
        return $data;

    }
	
	public function HataVer($mesaj,$link) {
		$hata = "<script>alert(\"".$mesaj."\");location.href='".$link."'</script>";
		return $hata;
	}

	public function Yonlendir($link) {
		$yonlendir = "<meta http-equiv=\"refresh\" content=\"0;URL=".$link."\">";	
		return $yonlendir;
	}
	
	public function getDate($type)
    {
        if($type == "date"){
			return date('Y-m-d');
		}elseif($type == "datetime"){
			return date('Y-m-d H:i:s');
		}
		
    }
	
	public function tarihYazdir($tarih) {
		$aycikti=array("01" => "Ocak","02" => "Şubat","03" => "Mart","04" => "Nisan","05" => "Mayıs","06" => "Haziran","07" => "Temmuz","08" => "Ağustos","09" => "Eylül","10" => "Ekim","11" => "Kasım","12" => "Aralık");

		$ay = substr($tarih , 5, 2);
		$gun = substr($tarih , 8, 2);
		$yil = substr($tarih , 0, 4);

		$yazdir = $gun." ".$aycikti[$ay]." ".$yil;
		return $yazdir;
	}
	
	public function rastgele_uret($num=3) {
		$alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
		$pass = array();
		$alphaLength = strlen($alphabet) - 1;
		for ($i = 0; $i < $num; $i++) {
			$n = rand(0, $alphaLength);
			$pass[] = $alphabet[$n];
		}
		return implode($pass);
	}
	
	public function loadPage($file) {
		include("view/".$file.".php");
	}
	function GetIP1(){
        if (getenv("HTTP_CLIENT_IP")) {
            $ip = getenv("HTTP_CLIENT_IP");
        } elseif (getenv("HTTP_X_FORWARDED_FOR")) {
            $ip = getenv("HTTP_X_FORWARDED_FOR");
            if (strstr($ip, ',')) {
                $tmp = explode(',', $ip);
                $ip = trim($tmp[0]);
            }
        } else {
            $ip = getenv("REMOTE_ADDR");
        }
        return $ip;
    }

    function GetIP2(){
        return gethostbyaddr($_SERVER['REMOTE_ADDR']);
    }

    function GetIP3(){
        if (isset($_SERVER['HTTP_USER_AGENT']))
            return $_SERVER['HTTP_USER_AGENT'];
        else
            return "Tarayıcı bilgisi tespit edilemedi!";
    }

   
}