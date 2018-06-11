<?php
$page = title();
class home extends router{
    
   public $page;
    //Routes the tHe Home Page
    public function index( $nav = '' ){ 
        if( !empty($nav) ){ $this->route('home','single'); }else{    $this->route('home','home');  }
    } 
    
}