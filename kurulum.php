<?php
include "config/database.php";

    $host = "localhost";
	$db_name  = "rnzyapi_db";
	$username = "root";
	$password = "";
	


// Create connection
	$conn = new mysqli($host,$username, $password);
// Check connection
	if ($conn -> connect_error) {
		die("Connection failed: " . $conn -> connect_error);
	}

echo "---Start---<br>";


// Create database
	$sql = "CREATE DATABASE IF NOT EXISTS rnzyapi_db";
	if ($conn -> query ($sql) === TRUE) {
		echo "Database created successfully <br>";
	} else {
		echo "Error creating database: " . $conn -> error;
	}

	
	
	

include_once "config" . DIRECTORY_SEPARATOR . "database.php";

include_once "model" . DIRECTORY_SEPARATOR . "BelgeModel.php";
include_once "model" . DIRECTORY_SEPARATOR . "EmlakModel.php";
include_once "model" . DIRECTORY_SEPARATOR . "FirmaModel.php";
include_once "model" . DIRECTORY_SEPARATOR . "GaleriModel.php";
include_once "model" . DIRECTORY_SEPARATOR . "HaberModel.php";
include_once "model" . DIRECTORY_SEPARATOR . "HaberKategoriModel.php";
include_once "model" . DIRECTORY_SEPARATOR . "IletisimModel.php";
include_once "model" . DIRECTORY_SEPARATOR . "PopModel.php";
include_once "model" . DIRECTORY_SEPARATOR . "SayfaModel.php";
include_once "model" . DIRECTORY_SEPARATOR . "SeoModel.php";
include_once "model" . DIRECTORY_SEPARATOR . "SeoYonlendirmeModel.php";
include_once "model" . DIRECTORY_SEPARATOR . "SliderModel.php";
include_once "model" . DIRECTORY_SEPARATOR . "YetkilendirmeModel.php";
include_once "model" . DIRECTORY_SEPARATOR . "YetkiListesiModel.php";
include_once "model" . DIRECTORY_SEPARATOR . "YonetimModel.php";


$database = new database();
$db = $database->getConnection();

	{
		$belge = new BelgeModel($db);
		$resultBelge = $belge->createTable();
		if ($resultBelge) {
			echo "Belge tablosu oluşturuldu <br>";
		} else
			exit();
	}

	{
        $emlak = new EmlakModel($db);
		$resultEmlak = $emlak -> createTable();
		if ($resultEmlak)
			echo "Emlak tablosu oluşturuldu <br>";
		else
		{echo "no!";
			exit();}
	}
    {
		$firma = new FirmaModel($db);
		$resultFirma = $firma->createTable();
		if ($resultFirma) {
			echo "Firma tablosu oluşturuldu <br>";
		} else
			exit();
	}
    {
		$galeri = new GaleriModel($db);
		$resultGaleri = $galeri->createTable();
		if ($resultGaleri) {
			echo "Galeri tablosu oluşturuldu <br>";
		} else

			exit();
	}

	{
		$haber = new HaberModel($db);
		$resultHaber = $haber->createTable();
		if ($resultHaber) {
			echo "Haber tablosu oluşturuldu <br>";
		} else

		exit();
	}
    {
		$haber = new HaberKategoriModel($db);
		$resultHaberKategoriModel = $haber->createTable();
		if ($resultHaberKategoriModel) {
			echo "HaberKategori tablosu oluşturuldu <br>";
		} else

		exit();
	}

    {
		$iletisim = new IletisimModel($db);
		$resultIletisimModel = $iletisim->createTable();
		if ($resultIletisimModel) {
			echo "Iletisim tablosu oluşturuldu <br>";
		} else
		exit();
	}

	{
        $pop = new PopModel($db);
		$resultPop = $pop->createTable();
		if ($resultPop)
			echo "Pop tablosu oluşturuldu <br>";
		else
			exit();
	}

	{
         $sayfa = new SayfaModel($db);
		$resultSayfa = $sayfa->createTable();
		if ($resultSayfa)
			echo "Sayfa tablosu oluşturuldu <br>";
		else
			exit();
	}
	
	{
        $seo = new SeoModel($db);
		$resultSeo = $seo->createTable();
		if ($resultSeo)
			echo "Seo tablosu oluşturuldu <br>";
		else
			exit();
	}
	
	{
        $seoYonlendirme = new SeoYonlendirmeModel($db);
		$resultSeoYonlendirme = $seoYonlendirme->createTable();
		if ($resultSeoYonlendirme)
			echo "Seo Yonlendirme tablosu oluşturuldu <br>";
		else
			exit();
	}

	{
        $slider = new SliderModel($db);
		$resultSlider = $slider->createTable();
		if ($resultSlider)
			echo "Slider tablosu oluşturuldu <br>";
		else
			exit();
	}
	
    {
        $yetkilendirme = new YetkilendirmeModel($db);
		$resultYonetim_Yetki = $yetkilendirme->createTable();
		if ($resultYonetim_Yetki)
			echo "Yetkilendirme tablosu oluşturuldu <br>";
		else
			exit();
	}

	{
        $yetkiListesi = new YetkiListesiModel($db);
		$resultYetkiListesi = $yetkiListesi->createTable();
		if ($resultYetkiListesi)
			echo "YetkiListesi tablosu oluşturuldu <br>";
		else
			exit();
			
	}

	{
        $yonetim = new YonetimModel($db);
		$resultYonetim = $yonetim -> createTable();
		if ($resultYonetim)
			echo "Yonetim tablosu oluşturuldu <br>";
		else
			exit();
	}

    echo "---Finish---";
