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
				  
					  <div class="row">';
                
                if(title(2) == 'Abbott-House' || title(2) == 'Bostonian' || title(2) == 'Devereux-House' || title(2) == 'Rosewood'){

                         $page = array(
                        ''.title(2).'-skilled-nursing-home-rehabilitation'=>''.implode(' ',explode('-',title(2))).'',
                        ''.title(2).'-skilled-programs-services'=>'Programs/Services',
                        ''.title(2).'-leadership-team'=>'Leadership',
                        ''.title(2).'-skilled-nursing-photo-gallery'=>'Photo Gallery',
                        ''.title(2).'-virtual-tours'=>'Virtual Tours',
                        ''.title(2).'-Alliance'=>'Alliance Health',
                        ''.title(2).'-contact-referrals'=>'Contact and Referrals',
                        );

                }else if(title(2) == 'Sugar-Hill'){
                    
                     $page = array(
                        ''.title(2).'-assisted-living-home-rehabilitation'=>''.implode(' ',explode('-',title(2))).'',
                        ''.title(2).'-assisted-living-programs-services'=>'Programs/Services',
                        ''.title(2).'-leadership-team'=>'Leadership',
                        ''.title(2).'-assisted-living-photo-gallery'=>'Photo Gallery',
                        ''.title(2).'-virtual-tours'=>'Virtual Tours',
                        ''.title(2).'-contact-referrals'=>'Contact and Referrals',
                        );
                    
                }else if(title(2) == 'Hancock-Park'){

                         $page = array(
                        ''.title(2).'-skilled-nursing-home-rehabilitation'=>''.implode(' ',explode('-',title(2))).'',
                        ''.title(2).'-skilled-programs-services'=>'Programs/Services',
                        ''.title(2).'-leadership-team'=>'Leadership',
                        ''.title(2).'-skilled-nursing-photo-gallery'=>'Photo Gallery',
                        ''.title(2).'-virtual-tours'=>'Virtual Tours',
                        ''.title(2).'-Assisted-Living-Residency'=>'Assisted Living Residency',
                        ''.title(2).'-contact-referrals'=>'Contact and Referrals',
                        );
                    
                    }else{

                        $page = array(
                        ''.title(2).'-skilled-nursing-home-rehabilitation'=>''.implode(' ',explode('-',title(2))).'',
                        ''.title(2).'-skilled-programs-services'=>'Programs/Services',
                        ''.title(2).'-leadership-team'=>'Leadership',
                        ''.title(2).'-skilled-nursing-photo-gallery'=>'Photo Gallery',
                        ''.title(2).'-virtual-tours'=>'Virtual Tours',
                        ''.title(2).'-contact-referrals'=>'Contact and Referrals',
                        );

                    };
                
                        tpBlock('sideBar');
                        secNav($page);
					  
						  echo '<div class="col-md-9">
								   
									  ';

                                $title = title(2);
                                global $pages;

                                    $add = $pages[$title]['add'];
                                    $phone = $pages[$title]['phone'];              

                                    $trail = array(''.$add.'',''.$phone.'');

                                    breadcrumbs($trail);
            
                                     $query = 'SELECT * FROM `gallery` WHERE `Gallery` LIKE \''.$nav.'\'';
                                     $block = 'title';
                                     $images = new model();
                                     $images->query($query,$block);

									  echo'
                                      <hr>
								  								  
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
							  
							  <a class="col-md-offset-5 col-md-2" href="javascript:history.go(-1)">&larr; Back</a>
						  
						  </div>
                          <br><br><br>
					
					  </div>
				   
				  </div>
			   
			</div>
			<!--Close Content-->
			
			';
	
		 tpReq('foot');
				  
	  }

}