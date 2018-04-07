<?php	
		
class page extends router{	
    
    //Routes the CMS Pages
    public function index(){ $this->route('pages','single'); }
    
}