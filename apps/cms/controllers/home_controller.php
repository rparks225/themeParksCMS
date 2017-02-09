<?php

class home{

	public function home( $nav = '' ){
		
        tpReq('head');
		
			tpView('home','home');
		
		tpReq('foot');
		
	
	}
    

}