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
		  $heading = new model();
		  $heading->query($query,$block);		  
		   ?>

           <button class="btn btn-primary" data-toggle="modal" data-target="#addPage">Add new page</button><br>

          <hr/><br>
                                   
              
               <?php 
						$method = 'inserted';
						$location = 'page';
						$query = false;	
								
						if(isset($_POST[''.$method.''])){
							
							if(isset($_POST['id'])){
								
								$id = addslashes($_POST['id']);
								$name = addslashes($_POST['name']);
								$title = addslashes($_POST['title']);
								$key = addslashes($_POST['key']);
								$script = addslashes($_POST['script']);
								$html = addslashes($_POST['html']);
								$edit = addslashes($_POST['editable']);
								
								  
								$query = 'INSERT INTO `'.$site.'`.`'.$location.'` (`Id`, `Title`, `Editable`, `Html`, `Description`, `KeyWords`, `Heading`) VALUES (NULL, \''.$name.'\', \''.$edit.'\', \''.$html.'\', \''.$script.'\', \''.$key.'\', \''.$title.'\')';
											  
											  }
										  
										  };

						$addPage = new update();
						$addPage->uped($location,$query,$method);
                   
                   ?>
                   
                   <?php include 'libraries/themes/'.theme().'/html_blocks/page_upDate.php'; ?>
          
            <div class="table-responsive">
                

                  <table class="table table-hover">
                  
                      <tbody>
                  
                      <tr class="active" style="color:black;">
                          <td>Page</td>
                          <td>Editable</td>
                          <td>Page Title</td>
                          <td>Meta Keywords</td>
                          <td>Meta Desciption</td>
                          <td>Edit</td>
                          <td>Delete</td>
                      
                      <?php 
						
					  $location = 'page';		 
					  $block = "tableRow2";
					  $query = "SELECT * FROM `page` ORDER BY `page`.`Editable` ASC ";
					  $method = 'edited';
					   
					  //query's the db 
					  $table = new model();
                      $table->query($query,$block);
					  
					  //deletes records
					  $delete = new delete();
					  $delete->del($location);
					  
					  
					  //updates the record
					  if(isset($_POST[''.$method.''])){
							  
						  if(isset($_POST['id'])){
							 
							  $id = addslashes($_POST['id']);
							  $name = addslashes($_POST['name']);
							  $title = addslashes($_POST['title']);
							  $key = addslashes($_POST['key']);
							  $script = addslashes($_POST['script']);
							  $html = addslashes($_POST['html']);
							  $edit = addslashes($_POST['editable']);
							  
							  $query = 'UPDATE `'.$site.'`.`'.$location.'` SET `Title` = \''.$name.'\', `Description` = \''.$script.'\', `KeyWords` = \''.$key.'\', `Heading` = \''.$title.'\', `Html` = \''.$html.'\', `Editable` = \''.$edit.'\' WHERE `'.$location.'`.`Id` = \''.$id.'\'';
						  
						   }
					   
					  };
					  
					  $update = new update();
					  $update->uped($location,$query,$method);
					  
					  ?>
                      
                      </tbody>
                      
                  </table>
                
            </div>
            
<br><br>
<!-- Close Content area-->

