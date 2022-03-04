<?php

class Kernel
{
    public function checkLicence()
    {
        $key[0]    = "localhost"; // HTTP_HOST
        $key[1]    = "W:/xampp/htdocs"; //DOCUMENT_ROOT
        $key[2]    = "::1"; // SERVER_ADDR
		$getKey[0] = $_SERVER['HTTP_HOST'];
		$getKey[1] = $_SERVER['DOCUMENT_ROOT'];
		$getKey[2] = $_SERVER['SERVER_ADDR'];
		
		$keyHash   = md5($key[0] . $key[1] . $key[2]);  
		$getHash   = md5($getKey[0] . $getKey[1] . $getKey[2]);
		
		if(!$keyHash == $getHash){
			echo "Kritik hata!";
			exit();
		}
		return $getHash;
    }
	
   
}