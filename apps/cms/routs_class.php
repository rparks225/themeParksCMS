<?php

class router {
    
    protected function route($folder,$template){
        tpReq('head');
            tpView($folder,$template);
        tpReq('foot');
    }
    
    protected function adminRoute($template){
        global $sessKey;
        if(!isset($_SESSION[''.$sessKey.''])){
            header('Location: '.ROOT.'tp-incorrect');
        }else{
            tpAdminInc('header');
                tpAdminInc($template);
            tpAdminInc('footer');		
        }	
    }
    
    protected function loginRoute($template){
        global $sessKey;
        if(!isset($_SESSION[''.$sessKey.''])){
            tpReq('head');
                tpAdminInc($template);
            tpReq('foot');	
        }else{
            header('Location: '.ROOT.'tp-Dashboard');
        }
    }
    
}