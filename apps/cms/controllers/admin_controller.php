<?php

class admin{
    
	public function index(){
    
    global $sName;
		
		$sessKey = md5($_SERVER['SERVER_ADDR'].' - '.$sName.'');
		
		if(!isset($_SESSION[''.$sessKey.''])){
            
		tpReq('head');
		
			require_once 'libraries/themes/login/login_view.php';
			
		tpReq('foot');	
		
		}else{
		
		header('Location: '.ROOT.'tp-Dashboard');
			
			}
		
		}
		
	
public function dashboard(){

global $sName;
    
	$sessKey = md5($_SERVER['SERVER_ADDR'].' - '.$sName.'');
	
	if(!isset($_SESSION[''.$sessKey.''])){

		header('Location: '.ROOT.'tp-incorrect');
		
		}else{
        
			require_once 'libraries/themes/login/header.php';
		
				require_once 'libraries/themes/login/dash_view.php';
			
			require_once 'libraries/themes/login/footer.php';		
			
			}
	
	
	}	
	
public function pages(){

global $sName;
	
	$sessKey = md5($_SERVER['SERVER_ADDR'].' - '.$sName.'');
	
	if(!isset($_SESSION[''.$sessKey.''])){

		header('Location: '.ROOT.'tp-incorrect');
		
		}else{
			
			require_once 'libraries/themes/login/header.php';
		
				require_once 'libraries/themes/login/dash_page.php';
			
			require_once 'libraries/themes/login/footer.php';		
			
			}
	
	
	}	
    
public function post(){

global $sName;
	
	$sessKey = md5($_SERVER['SERVER_ADDR'].' - '.$sName.'');
	
	if(!isset($_SESSION[''.$sessKey.''])){

		header('Location: '.ROOT.'tp-incorrect');
		
		}else{
			
			require_once 'libraries/themes/login/header.php';
		
				require_once 'libraries/themes/login/dash_post.php';
			
			require_once 'libraries/themes/login/footer.php';		
			
			}
	
	
	}	
    
public function image(){

global $sName;
	
	$sessKey = md5($_SERVER['SERVER_ADDR'].' - '.$sName.'');
	
	if(!isset($_SESSION[''.$sessKey.''])){

		header('Location: '.ROOT.'tp-incorrect');
		
		}else{
			
			require_once 'libraries/themes/login/header.php';
		
				require_once 'libraries/themes/login/dash_image.php';
			
			require_once 'libraries/themes/login/footer.php';		
			
			}
	
	
	}	    
    
public function settings(){

global $sName;
	
	$sessKey = md5($_SERVER['SERVER_ADDR'].' - '.$sName.'');
	
	if(!isset($_SESSION[''.$sessKey.''])){

		header('Location: '.ROOT.'tp-incorrect');
		
		}else{
			
			require_once 'libraries/themes/login/header.php';
		
				require_once 'libraries/themes/login/dash_settings.php';
			
			require_once 'libraries/themes/login/footer.php';		
			
			}
	
	
	}	        
    
public function products(){

global $sName;
	
	$sessKey = md5($_SERVER['SERVER_ADDR'].' - '.$sName.'');
	
	if(!isset($_SESSION[''.$sessKey.''])){

		header('Location: '.ROOT.'tp-incorrect');
		
		}else{
			
			require_once 'libraries/themes/login/header.php';
		
				require_once 'libraries/themes/login/dash_product.php';
			
			require_once 'libraries/themes/login/footer.php';		
			
			}
	
	
	}	            
	
public function incorrect(){

global $sName;

	$sessKey = md5($_SERVER['SERVER_ADDR'].' - '.$sName.'');
		
		if(!isset($_SESSION[''.$sessKey.''])){
			
		tpReq('head');
     
			require_once 'libraries/themes/login/incorrect_view.php';
			
		tpReq('foot');		
		
		}else{
		
		header('Location: '.ROOT.'tp-Dashboard');
			
			}
		
		}		
		
}