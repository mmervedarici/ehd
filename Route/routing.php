<?php
include_once("Model/iletisimModel.php");

$iletisim = new iletisimModel($db);

$route = false;
$data  = null;
if(isset($_POST['methodName'])){
	$methodName = $utility->temizle($db, $_POST["methodName"]);
	$data	    = $_POST;
	$route 		= true;
}

if($route){
	
	switch ($methodName) {
		case "iletisimFormu":
			$iletisim->iletisimFormu( $utility->temizle($db, $data['adSoyad']) , $utility->temizle($db, $data['telefon']) , $utility->temizle($db, $data['mesaj']) );
			break;
		default:
			$kullaniciData = [];
			$kullaniciData["status"] = 404;
			$kullaniciData["data"] = "servis methodu bulunamadı ";
			break;
	}
	
}
