<?php 

$vars = array('id','sUrl','dbName','sCaptcha','cmsPath','eePath','emailHost','emailAuth','emailUser','emailPass','emailEnc','emailPort','emailFrom','emailName','emailAdd','emailReply','eReplyTitle');

    foreach($vars as $var){

        global $$var;

    }
    
$site = "{$dbName}";  
?>
<!-- Open Content area-->
      
       <?php 
		  //Heading
		  $query = 'SELECT * FROM `page` WHERE `Title` LIKE "'.title().'"';
		  $block = 'heading';
		  $name = new model();
		  $name->query($query,$block);
		  
		   ?>
            
          <hr/><br>
          
          
     <div class="col-md-4 col-xs-12" style="padding:0;">
                  
               <div class="col-md-12 admin" style="text-align:left;border:1px solid grey;border-radius:10px;">
                  <h3 style="text-align:left;">Change Theme</h3>
              
                 <hr>
                                          
               <div><strong>Current Theme:</strong><span> <?php echo theme(); ?> theme</span></div> 
              
              <form method="post">
             
              <div class="form-group" style="text-align:left;margin-left:0px;">
                       
                       <select class="form-control col-md-12" name="theme">
                           <option value="default">Select</option>
                           
                           <?php
    
                              $directory = 'libraries/themes';
                              $blocks = 'theme';
							  $other = false;
                              direct($directory,$blocks,$other);
                           
                           ?>
                           
                       </select>
                       
                        <div class="form-group">
                        
                           <br><br>
                     
                         <input type="submit" class="btn btn-primary" name="changed" value="Submit" />
                   
                        </div>
                   
                </div> 
              
              </form>
              
				  <?php
				  
				   $method = 'changed';
				   $location = 'Theme';
				   
                  //updates the record
					  if(isset($_POST[''.$method.''])){
							  
						  if(isset($_POST['theme'])){
							 
							  $theme = addslashes($_POST['theme']);
							  
							  $query = 'UPDATE `'.$site.'`.`'.$location.'` SET `Theme` = \''.$theme.'\'';
						  
						   }
					   
					  };
					  
					  $update = new update();
					  $update->uped($location,$query,$method);
					  ?>
                   
                   <hr/>
              
                  </div>         
                                                    
              </div>
              
               <div class="col-md-8 col-xs-12">
                                    
                        <div class="col-md-12 admin" style="border:1px solid grey;border-radius:10px;">
                        
                            <h3>Quick Blog Post</h3>
                            
                                <hr><br>                            
									<?php
									
									$query = "SELECT * FROM post LIMIT 1";
									$block = 'insert_form';
									$method = 'inserted';
                                    $location = 'post';
									
									$post = new model();
									$post->query($query,$block);
									
									if(isset($_POST[''.$method.''])){
										
										if(isset($_POST['id'])){
											
											$id = mysqli_real_escape_string($_POST['id']);
											$title = addslashes($_POST['title']);
											$img = addslashes($_POST['img']);
											$script = addslashes($_POST['post']);
											$Date = addslashes($_POST['date']);
											
											$query = 'INSERT INTO `'.$site.'`.`'.$location.'` (`Id`, `Title`, `Image`, `Description`, `Date`) VALUES (NULL, \''.$title.'\', \''.$img.'\', \''.$script.'\', \''.$Date.'\')';
														  
														  }
													  
													  };

                                    $insert = new update();
									$insert->uped($location,$query,$method);
                                    
                                    ?>
                        
                    </div>
               
         </div>
<div class="clearfix">&nbsp;</div>
<div class="clearfix">&nbsp;</div>
      
<!-- Close Content area-->

