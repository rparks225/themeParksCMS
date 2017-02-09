<?php
header("Cache-Control: no-store, no-cache");
include("config.php");

function scanFiles($base='', &$data=array()) {
	global $serverPath;
  $array = array_diff(scandir($base), array('.', '..')); # remove ' and .. from the array */
  foreach($array as $value){ /* loop through the array at the level of the supplied $base */
    if (is_dir($base.$value)){/* if this is a directory then make a recursive call*/
      $data = scanFiles($base.$value.'/', $data); 
    }elseif (is_file($base.$value)) { /* else if the current $value is a file */
      $data[] = $base.$value; /* just add the current $value to the $data array */
    }
  }

  /* work out return data order */
	$dataManip=array();
  foreach($data as $val){ 
		$count = count( explode('/',str_replace($serverPath,'',$val)) );
		$dataManip[] = $count.'|'.str_replace($serverPath,'',$val); 
	}
	asort($dataManip);

  /* format return data order */
  $returnData=array();
  foreach($dataManip as $val){ 
		$returnData[] = substr($val, 2); 
	}

  return $returnData; // return the $data array
  
}


if(isset($_POST['tp-images']) && $_POST['tp-images'] == $_SERVER['SERVER_NAME']){

    $tpImg = $_POST['tp-file'];
    $valley = $_SERVER['DOCUMENT_ROOT'].$tpImg;

    if(file_exists($valley)){

        unlink($valley);
        echo '<script>alert("File has been Successfully Deleted");</script>';
        header('Location: '.$_SERVER['PHP_SELF'].'?CKEditor=eeta-_home2&CKEditorFuncNum=1&langCode=en');

    }

}

/* Call for all files in selected directory */
    $i = 0;
    $fileData = '';
	$validExtensions = array('gif','jpeg','jpg','png','bmp'); // valid images
	foreach(scanFiles($serverPath.$eeIpath) as $val){
		$valC = explode('.',$val);
		if( in_array($valC[1], $validExtensions) ){ /* remove non image files */
            $fileData .= '
              <div>

                    <div style="padding-left:0;" class="col-md-3 col-sm-3 col-xs-3">
                        <img class="img-responsive" src="'.$val.'" />
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-6">
                                <h5 class="text-muted">
                                <strong>File Name:</strong><br>
                                    <p>'. str_replace($eeIpath,'',$val).'<p><br><br>
                                    <strong>Preview:</strong>
                                    <p><a target="_blank" href="'.$val.'">'.$_SERVER['SERVER_NAME'].$val.'</a></p>
                                </h5>
                    </div>

                    <div class="col-md-3 col-sm-3 col-xs-3">
                            <a class="btn btn-primary" href="#" onclick="setLink(\''.$val.'\');">Add to Page</a>
                                    <div class="clearfix">&nbsp;</div>
                             <a class="btn btn-danger" href="#" data-toggle="modal" data-target="#tp-Del-'.$i.'">Delete</a>
                    </div>
                    <div class="clearfix">&nbsp;</div>
            <hr>
            </div>
            <div class="clearfix">&nbsp;</div>
            
            <div class="modal fade" tabindex="-1" role="dialog" id="tp-Del-'.$i.'">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Are you sure you want to delete this fIle: '. str_replace($eeIpath,'',$val).'?</h4>
                  </div>
                  <div class="modal-body">
                  <div class="clearfix">&nbsp;</div>
                  <div class="clearfix">&nbsp;</div>
                  
                            <form action="" method="post">
                                <input type="hidden" name="tp-images" value="'.$_SERVER['SERVER_NAME'].'">
                                <input type="hidden" name="tp-file" value="'.$val.'">
                                <input type="submit" class="btn btn-danger center-block" value="Yes, Delete." >
                            </form>
                            
                    <div class="clearfix">&nbsp;</div>
                   <div class="clearfix">&nbsp;</div>
                   
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
            
            ';
		}
       ++$i;
	}
/* End Image Loop */

//echo substr($fileData, 0,-1).'<br/>';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Content Editor</title>
      <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script type="text/javascript">
		function setLink(url) {
			window.opener.CKEDITOR.tools.callFunction(1, url);
			window.close();
		}
	</script>
	<style type="text/css">
		/*##### START: Reset Style #####*/
		html, body, div, h1, h2, h3, h4, h5, h6, ul, ol, dl, li, dt, dd, p, blockquote, pre, form, fieldset, table, th, td { background: none; margin: 0; padding: 0; border: 0 ;}
		/*##### END: Reset Style #####*/
		
		/*##### START: HTML Main #####*/
		body {  font: 62.5% "Century Gothic", Geneva, Verdana, Arial, Helvetica, sans-serif; color: #4C1803;padding:10px;}
		#content {background: #fff;width:100%;}
	</style>
  </head>
<body>
  <div id="content">
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <div class="container">
              <div class="navbar-header">
                  <a class="navbar-brand" href="#">List of uploaded images</a>
              </div>
          </div>
      </nav>
      
      <div class="clearfix">&nbsp;</div>
      <div class="clearfix">&nbsp;</div>
      <div class="clearfix">&nbsp;</div>
      <div class="clearfix">&nbsp;</div>
      <div class="clearfix">&nbsp;</div>
      <div class="clearfix">&nbsp;</div>
      
      <div class="container">
      
          <div class="row">
          
              <?php

              /* echo text file required for JS used in list of images */
              print $fileData;


              ?>
          
          </div>
          
      </div>

  </div>
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</body>
</html>



