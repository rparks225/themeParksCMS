<?php

class contact{
	public function index( $nav = '' ){     
        //Routs the Contact Main Page
           tpReq('head');			
                tpView('contact','contact');
            tpReq('foot');
        }
}