<?php

class employment extends router{	
    
        //Routes the Employment Page
        public function index(){ $this->route('employment','employment'); }
        public function job( $nav = '' ){ $this->route('employment','job'); }
    
}