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
	
public function pages( $nav = '' ){

global $sName;
	
	$sessKey = md5($_SERVER['SERVER_ADDR'].' - '.$sName.'');
	
	if(!isset($_SESSION[''.$sessKey.''])){

		header('Location: '.ROOT.'tp-incorrect');
		
		}else{
			
			require_once 'libraries/themes/login/header.php';

                if($nav == ''){
                    
                    require_once 'libraries/themes/login/dash_page.php';
                    
                }else if(links() == ROOT.'tp-Pages-Update-'.title(2).''){

                    require_once 'libraries/themes/login/dash_pgUpdate.php';
                    
                }else if ($nav != ''){

                    require_once 'libraries/themes/login/dash_page.php';
                }
			
			require_once 'libraries/themes/login/footer.php';		
			
			}
	
	
	}	
    
public function post( $nav = '' ){

global $sName;
	
	$sessKey = md5($_SERVER['SERVER_ADDR'].' - '.$sName.'');
	
	if(!isset($_SESSION[''.$sessKey.''])){

		header('Location: '.ROOT.'tp-incorrect');
		
		}else{
			
			require_once 'libraries/themes/login/header.php';
        
                if($nav == ''){
                    
                    require_once 'libraries/themes/login/dash_post.php';
                    
                }else{
                    
                    require_once 'libraries/themes/login/dash_pstUpdate.php';
                    
                }
			
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
    
public function album(){

        global $sName;

        $sessKey = md5($_SERVER['SERVER_ADDR'].' - '.$sName.'');

        if(!isset($_SESSION[''.$sessKey.''])){

            header('Location: '.ROOT.'tp-incorrect');

        }else{

            require_once 'libraries/themes/login/header.php';

                require_once 'libraries/themes/login/dash_albumUpdate.php';

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
		
}