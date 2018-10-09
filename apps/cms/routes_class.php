<?php

class router {
    
    protected function route( $folder, $template ){
        tpReq('head');
            tpView( $folder, $template );
        tpReq('foot');
    }
    
    protected function adminRoute($template){
        global $sessKey;
        if( isset( $_SESSION[''.$sessKey.'']) ){
            $sec = new secPage();
            if( $sec->authorize() == 'true' ){
                tpAdminInc('header');
                    tpAdminInc($template);
                tpAdminInc('footer');	
            }else{
                tpAdminInc('header');
                    echo '<h2>You are not authorized to use this app. Redirect in 5 seconds</h2>';
                    echo '<script> setTimeout(function () { 
                    window.location.href = "includes/admin/_ee/sess-destroy.php"; }, 5000);</script>';
                tpAdminInc('footer');	
            }
        }else{
            header('Location: '.ROOT.'tp-incorrect');
        }	
    }
    
    protected function loginRoute($template){
        global $sessKey;
        if( isset( $_SESSION[''.$sessKey.'']) ){
            header('Location: '.ROOT.'tp-Dashboard');
                
        }else{
            tpAdmin('loginHeader');
                tpAdminInc($template);
            tpAdmin('loginFooter');	
        }
    }
    
}