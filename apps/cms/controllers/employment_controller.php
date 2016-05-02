<?php

		
		
class employment{
	
	public function index( $nav = ''){
		
   	 tpReq('head');   
	 
	 if($nav == ''){
			
		   tpView('employment','employment');
		   
	 }else{	 
			
			tpView('employment','job',$nav);
		 
		 }
				  
      tpReq('foot'); 
			
	}

}