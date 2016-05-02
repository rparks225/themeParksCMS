<?php

class contact{

	public function index( $nav = '' ){
		
		
		tpReq('head');
		
		
		if($nav == ''){
			
			tpView('contact','contact');
			
			}else if($nav == 'survey'){
				
				tpView('contact','survey');
				
				}else if($nav == 'rental'){
                
                tpView('contact','rental');
                
                }else if($nav == 'easyOrder'){
                
                tpView('contact','easyOrder');
                
                }
		
		
		tpReq('foot');

	}
	

}