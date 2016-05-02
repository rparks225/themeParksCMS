<?php 

require_once 'includes/db.php';
require_once 'includes/settings.php';

$vars = array('id', 'sName','sUrl','dbName','sCaptcha','cmsPath','eePath','emailHost','emailAuth','emailUser','emailPass','emailEnc','emailPort','emailFrom','emailName','emailAdd','emailReply','eReplyTitle');

    foreach($vars as $var){

        global $$var;

    };

$sessKey = md5($_SERVER['SERVER_ADDR'].' - '.$sName.'');
?>
   <div class="cont">
		 
			 <div class="container">
			 
				 <div class="row">
                 
                     <div class="col-md-8">
                     
                         <br><br><br>
                             
                             <h2 class="fancy">Gallery</h2>
                         
                         <br>
                           
                            <span<?php if(isset($_SESSION[''.$sessKey.''])){ echo ' id="sort"'; }else{}; ?>>
                                
                                 <?php
        
                                  $query = 'SELECT * FROM  `gallery` ORDER BY  `gallery`.`Order` ASC LIMIT 0 , 30';
								  $block = 'galName';
								  $title = new model();
								  $title->query($query,$block);
								  
                               ?>
                               
                           </span>
                               
                         </div>
                         
                         <br><br><br>
                     
                         <?php tpBlock('sideBar'); ?>
				 
                     
					 </div>
				 
				 </div>
			 
		 </div>
    
    