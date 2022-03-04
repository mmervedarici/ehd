<?php

class themeController{
	private $conn;
	private $siteAyar;
	
	
	function __construct($db)
	{
		$this->conn 	= $db;
		$this->siteAyar = new config();
		
	}

	
	public function seoKontrol($link){
		
		
		$seoData = [];
		$seoDb   = mysqli_fetch_assoc(mysqli_query($this->conn,"SELECT view,link,baslik,icerik FROM seo WHERE link='".$link."' "));
		if($seoDb){
			$seoData = $seoDb;
			if(file_exists('View/pages/'.$seoData['view'].'.php')){
				//Sayac SEO ya eklencek. 
				$seoData['status'] 		 = true;
				$seoData['title']  		 = $seoDb['baslik'];
				$seoData['description']  = $seoDb['icerik'];
				$seoData['link']  		 = $seoDb['link'];
			} else{
				$seoData['status'] = false;
				$config = $this->siteAyar->siteBilgi();
				$seoData['title'] 		= $config['title'];
				$seoData['description'] = $config['description'];
			}
 		}else{
			$seoData['status'] = false;
		}
		return $seoData;
		
	}

	
	public function anaSayfa(){
		
		
		$anaSayfa['header'] = 'View/theme/header.php';
		$anaSayfa['footer'] = 'View/theme/footer.php';
		
		if(isset($_GET['Sayfa'])){
			$seoKontrol = $this->seoKontrol($_GET["Sayfa"]);
			if($seoKontrol['status']){
				if(file_exists('View/pages/'.$seoKontrol['view'].'.php')){
					
					$anaSayfa['main'] 		 = 'View/pages/'.$seoKontrol['view'].'.php';
					$anaSayfa['title'] 		 = $seoKontrol['title'];
					$anaSayfa['description'] = $seoKontrol['description'];
					$anaSayfa['link'] 		 = $seoKontrol['link'];
					$anaSayfa['anaSayfa'] 	 = false;
					
					
				} else {
					$config = $this->siteAyar->siteBilgi();
					//$anaSayfa['main'] 	 = 'View/theme/404.php';
					//404lerde nofollow title var
					$anaSayfa['main'] 		 = 'View/theme/main.php';
					$anaSayfa['title'] 		 = $config['title'];
					$anaSayfa['description'] = $config['description'];
					$anaSayfa['anaSayfa'] 	 = true;
				}
			}else{
				$config = $this->siteAyar->siteBilgi();
				//$anaSayfa['main'] 	 = 'View/theme/404.php';
				$anaSayfa['main'] 		 = 'View/theme/main.php';
				$anaSayfa['title'] 		 = $config['title'];
				$anaSayfa['description'] = $config['description'];
				$anaSayfa['anaSayfa'] 	 = true;
				
			}
		}else{
			$config = $this->siteAyar->siteBilgi();
			$anaSayfa['main'] 	     = 'View/theme/main.php';
			$anaSayfa['title'] 	 = $config['title'];
			$anaSayfa['description'] = $config['description'];
			$anaSayfa['anaSayfa'] 	 = true;
		}
		return $anaSayfa;
	}
	
}