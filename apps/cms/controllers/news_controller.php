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
			
		}else{
			
			require_once 'libraries/themes/'.theme().'/views/news/news_singleView.php';
			
			}
		
		tpReq('foot');
	
	}
	

}