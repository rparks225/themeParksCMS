<?php

class news{

	public function index(){
		
		
		tpReq('head');
		
		
			tpInc('404');
		
		
		tpReq('foot');
	
	}
	
	public function Posts($nav = ''){
		
		
		tpReq('head');
		
		if($nav == ''){
			
			global $nav;
			tpView('news','news');
			
        }else if($nav == 'accreditations' || $nav == 'community'){
            
            tpView('news','accred');
            
        }else{
			
            $links = array(
                'news',
                'accreditations',
                'community'
            );
            
            if(title() == $links){
                echo 'Here';
            }
            
			require_once 'libraries/themes/'.theme().'/views/news/news_singleView.php';
			
			}
		
		tpReq('foot');
	
	}
	

}