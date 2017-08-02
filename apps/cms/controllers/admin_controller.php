<?php

class admin{
    
    
    // Routs the Login Page(s)
    public function index(){
        global $sessKey;
        if(!isset($_SESSION[''.$sessKey.''])){

        tpReq('head');

            require_once 'libraries/themes/login/login_view.php';

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

                require_once 'libraries/themes/login/incorrect_view.php';

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

            require_once 'libraries/themes/login/header.php';

                require_once 'libraries/themes/login/dash_view.php';

            require_once 'libraries/themes/login/footer.php';		

        }
	
	
    }	
    
    
	// Routs the Page Edit Page(s)
    public function pages( $nav = '' ){
        global $sessKey;
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
    
    
    // Routs the Post Edit Page(s)
    public function post( $nav = '' ){
        global $sessKey;
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
    
    
    // Routs the Image Edit Page(s)
    public function image(){
        global $sessKey;
        if(!isset($_SESSION[''.$sessKey.''])){

            header('Location: '.ROOT.'tp-incorrect');

        }else{

            require_once 'libraries/themes/login/header.php';

                require_once 'libraries/themes/login/dash_image.php';

            require_once 'libraries/themes/login/footer.php';		

        }
	
	}	
    
    
    // Routs the Album Edit Page(s)
    public function album(){
            global $sessKey;
            if(!isset($_SESSION[''.$sessKey.''])){

                header('Location: '.ROOT.'tp-incorrect');

            }else{

                require_once 'libraries/themes/login/header.php';

                    require_once 'libraries/themes/login/dash_albumUpdate.php';

                require_once 'libraries/themes/login/footer.php';		

            }
    }	 
    
    
    // Routs the Settings Page(s)
    public function settings(){
        global $sessKey;
        if(!isset($_SESSION[''.$sessKey.''])){

            header('Location: '.ROOT.'tp-incorrect');

        }else{

            require_once 'libraries/themes/login/header.php';

                require_once 'libraries/themes/login/dash_settings.php';

            require_once 'libraries/themes/login/footer.php';		

        }
	}	  
    
    
    // Routs the Prodets Edit Page(s)
    public function products(){
            global $sessKey;
            if(!isset($_SESSION[''.$sessKey.''])){

                header('Location: '.ROOT.'tp-incorrect');

            }else{

                require_once 'libraries/themes/login/header.php';

                    require_once 'libraries/themes/login/dash_product.php';

                require_once 'libraries/themes/login/footer.php';		

            }
        }	            
}