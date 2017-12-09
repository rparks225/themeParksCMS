<?php

class contact{

	public function index( $nav = '' ){
        
               tpReq('head');				
                        if($nav == ''){                                
                                tpView('contact','contact');
                            }else{
                                header('Location: '.ROOT.'404');
                            }        
                tpReq('foot');

        }

}