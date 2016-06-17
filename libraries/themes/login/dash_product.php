<?php 

$vars = array('id','sUrl','dbName','sCaptcha','cmsPath','eePath','emailHost','emailAuth','emailUser','emailPass','emailEnc','emailPort','emailFrom','emailName','emailAdd','emailReply','eReplyTitle');

    foreach($vars as $var){

        global $$var;

    }

$site = "{$dbName}"; 

?>
<!-- Open Content area-->
          
		 <h1 style="text-align:left;" class="fancy">All Products</h1> 
            <div class="clearfix"></div>

           <button class="btn btn-primary" data-toggle="modal" data-target="#addPage">Add new product</button><br>

          <hr/><br>
                                   
              
               <?php 
						$method = 'inserted';
						$location = 'Products';
						$query = false;	
								
						if(isset($_POST[''.$method.''])){
							
							if(isset($_POST['id'])){
								
				              $id = addslashes($_POST['id']);
							  $company = addslashes($_POST['company']);
							  $prodName = addslashes($_POST['prodName']);
							  $Grade = addslashes($_POST['grade']);
							  $script = addslashes($_POST['script']);
							  $badge = addslashes($_POST['badges']);
							  $image = addslashes($_POST['image']);
								
								  
								$query = 'INSERT INTO `'.$site.'`.`'.$location.'` (`Id`, `Title`, `Description`, `Grade`, `Image`, `Badges`, `Company`) VALUES (NULL, \''.$prodName.'\', \''.$script.'\', \''.$Grade.'\', \''.$image.'\', \''.$badge.'\', \''.$company.'\')';
											  
											  }
										  
										  };

						$addPage = new update();
						$addPage->uped($location,$query,$method);
                   
                   ?>
                   
                   <?php tpAdmin('prodAdd'); ?>
          
            <div class="table-responsive">
                

                  <table class="table table-hover">
                  
                      <tbody>
                  
                      <tr class="active" style="color:black;">
                          <td>Id</td>
                          <td>Company</td>
                          <td>Product Name</td>
                          <td>Description</td>
                          <td>Grade</td>
                          <td>Image</td>
                          <td>Bages</td>
                          <td>Edit</td>
                          <td>Delete</td>
                      
                      <?php 
						
					  $location = 'Products';		 
					  $block = "productRow";
					  $query = "SELECT * FROM Products ORDER BY `Products`.`Company` ASC";
					  $method = 'edited';
					   
					  //query's the db 
					  $table = new admin_model();
                      $table->query($query,$block);
					  
					  //deletes records
					  $delete = new delete();
					  $delete->del($location);
					  
					  
					  //updates the record
					  if(isset($_POST[''.$method.''])){
							  
						  if(isset($_POST['id'])){
							 
							  $id = addslashes($_POST['id']);
							  $company = addslashes($_POST['company']);
							  $prodName = addslashes($_POST['prodName']);
							  $Grade = addslashes($_POST['grade']);
							  $script = addslashes($_POST['script']);
							  $badge = addslashes($_POST['badges']);
							  $image = addslashes($_POST['image']);
							  
							  $query = 'UPDATE `'.$site.'`.`'.$location.'` SET `Title` = \''.$prodName.'\', `Description` = \''.$script.'\', `Grade` = \''.$Grade.'\', `Image` = \''.$image.'\', `Badges` = \''.$badge.'\', `Company` = \''.$company.'\' WHERE `'.$location.'`.`Id` = \''.$id.'\'';
						  
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
