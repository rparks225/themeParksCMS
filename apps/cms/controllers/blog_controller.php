<?php

class blog extends router{        
    
       //Routes the Blog and Single Blog Posts
       public function index( $nav = '' ){ 
           if( !empty($nav) ){ $this->route('news','newsSingle'); }else{ $this->route('news','news'); }
       }
    
}