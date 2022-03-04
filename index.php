<?php 
session_start(); 
ob_start();
header('Content-Type: text/html; charset=utf-8');
date_default_timezone_set('Asia/Baghdad');

include_once ("Config/database.php");
include_once ("Config/config.php");
$database  = new Database();
$db 	   = $database->getConnection();
$config	   = new config();
$siteBilgi = $config->siteBilgi();

include_once ("Core/utility.php");
$utility  = new utility();

include_once ("Controller/themeController.php");
$theme = new themeController($db);

include_once ("Core/utility.php");

include_once ("Route/routing.php");

$temaConfig = $theme->anaSayfa();

include_once($temaConfig['header']);
include_once($temaConfig['main']);
include_once($temaConfig['footer']);



mysqli_close($db);