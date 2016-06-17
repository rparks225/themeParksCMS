<?php

class facility{
    
    public $pages;
    
    public function __construct(){
        
        $pages = array(
        'Abbott-House','Hancock-Park','Devereux-House','Rosewood','Bay-Path','Colonial','Harbor-House','John-Scott-House','Mayflower-Place','The-Bostonian','Brighton-House','Park-Place','Craneville-Place','Springside','Sugar-Hill'   
        );
        
        $this->pages = $pages;
        
    }

	public function index($nav = ''){

        tpReq('head');
		
            if($nav == ''){

            tpView('facilities','facility');

            }
        
        foreach($this->pages as $page){
            
            if($nav == $page){
                tpView('facilities','landing');
            }
            
        }
	
        tpReq('foot');
	}
    
    public function programs($nav = ''){
        
        tpReq('head');
        
        foreach($this->pages as $page){
            
            if($nav == $page){
                
                tpView('facilities','programs');
                
            }
            
        }
        
        tpReq('foot');
        
    }
    
    public function leader($nav = ''){
        
        tpReq('head');
        
        foreach($this->pages as $page){
            
            if($nav == $page){
                
                tpView('facilities','leader');
                
            }
            
        }
        
        tpReq('foot');
        
    }
    
    public function tour($nav = ''){

        tpReq('head');

        foreach($this->pages as $page){

            if($nav == $page){

                tpView('facilities','tour');

            }

        }

        tpReq('foot');

    }
    
    public function assisted($nav = ''){

        tpReq('head');

        foreach($this->pages as $page){

            if($nav == $page){

                tpView('facilities','assisted');

            }

        }

        tpReq('foot');

    }
    
    public function contact($nav = ''){
        
        tpReq('head');
        
        foreach($this->pages as $page){
            
            if($nav == $page){
                
                tpView('facilities','contact');
                
            }
            
        }
        
        tpReq('foot');
    }

}