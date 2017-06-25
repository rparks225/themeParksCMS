<?php
//Runs Everything
require_once 'includes/config.php';
require_once 'includes/settings.php';


/*==================================
  Globalize all app admin setting
===================================*/
$vars = array('id','sUrl','dbName','sCaptcha','cmsPath','eePath','emailHost','emailAuth','emailUser','emailPass','emailEnc','emailPort','emailFrom','emailName','emailAdd','emailReply','eReplyTitle','userName');
    foreach($vars as $var){
        global $$var;
    }


/*==================================
      Defines Site ROOT Path
===================================*/
define("ROOT", "{$sUrl}");


/*==================================
    Defines Current URL location
===================================*/
function links(){
	$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	return $actual_link;
	}


/*===========================================
    Defines The page you are on from URL
===========================================*/
function title($numb = ''){
	
    if($numb != ''){
        $url = new cms();
        $url->parseUrl();
        $tits = $url->parseUrl();
        if(isset($tits[$numb])){    
            return $tits[$numb];    
        }else if(isset($tits[1])){    
            return $tits[1];    
        }else{    
            return $tits[0];    
        }
        
    }else{
        
        $url = new cms();
        $url->parseUrl();
        $tits = $url->parseUrl();
        if(isset($tits[1])){
            return $tits[1];
            }else{
            return $tits[0];
            }
        }	
	}


/*==================================
  Style Class for active page link
===================================*/
function active($name) {
	$tits = ''.ROOT.$name.'';
	if($tits == links()){
		echo 'active';
		}else{
			return 'inactive';
			}
	  }		


/*=============================================
   Checks the current theme for Admin Panel
=============================================*/
function theme(){	
	global $mysqli;		
		$query = 'SELECT * FROM Theme LIMIT 1';		
		if($result = $mysqli->query($query)){			
			while($row = $result->fetch_assoc()){	
				if(isset($row['Theme'])){					
					$theme = $row['Theme'];					
					return $theme;					
					}else{						
						}						
				}				
		  }		  
	if(!isset($theme)){		
		return 'default';		
		}	  	
	}	

	
/*=============================================
    Adds new cms component to desired page
=============================================*/
function newEE($title){	
	$filename = 'apps/_ee/inc/_'.$title.'.php';				  
      if(!file_exists($filename)){				  
       touch($filename);
       chmod($filename, 0777);				  
      $fileNew = fopen($filename,'w+');
      return $fileNew;
      fclose($fileNew);				  
      }else{
            
            $path = 'apps/_ee/inc/_'.$title.'.php';
            tmpltRender($path);
          
          }	
	};


/*=============================================
      Loops through files in directory
=============================================*/
function direct($directory, $blocks, $other){
    if(isset($other)){ echo $other; }
      if (! is_dir($directory)) {
          exit('Invalid diretory path');
      }
      $files = array();
      $i = 1;
      foreach (scandir($directory) as $file) {
          if ('.' === $file) continue;
          if ('..' === $file) continue;
      $id = $i++;
          $files[] = $file;
           include 'libraries/themes/'.theme().'/html_blocks/'.$blocks.'.php';
      }	
	};	


/*====================================================
   Loops through files in directory for Admin Panel
====================================================*/
function tpDirect($directory, $blocks, $other){
    if (! is_dir($directory)) {
        exit('Invalid diretory path');
    }
    $files = array();
    $i = 1;
    foreach (scandir($directory) as $file) {
        if ('.' === $file) continue;
        if ('..' === $file) continue;
        $id = $i++;
        $files[] = $file;
        include 'libraries/themes/login/adminBlocks/'.$blocks.'.php';
    }
};	


/*====================================================
            Makes New Image Album
====================================================*/
$albums = isset($_POST['album'])? $_POST['album']: '';
$ds          = DIRECTORY_SEPARATOR;  //1

$storeFolder = 'images/uploads/'.$albums.'';   //2
if (!file_exists($storeFolder)) {	
	$old = umask(0);
    mkdir($storeFolder, 0777, true);
	umask($old);	
	echo '<script>alert("Album: '.$albums.' has been successfully added!")</script>';		
}


/*====================================================
              Adds images to folders 
====================================================*/
if (!empty($_FILES)) {     
    $tempFile = $_FILES['file']['tmp_name'];          //3         
    $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;  //4     
    $targetFile =  $targetPath. $_FILES['file']['name'];  //5 
    move_uploaded_file($tempFile,$targetFile); //6     
}	


/*====================================================
                gallery sort
====================================================*/
function uped($method,$location,$query,$site){	
	$i = 0;							
    if(isset($_POST[''.$method.''])){				
        if(isset($_POST[$i])){					
            $id = mysqli_real_escape_string($i);
            $order = addslashes($_POST[$method]);					  
            $query = 'UPDATE `gallery` SET `Order` = '.$newId.' WHERE `gallery`.`Id` = '.$i.';';
            echo '<script>console.log("Got eem!");</script>';
                          }							  
        }		
}


