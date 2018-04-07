<?php

class blog extends router{        
    
       //Routes the Blog and Single Blog Posts
       public function index(){ $this->route('news','news'); }
       public function post( $nav = '' ){ $this->route('news','newsSingle'); }    
    
}