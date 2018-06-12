<?php

class admin extends router{
    
// Routs the Login Page(s)
public function index(){ $this->loginRoute('login_view'); }

// Routs the Incorrect Login Page(s)
public function incorrect(){ $this->loginRoute('incorrect_view'); }		    
    
// Routs the Dashboard Page(s)
public function dashboard(){ $this->adminRoute('dash_view'); }	

// Routs the Navigation Page(s)
public function users(){ $this->adminRoute('dash_user'); }	
    
// Routs the Image Edit Page(s)
public function image(){ $this->adminRoute('dash_image'); }	

// Routs the Image Edit Page(s)
public function security(){ $this->adminRoute('dash_security'); }	

// Routs the Album Edit Page(s)
public function album(){ $this->adminRoute('dash_albumUpdate'); }	 

// Routs the Settings Page(s)
public function settings(){ $this->adminRoute('dash_settings'); }	  

// Routs the Prodets Edit Page(s)
public function products(){ $this->adminRoute('dash_product'); }	 
    
// Routs the Navigation Page(s)
public function menu($nav = ''){ 
            if( $nav == title(2) ){ $this->adminRoute('dash_menuUpdate'); }
            else{ $this->adminRoute('dash_menu'); } }	
    
// Routs the Page Edit Page(s)
public function pages( $nav = '' ){
            if($nav == '') {  $this->adminRoute('dash_page'); }
            else if( links() == ROOT.'tp-Pages-Update-'.title(2).'' ) {    $this->adminRoute('dash_pgUpdate');   }
            else if ( $nav != '' ) {   $this->adminRoute('dash_page'); } }	
    
    
// Routs the Post Edit Page(s)
public function post( $nav = '' ){
            if( $nav == '' ){ $this->adminRoute('dash_post'); }
            else{ $this->adminRoute('dash_pstUpdate'); } }	
    
}