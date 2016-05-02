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
			 
				 <div class="row-fluid">
                 
                     <div class="col-md-8">
                     
                         <br><br><br>
                             
                             <h1>Gallery</h1>
                           
                         <!--Open Span-->
                            <span<?php if(isset($_SESSION[''.$sessKey.''])){ echo ' id="sort"'; }; ?>>
                                 <?php
        
                                  $query = 'SELECT * FROM  `gallery` ORDER BY  `gallery`.`Order` ASC LIMIT 0 , 30';
								  $block = 'galName';
								  $title = new model();
								  $title->query($query,$block);
								  
                               ?>
                               
                           </span>
                         <!--Close Span-->
                               
                         </div>
                         
                         <br><br><br>
                         <?php include 'libraries/themes/'.theme().'/html_blocks/sideBar.php'; ?>
				 
                     
					 </div>
				 
				 </div>
			 
		 </div>
    
    