<?php

class products{

	public function index($nav = ''){

        tpReq('head');
		
            if($nav == ''){

            tpView('products','product');

            }
        
            if($nav == 'HomeGrade'){

            tpView('products','homeGrade');

            }
        
            if($nav == 'HospitalGrade'){

            tpView('products','hospGrade');

            }
        
            if($nav == 'Accessories'){

            tpView('products','access');

            }
        
            if($nav == 'AccessoriesOrder'){

            tpView('products','order');

            }
        
            $brand = array('Ameda','Ardo','Freemie','Hygeia','Lansinoh','Medela','Spectra','Nuroo');
            foreach($brand as $brands){

                if($nav == $brands){

                tpView('products','brand');
                    
                }
        

            }
	
        tpReq('foot');
	}
    

}