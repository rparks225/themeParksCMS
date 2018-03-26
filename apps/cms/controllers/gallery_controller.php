<?php

class gallery{
	
	public function index(){
        //Routs the Gallery Main Page
                global $sName;
                $sort = false;
                $sessKey = md5($_SERVER['SERVER_ADDR'].' - '.$sName.'');
                        if(isset($_SESSION[$sessKey])){
                            global $style;
                            $sort = 'id="sort"';
                            $style = '
                              #sort .sOrd{ 
                                  cursor:move;	
                                  border:dashed 2px rgba(150,150,150,.5);
                                  }
                            ';
                        };
              tpReq('head');	 
                     tpView('gallery','gallery');
              tpReq('foot');			
	}
	

    public function album($nav = ''){   
        //Routs the Gallery Album Page
        global $sName;
        $sort = false;
        $sessKey = md5($_SERVER['SERVER_ADDR'].' - '.$sName.'');
        if(isset($_SESSION[$sessKey])){
            global $style;
            $sort = 'id="sortable"';
            $style = '
                      #sortable{ 
                          cursor:move;	
                          background:grey;	  
                          }
                      ul #sortable li {
                          height:200px;
                          padding: 10px; 
                          font-size: 4em; 
                          overflow:hidden;
                          position:relative;
                          cursor:move;
                          border:dashed 2px rgba(150,150,150,.5);
                          }
                    ul #sortable li a img{
                        position:relative;
                        margin-top:-65px;
                        } 	  
                    #sortable li:hover { 
                          cursor:move;
                          }	  
                    ul #sortable li a:hover{ 
                         cursor:move;
                          }	  
                    ul #sortable{	
                        cursor:move;
                        }	
                    ';
        };

             tpReq('head');
                     if(!empty($nav)){
                         tpView('gallery','images');
                     }else{
                         header('Location: '.ROOT.'page/404');
                     }
             tpReq('foot');
        
       }

}