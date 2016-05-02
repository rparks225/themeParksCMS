<?php 

$vars = array('id','sUrl','dbName','sCaptcha','cmsPath','eePath','emailHost','emailAuth','emailUser','emailPass','emailEnc','emailPort','emailFrom','emailName','emailAdd','emailReply','eReplyTitle');

    foreach($vars as $var){

        global $$var;

    }


if($mysqli->connect_errno){
	
	$mysqli->close();
	echo 'not connected';
	
	}
	
require_once '../cms/model/update_model.php';
$method = false;
$location = false;
$query = false;

//updates the record
  if(isset($_POST['submit'])){

$method = 'submit';
$location = 'gallery';
$site = $dbName;
$album = $_POST['album'];
		
	  if(isset($_POST['album'])){
		 
		  $theme = addslashes($_POST['theme']);
		  
	  $query = 'INSERT INTO  `'.$site.'`.`'.$location.'` (`Id` ,`Gallery` ,`Title` ,`Order`)VALUES (NULL ,  \''.$album.'\',  \''.$title.'\', NULL);';
	  
	   }
  };

  $update = new update();
  $update->uped($location,$query,$method);
  

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
    	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    	<link rel="stylesheet" href="css/dropzone.css" />
    	<link rel="stylesheet" href="css/basic.css" />
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" />

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css" />
        <style>body{padding:20px;}</style>
	</head>
    
	<body>
		<h1 style="text-align:left;" class="fancy">Upload</h1>
        <hr>
		<div style="width:100%;margin:10px auto 0;padding:10px;" role="tabpanel">


		  <!-- Nav tabs -->
		  <ul class="nav nav-tabs" role="tablist">
		    <li role="presentation" class="active"><a href="#add" aria-controls="add" role="tab" data-toggle="tab">Add Photos</a></li>
		    <li role="presentation"><a href="#edit" aria-controls="edit" role="tab" data-toggle="tab">Add New Gallery</a></li>
              <li role="presentation"><a href="#images" aria-controls="images" role="tab" data-toggle="tab">Edit Images</a></li>
		  </ul>

		  <!-- Tab panes -->
		  <div class="tab-content"><br>
		    <div role="tabpanel" class="tab-pane active" id="add">
                <div class="form-group">
                    <strong>Select Album</strong>
                    <i>*Please refresh the page after upload is complete</i>
                    <select class="form-control" id="albumChoice">
                        <option class="active" value="">select</option>
                        <?php 

                        direct('upload/');

                        ?>
                    </select><br><br>
                    <form style="display:none;" action="index.php" class="dropzone">
                        <input type="hidden" name="album" id="album">
                    </form>
                </div>
		    </div>
            
		    <div role="tabpanel" class="tab-pane" id="edit">
		    	
                <form action="index.php" method="post">

                    <div class="form-inline">    
                        <label>Add New Gallery</label><br>
                            <input class="form-control" type="text" name="album" id="album" />
                            <button type="submit" class="form-control btn btn-primary" name="submit">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>
                    </div>
                    
				</form>
                
		    </div>
              
              <div role="tabpanel" class="tab-pane" id="images">
                  <div class="form-group">
                      <strong>Select Album to Edit Images</strong>
                      <select class="form-control" name="imgChoice" id="imgChoice">
                          <option class="active" value="">select</option>
                          <?php 

                          direct('upload/');

                          ?>
                      </select>
                  </div>      

                  <?php
                  
                  
                      directory('upload/');
                  
                  ?>

              </div>
            
		  </div>

		</div>
        
        
		

		<script src="dropzone.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
		<script>
			$(document).ready(function(){
                
				$('#albumChoice').change(function(){
					
					var value = $(this).val();
					if(value.length > 0){
						console.log(value);
						$('form.dropzone').fadeIn();
						$('#album').val(value);

					}else{
						$('form.dropzone').fadeOut();
					}
				});
                
                $('#imgChoice').change(function() {

                    var imp = $(this).val();
                    
                    $('.hid').hide();
                    $('#'+imp).show();   

                });
                
			});
			
		</script>

	</body>
</html>