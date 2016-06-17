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

/* Call for all files in selected directory */
  $fileData = '';
	$validExtensions = array('gif','jpeg','jpg','png','bmp'); // valid images
	foreach(scanFiles($serverPath.$eeIpath) as $val){ 
		$valC = explode('.',$val);
		if( in_array($valC[1], $validExtensions) ){ /* remove non image files */
            $fileData .= '
            <a href="#" onclick="setLink(\''.$val.'\');">
                <div style="text-align:center;margin-bottom:15px;padding:15px;height:300px;" class="col-sm-4 col-md-4 col-xs-4">
                    <div style="border:1px solid grey;border-radius:4px;padding:15px;vertical-align:middle;">
                        <div style="height:200px;overflow:hidden;">
                            <img style="width:100%;" src="'.$val.'" />
                        </div>    
                        <h5 style="padding:15px 0 10px;position:realtive;left:0;">'. str_replace($eeIpath,'',$val).'</h5>
                    </div>
                    <br/>
                    <br/>
                </div>
            </a>';
		}
	}
	
//echo substr($fileData, 0,-1).'<br/>';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
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
</body>
</html>



