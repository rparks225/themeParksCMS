<?php	
		
class page{
	
	public function index( $nav = ''){
		
   	 tpReq('head');
	 
	 if($nav == ''){
			
		   //require_once 'libraries/themes/'.theme().'/html_blocks/404.php';
		   header('Location: http://localhost/cesi/404');
		   
	 }else{
		 
		 		
			$query = 'SELECT * FROM page WHERE Title LIKE \''.$nav.'\' ';
			$block = 'single';
				  
			$page = new model();
			$page->pages($query, $block);	
		 
		 }
				  
	  tpReq('foot');
			
	}

}