/*====================================================
  Compiles Styles and or JS from folders to 1 sheet
====================================================*/
function tpCompile($e){    
    if($e == 'styles'){        
         if(file_exists('libraries/css/themeParks-styles.css')){    
             echo '<link href="'.ROOT.'libraries/css/themeParks-styles.css" type="text/css" rel="stylesheet" />
            ';
            }else{
            echo '<link href="'.ROOT.'libraries/css/compile.php" type="text/css" rel="stylesheet" />
            ';
            };        
    }else if($e == 'js'){        
        if(file_exists('libraries/js/themeParks-Scripts.js')){        
        echo '<script defer src="'.ROOT.'libraries/js/themeParks-Scripts.js" type="text/javascript"></script>
        ';
            }else{
            echo '<script src="'.ROOT.'libraries/js/compile.php" type="text/javascript"></script>
            ';
            };        
    }else{        
        echo 'Incorrect pram.';        
    };       
};


/*===============================================================
     Renders Views, Blocks and Loops for easier to read sytax.
===============================================================*/
function tmpltRender($path){
    global $inline;
    $fileConts = file_get_contents($path);
    $search = array(
        '/\{\% echo (.*?) \%\}/',
        '/\{\# (.*?) \#\}/',
        '/\{\-\- if (.*?) \-\-\}/',
        '/\{\-\- else \-\-\}/',
        '/\{\-\- endif \-\-\}/',
    );
    $replace = array(
        '<?php echo ($1); ?>',
        '<?php ($1); ?>',
        '<?php if ($1) : ?>',
        '<?php else : ?>',
        '<?php endif; ?>',
    );
    $fileConts = preg_replace($search,$replace,$fileConts);
    eval(' ?>'.$fileConts.'<?php ');
};


/*====================================================
     Finds a defined Block to be viewed on page
====================================================*/
function tpBlock($blocks){        
    $path = 'libraries/themes/'.theme().'/html_blocks/'.$blocks.'.php';
    tmpltRender($path);
};


/*====================================================
     Finds a defined Block for the admin panel
====================================================*/
function tpAdmin($blocks){
    require_once 'libraries/themes/login/adminBlocks/'.$blocks.'.php';
};


/*======================================================================================
   Finds a defined theme header, footer, and CSS for page head, foot and css compiler
======================================================================================*/
function tpInc($inc){        
    $path = 'libraries/themes/'.theme().'/'.$inc.'.php';
    tmpltRender($path);
};


/*====================================================
         Finds a defined View for controller
====================================================*/
function tpView($folder,$view){      
    $path = 'libraries/themes/'.theme().'/views/'.$folder.'/'.$view.'_view.php';
    tmpltRender($path);
};


/*====================================================
  Finds a defined Block for theme header and footer
====================================================*/
function tpReq($req){        
    require_once 'includes/tp-includes/tp-'.$req.'.php';    
};


/*====================================================
                For secure login
====================================================*/    
$sessKey = md5($_SERVER['SERVER_ADDR'].' - '.$sName.'');
session_start();
session_name(''.$sessKey.'');


/*====================================================
            Error Reporting On or Off
====================================================*/
//error_reporting(E_ERROR | E_WARNING | E_PARSE);
//ini_set('display_errors', 0);


/*====================================================
                   Html minify
====================================================*/

function compress($switch){
    
    if($switch == 'true'){
        function sanitize_output($buffer) {

            $search = array(
                '/\>[^\S ]+/s',  // strip whitespaces after tags, except space
                '/[^\S ]+\</s',  // strip whitespaces before tags, except space
                '/(\s)+/s',       // shorten multiple whitespace sequences
                '/<!--(.|\s)*?-->/'    // strip comments
            );

            $replace = array(
                '>',
                '<',
                '\\1',
                ''
            );

            $buffer = preg_replace($search, $replace, $buffer);

            return $buffer;
        }

        ob_start("sanitize_output");
        
    }else{
        
        echo '<!-- Html Compression is OFF -->
';
        
    }
    
}


/*====================================================
           Login timout variable in seconds
====================================================*/
$destroy = '<meta http-equiv="refresh" content="1800;url='.ROOT.'apps/_ee/sess-destroy.php" />';


/*====================================================
           Checks for Theme Functions
====================================================*/
if(file_exists($_SERVER['DOCUMENT_ROOT'].$cmsPath.'libraries/themes/'.theme().'/themeFunctions.php')){
    
    include $_SERVER['DOCUMENT_ROOT'].$cmsPath.'libraries/themes/'.theme().'/themeFunctions.php';
    
}

?>