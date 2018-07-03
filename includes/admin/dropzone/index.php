<?php

require_once '../../../includes/db.php';
require_once '../../../includes/settings.php';

$vars = array('id','sUrl','dbName','sCaptcha','cmsPath','eePath','emailHost','emailAuth','emailUser','emailPass','emailEnc','emailPort','emailFrom','emailName','emailAdd','emailReply','eReplyTitle');

    foreach($vars as $var){

        global $$var;

    }


$sessKey = md5($_SERVER['SERVER_ADDR'].' - '.$sName.'');
session_start();
session_id(''.$sessKey.'');

if($mysqli->connect_errno){
	
	$mysqli->close();
	echo 'not connected';
	
	}

//Sets everything up.
$album = isset($_POST['album'])? $_POST['album']: '';

$ds          = DIRECTORY_SEPARATOR;  //1

$storeFolder = $_SERVER['DOCUMENT_ROOT'].$cmsPath.'images/uploads/'.$album.'';   //2

if (!file_exists($storeFolder) && isset($_REQUEST['addGal'])) {

    $old = umask(0);
    mkdir($storeFolder, 0777, true);
    umask($old);

    //updates the record
    if(isset($_POST['addGal'])){

        $method = 'submit';
        $location = 'gallery';
        $site = $dbName;
        $album = $_POST['album'];
        $title = $_POST['title'];

        if(isset($_POST['addGal'])){

            $querys = 'INSERT INTO  `'.$site.'`.`'.$location.'` (`Id`, `Gallery`, `Cover`, `Title`, `Order`)VALUES (NULL ,  \''.$album.'\', NULL, \''.$title.'\', NULL);';


            global $mysqli;

            if($result = $mysqli->query($querys)){
                
                echo '<script>alert("Album: '.$album.' has been successfully added!")</script>';
                echo '<script>location.href = "'.$sUrl.'apps/dropzone/"</script>';

            }
        }
    };

}

//Adds images to folders 
if (!empty($_FILES)) {
     
    $tempFile = $_FILES['file']['tmp_name'];          //3
	
	$fileName = $_FILES['file']['name'];   
      
    $targetPath =  $storeFolder . $ds;  //4
     
    $targetFile =  $targetPath. $_FILES['file']['name'];  //5
    echo 'this is the target file ---->'.$targetFile;
    if(move_uploaded_file($tempFile,$targetFile)){
		
		$location = 'images';
		$site = $db_name;
		$album = $_POST['album'];
		
		 $query = 'INSERT INTO `'.$dbName.'`.`images` (`Id`, `Image`, `Title`, `Album`, `Order`) VALUES (NULL, \''.$fileName.'\', \''.$fileName.'\', \''.$album.'\', NULL);';
  
		$mysqli->query($query);
		echo 'Image Added!';
		
		} //6
     
}

//Loops through files in directory	
function direct($directory){

	  if (! is_dir($directory)) {
		  exit('Invalid diretory path');
	  }
  
	  $files = array();
  
	  foreach (scandir($directory) as $file) {
		  if ('.' === $file) continue;
		  if ('..' === $file) continue;
  
		  $files[] = $file;
		  
		  if($file == '.DS_Store'){
			  
			  echo '';
			  
			  }else{
				  
				  echo '<option value="'.$file.'">'.$file.'</option>';
				  
				  };
			  
		   
	  }
	
	};

//Loops through files in directory	
function directory($directory){

    if (! is_dir($directory)) {
        exit('Invalid diretory path');
    }

    $files = array();

    foreach (scandir($directory) as $file) {
        if ('.' === $file) continue;
        if ('..' === $file) continue;

        $files[] = $file;

        if($file == '.DS_Store'){

            echo '';

        }else{

            echo '<div style="display:none;" class="row hid" id="'.$file.'">'; 
            
            $imgs = scandir($directory.$file,1);
            $i = 0;
            foreach($imgs as $img){
                
                if('.' === $img || '..' === $img || '.DS_Store' === $img){
                    
                    echo '';
                }else{
                
                echo '<div style="margin-bottom:30px;" class="col-sm-3">
                <div style="height:150px;overflow:hidden;">
                <img style="width:100%;" src="upload/'.$file.'/'.$img.'" /><br>
                </div>
                <div class="clearfix">&nbsp;</div>
                <button class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span></button>
                <button class="btn btn-danger" data-toggle="modal" data-target="#'.$file.'-'.$i.'">
                    <span class="glyphicon glyphicon-trash"></span>
                </button>
                </div>
                
                <!-- Delete PopUp -->
                <div class="modal fade" id="'.$file.'-'.$i.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Do you want to delete <br> '.$img.'?</h4>
                      </div>
                      <div class="modal-body" style="text-align:center;">
                          <form method="post">
                            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                            <input type="hidden" name="img" value="'.$img.'" />
                            <input type="hidden" name="loc" value="'.$file.'" />
                            <input type="hidden" name="table" value="images" />
                            <input type="submit" name="delete" class="btn btn-primary" value="Yes Delete" />
                          </form>    
                      </div>
                      <div class="modal-footer">
                        
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Delete PopUp -->
                
                ';
                
                }
                $i++;
            }
             
            echo '</div>';

        };


    }

};

if(isset($_REQUEST['delete'])){

    $site = "{$db_name}";
    $location = $_REQUEST['loc'];
    $im = $_REQUEST['img'];
    $tab = $_REQUEST['table'];

    if(isset($location)){

        $query = 'DELETE FROM `'.$site.'`.`'.$tab.'` WHERE `'.$tab.'`.`Image` = "'.$im.'"';

        global $mysqli;

        if($result = $mysqli->query($query)){

            if(isset($im)){

                $path = $_SERVER['DOCUMENT_ROOT'].$cmsPath.'apps/dropzone/upload/'.$location.'/';
                unlink($path.$im);

            }

            echo '<script>alert("'.$im.' was successfully Deleted");</script>'; 
            echo '<script>location.href = "'.$sUrl.'apps/dropzone/"</script>';

        }

    }

};
	
	if(!isset($_SESSION[''.$sessKey.''])){
		
		header('Location: '.$sUrl.'');
		
		}else{
			
			include 'form.php';
			
			}

?>
