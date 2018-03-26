<?php

class blog{        
       public function index(){
           //Routs the Blog Main Page
            tpReq('head');
                tpView('news','news');
            tpReq('foot');
        }

        public function post( $nav = '' ){
            //Routs the Blog Single Post
            tpReq('head');
                if( !empty($nav) ){ tpView('news','newsSingle'); }
                else{ header('Location: '.ROOT.'page/404'); }
            tpReq('foot');
        }    
}