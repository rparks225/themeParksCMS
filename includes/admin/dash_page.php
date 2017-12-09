<?php 

$vars = array('id','sUrl','dbName','sCaptcha','cmsPath','eePath','emailHost','emailAuth','emailUser','emailPass','emailEnc','emailPort','emailFrom','emailName','emailAdd','emailReply','eReplyTitle');

    foreach($vars as $var){

        global $$var;

    }

$site = "{$dbName}"; 

?>

    <!-- Open Content area(<?php echo $nav; ?>)-->

<div class="col s3">
    <button class="waves-effect waves-red btn modal-trigger" data-target="addPage" class="btn modal-trigger">Add new page</button>
</div>

<div class="col s9">
    
</div>    
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
                        
                          $nav = title(2);
                        
                              if($nav == 'pages'){

                                  $nav = 0;
                                  $nums = '';
                                  $limit = '';

                              }else if($nav == 1){ 

                                  $nav = 0;
                                  $limit = ",10";
                                  $nums = 'LIMIT '.$nav;

                              }else{

                                  $nav = --$nav;
                                  $limit = ",10";
                                  $nav = $nav*10+(0);
                                  $nums = 'LIMIT '.$nav;
                              }


                          $location = 'page';		 
                          $block = "tableRow2";
                          $query = "SELECT * FROM `page` ORDER BY `page`.`Editable` ASC $nums $limit";
                          $method = 'edited';

                          //query's the db 
                          $table = new admin_model();
                          $table->query($query,$block);

                          //deletes records
                          $delete = new delete();
                          $delete->del($location,false);

					  ?>
                        
                    </tbody>

                </table>
                
            </div>

            <div class="clearfix"></div>

                    <div class="col s2">&nbsp;</div>

            <div class="col s8" style="text-align:center;">

                <!--Start Pageinate-->
                    <?php

                    $table = 'page';
                    $limit = 10;
                    $currentPage = 'tp-Pages';
                    paginate($table,$limit,$currentPage);

                    ?>
                <!--Close Pageinate-->

            </div>

            <br>
            <br>
            <!-- Close Content area-->