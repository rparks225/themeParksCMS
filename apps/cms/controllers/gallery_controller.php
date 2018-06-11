<?php

class gallery extends router{
    //Routes the Gallery and Single galleyr pages
    function __construct(){
        global $sName;
        $sort = false;
        $sessKey = md5($_SERVER['SERVER_ADDR'].' - '.$sName.'');
        if(isset($_SESSION[$sessKey])){
            global $style;
            $sort = 'id="sortable"';
            $sorted = 'id="sort"';
            $style = '
                      #sortable{ 
                          cursor:move;	  
                          }
                      ul#sortable li {
                          height:200px;
                          padding: 10px; 
                          font-size: 4em; 
                          overflow:hidden;
                          position:relative;
                          cursor:move;
                          border:dashed 2px rgba(150,150,150,.5);
                          }
                    ul#sortable li a img{
                        position:relative;
                        margin-top:-65px;
                        } 	  
                    #sortable li:hover { 
                          cursor:move;
                          }	  
                    ul#sortable li a:hover{ 
                         cursor:move;
                          }	  
                    ul#sortable{	
                        cursor:move;
                        }	
                        #sort.sOrd{ 
                                  cursor:move;	
                                  border:dashed 2px rgba(150,150,150,.5);
                                  }
                    ';
        };
    }
	
    public function index( $nav = '' ) { 
        //
        if( !empty($nav) ){ $this->route('gallery','images'); }else{ $this->route('gallery','gallery');  };
    }

}