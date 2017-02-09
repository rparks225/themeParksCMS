<?php 
$sessKey = md5($_SERVER['SERVER_ADDR'].' - cesi');
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
    
    