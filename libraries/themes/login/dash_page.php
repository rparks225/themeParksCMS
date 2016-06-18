<?php 

$vars = array('id','sUrl','dbName','sCaptcha','cmsPath','eePath','emailHost','emailAuth','emailUser','emailPass','emailEnc','emailPort','emailFrom','emailName','emailAdd','emailReply','eReplyTitle');

    foreach($vars as $var){

        global $$var;

    }

$site = "{$dbName}"; 

?>

    <!-- Open Content area-->

    <button class="waves-effect waves-red btn modal-trigger" data-target="addPage" class="btn modal-trigger">Add new page</button>
    <br/>
    <br/>

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

        <?php tpAdmin('page_upDate'); ?>

            <div class="table-responsive">


                <table class="responsive-table highlight">
                    
                    <thead>
                    
                        <tr class="active" style="color:black;">
                            <th>Page</th>
                            <th>Editable</th>
                            <th>Page Title</th>
                            <th>Meta Keywords</th>
                            <th>Meta Desciption</th>
                            <th>Action</th>
                        </tr>    
                    
                    </thead>

                    <tbody>

                            <?php 
				      
					  $location = 'page';		 
					  $block = "tableRow2";
					  $query = "SELECT * FROM `page` ORDER BY `page`.`Editable` ASC ";
					  $method = 'edited';
					   
					  //query's the db 
					  $table = new admin_model();
                      $table->query($query,$block);
					  
					  //deletes records
					  $delete = new delete();
					  $delete->del($location);
					  
					  ?>

                    </tbody>

                </table>

            </div>

            <br>
            <br>
            <!-- Close Content area-->