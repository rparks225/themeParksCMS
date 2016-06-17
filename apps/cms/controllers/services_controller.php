<?php
	
class services{
	
	public function index( $nav = ''){
		
        $v = array('SkilledNursing','Rehab','AssistedLiving','RespiteCare','Hospice','SpecialtyCare','DietNutrition','FacilityAmenities','DischargePlanning','Services');
        
   	 tpReq('head');   
	 
	 if($nav == ''){
			
		   tpView('services','services');
		   
	 }
        
        foreach($v as $pages){
            
            if($nav == $pages){	 
			
                  tpView('services','int');
         
             }
            
        }
				  
      tpReq('foot'); 
			
	}

}