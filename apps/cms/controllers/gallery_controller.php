<?php

class gallery{
	
	public function index(){
        
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
	
	public function images($nav = ''){
    
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
		 
		 echo '
		 
		 <!--Open Content-->
		 <div class="cont">
		
				  <div class="container">
				  
					  <div class="row-fluid">';
					  
						  echo '<div class="col-md-8">
							  
								  <br><br><br>
								   
									  ';

                                     $query = 'SELECT * FROM `gallery` WHERE `Gallery` LIKE \''.$nav.'\'';
                                     $block = 'title';
                                     $images = new model();
                                     $images->query($query,$block);

									  echo'
								  								  
								  <ul style="list-style:none;text-align:left;padding:0;">
								 
									 <div '.$sort.'>
								 
								 ';								 								 
								  								
								$query = 'SELECT * FROM `images` WHERE `Album` LIKE \''.$nav.'\' ORDER BY `images`.`Order` ASC ';
								$block = 'galleryImage';
								$images = new model();
								$images->query($query,$block);
								   
							  echo ' 							      
							  
								</div>
							 
							  </ul>
								  
								  <div class="clearfix"></div>
								  <br><br>
								   <span class="stuff"></span>
							  
							  <a class="col-md-offset-5 col-md-2" href="'.ROOT.'Gallery">&larr; Back</a>
						  
						  </div>
                          <br><br><br>
                          ';
                                  
                           tpBlock('sideBar');
					  
                            echo '
					
					  </div>
				   
				  </div>
			   
			</div>
			<!--Close Content-->
			
			';
	
		 tpReq('foot');
				  
	  }

}