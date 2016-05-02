<?php

class home{

	public function index(){
		
        if(links() == ROOT){
            
            header('Location: '.ROOT.'Home');
        }
        
        tpReq('head');
		
		
			tpView('home','home');
		
		
		tpReq('foot');
		
	
	}
    

}