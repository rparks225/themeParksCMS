<?php

class employment{	
        public function index(){
            //Routs the Employment Main Page
           tpReq('head');   
                tpView('employment','employment');
           tpReq('foot'); 
         }
    
        public function job( $nav = '' ){
            //Routs the Employment Single Job Post
            tpReq('head'); 
                if(!empty($nav)){
                    tpView('employment','job');
                }else{
                    header('Location: '.ROOT.'page/404');
                }
            tpReq('foot'); 
        }
}