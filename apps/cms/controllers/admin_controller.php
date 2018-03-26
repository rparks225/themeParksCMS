<?php

class admin{
    
    // Routs the Login Page(s)
    public function index(){
        global $sessKey;
        if(!isset($_SESSION[''.$sessKey.''])){
            tpReq('head');
                    require_once 'includes/admin/login_view.php';
            tpReq('foot');	
        }else{
            header('Location: '.ROOT.'tp-Dashboard');
        }
    }
    
    
    // Routs the Incorrect Login Page(s)
    public function incorrect(){
        global $sessKey;
        if(!isset($_SESSION[''.$sessKey.''])){
            tpReq('head');
                require_once 'includes/admin/incorrect_view.php';
            tpReq('foot');		
        }else{
            header('Location: '.ROOT.'tp-Dashboard');
        }
    }		    
		
    
	// Routs the Dashboard Page(s)
    public function dashboard(){
        global $sessKey;
        if(!isset($_SESSION[''.$sessKey.''])){
            header('Location: '.ROOT.'tp-incorrect');
        }else{
            tpAdminInc('header');
                tpAdminInc('dash_view');
            tpAdminInc('footer');		
        }	
    }	
    
    // Routs the Navigation Page(s)
    public function users(){
        global $sessKey;
        if(!isset($_SESSION[''.$sessKey.''])){
            header('Location: '.ROOT.'tp-incorrect');
        }else{
            tpAdminInc('header');
            tpAdminInc('dash_user');
            tpAdminInc('footer');		
        }	
    }	
    
    // Routs the Navigation Page(s)
    public function menu($nav = ''){
        global $sessKey;
        if(!isset($_SESSION[''.$sessKey.''])){
            header('Location: '.ROOT.'tp-incorrect');
        }else{
            tpAdminInc('header');
            
            if( $nav == title(2) ){
                tpAdminInc('dash_menuUpdate');
            }else{
                tpAdminInc('dash_menu');
            }
            
            tpAdminInc('footer');		
        }	
    }	
    
	// Routs the Page Edit Page(s)
    public function pages( $nav = '' ){
        global $sessKey;
        if(!isset($_SESSION[''.$sessKey.''])){
            header('Location: '.ROOT.'tp-incorrect');
        }else{
            tpAdminInc('header');
                if($nav == ''){
                    tpAdminInc('dash_page');
                }else if(links() == ROOT.'tp-Pages-Update-'.title(2).''){                    
                    tpAdminInc('dash_pgUpdate');                    
                }else if ($nav != ''){
                    tpAdminInc('dash_page');
                }
            tpAdminInc('footer');		
        }	
	}	
    
    
    // Routs the Post Edit Page(s)
    public function post( $nav = '' ){
        global $sessKey;
        if(!isset($_SESSION[''.$sessKey.''])){
            header('Location: '.ROOT.'tp-incorrect');
        }else{
            tpAdminInc('header');
                if($nav == ''){                    
                    tpAdminInc('dash_post');
                }else{                    
                    tpAdminInc('dash_pstUpdate');
                }
            tpAdminInc('footer');		
        }	
	}	
    
    
    // Routs the Image Edit Page(s)
    public function image(){
        global $sessKey;
        if(!isset($_SESSION[''.$sessKey.''])){
            header('Location: '.ROOT.'tp-incorrect');
        }else{
            tpAdminInc('header');
                tpAdminInc('dash_image');
            tpAdminInc('footer');		
        }	
	}	
    
    // Routs the Image Edit Page(s)
    public function security(){
        global $sessKey;
        if(!isset($_SESSION[''.$sessKey.''])){
            header('Location: '.ROOT.'tp-incorrect');
        }else{
            tpAdminInc('header');
                tpAdminInc('dash_security');
            tpAdminInc('footer');		
        }
    }	
    
    // Routs the Album Edit Page(s)
    public function album(){
            global $sessKey;
            if(!isset($_SESSION[''.$sessKey.''])){
                header('Location: '.ROOT.'tp-incorrect');
            }else{
                tpAdminInc('header');
                    tpAdminInc('dash_albumUpdate');
                tpAdminInc('footer');		
            }
    }	 
    
    
    // Routs the Settings Page(s)
    public function settings(){
        global $sessKey;
        if(!isset($_SESSION[''.$sessKey.''])){
            header('Location: '.ROOT.'tp-incorrect');
        }else{
            tpAdminInc('header');            
                tpAdminInc('dash_settings');
            tpAdminInc('footer');		
        }
	}	  
    
    
    // Routs the Prodets Edit Page(s)
    public function products(){
            global $sessKey;
            if(!isset($_SESSION[''.$sessKey.''])){
                header('Location: '.ROOT.'tp-incorrect');
            }else{
                tpAdminInc('header');                
                    tpAdminInc('dash_product');
                tpAdminInc('footer');		
            }
        }	 
    
}