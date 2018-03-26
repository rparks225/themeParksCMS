<?php	
		
class page{	
    public function index(){
        //Routs All the Single Page
         tpReq('head');
            tpView('pages','single');
          tpReq('foot');
    }
}