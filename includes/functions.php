<?php
//Runs Everything
require_once 'includes/config.php';
require_once 'includes/settings.php';


/*==================================
    Globalize all app admin setting
===================================*/
$vars = array('id','sUrl','dbName','sCaptcha','cmsPath','eePath','emailHost','emailAuth','emailUser','emailPass','emailEnc','emailPort','emailFrom','emailName','emailAdd','emailReply','eReplyTitle','userName','sName');
    foreach($vars as $var){
        global $$var;
    }


/*==================================
    Defines Site ROOT Path
===================================*/
if(!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off'){
    $proto = 'https://';
}else{
    $proto = 'http://';
}
define("ROOT", "$proto{$sUrl}");

/*==================================
    Defines Current URL location
===================================*/
function links(){
    global $proto;
    $actual_link = "$proto$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
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
         echo 'inactive';
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
    Grabs Navigation Links From The DB
=============================================*/
function navLinks($a){	
    global $mysqli;		
    $query = 'SELECT * FROM Nav WHERE Id = "'.$a.'"';
    
    if($result = $mysqli->query($query)){			
        while($row = $result->fetch_assoc()){	
            if(isset($row['Nav_Text'])){					
                $menu = $row['Nav_Text'];					
                return json_decode($menu,true);		
            }else{						
            }						
        }				
    }
}	


/*=============================================
    Adds new cms component to desired page
=============================================*/
function newEE( $title ){	
    $title = strtolower($title);
    $filename = 'includes/admin/_ee/inc/_'.$title.'.php';				  
      if(!file_exists($filename)){				  
       touch($filename);
       chmod($filename, 0777);				  
      $fileNew = fopen($filename,'w+');
      return $fileNew;
      fclose($fileNew);				  
      }else{
            $path = 'includes/admin/_ee/inc/_'.$title.'.php';
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
          if ('.DS_Store' === $file) continue;
      $id = $i++;
          $files[] = $file;
           include 'libraries/themes/'.theme().'/html_blocks/'.$blocks.'.php';
      }	
	};	


/*====================================================
    Loops through files in directory for Admin Panel
====================================================*/
function tpDirect($directory, $blocks, $other){
    if(isset($other[''])){ echo $other; }
    if (! is_dir($directory)) {
        exit('Invalid diretory path');
    }
    $files = array();
    $i = 1;
    foreach (scandir($directory) as $file) {
        if ('.' === $file) continue;
        if ('..' === $file) continue;
        if ('.DS_Store' === $file) continue;
        $id = $i++;
        $files[] = $file;
        include 'includes/admin/adminBlocks/'.$blocks.'.php';
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
    $targetPath = substr(dirname( __FILE__ ),0,-9).$ds.$storeFolder.$ds;  //4
    $targetFile =  $targetPath.basename($_FILES['file']['name'],' ');  //5
    $files = $_FILES['file']['name'];
    if(!empty($files)){
        $type = array('.doc', '.pdf', '.xls', '.jpg','docx');
        if(in_array(substr($files,-4),$type)) {
            move_uploaded_file($tempFile,$targetFile); //6
        }else{
            echo '<script>alert("Sorry that is not the correct file type. Please reload and try again.")</script>';
            exit('<h1>Incorrect Format</h1><a href="javascript:history.go(-1)">Previous Page...</a>');
        }
    }
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
        echo '<script src="'.ROOT.'libraries/js/themeParks-Scripts.js" type="text/javascript"></script>
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
        '/\{\-\- elseif (.*?) \-\-\}/',
        '/\{\-\- else \-\-\}/',
        '/\{\-\- endif \-\-\}/',
        '/\{\-\- foreach (.*?) \-\-\}/',
        '/\{\-\- endforeach \-\-\}/',
    );
    $replace = array(
        '<?php echo ($1); ?>',
        '<?php ($1); ?>',
        '<?php if ($1) : ?>',
        '<?php elseif ($1) : ?>',
        '<?php else : ?>',
        '<?php endif; ?>',
        '<?php foreach ($1 as $loop) : ?>',
        '<?php endforeach; ?>',
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
    Finds a defined Block for the admin panel
====================================================*/
    function tpAdmin($blocks){
    $path = 'includes/admin/adminBlocks/'.$blocks.'.php';
    tmpltRender($path);
};


/*====================================================
    Finds a defined Block for the admin panel
====================================================*/
function tpAdminInc($blocks){
    $path = 'includes/admin/'.$blocks.'.php';
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
session_start();
$sessKey = md5($_SERVER['SERVER_ADDR'].' - '.$sName.'');
session_id(''.$sessKey.'');


/*====================================================
    Always clear cookies unless logged in
====================================================*/
function delCook(){
    global $sessKey;
    if(!isset($_SESSION[''.$sessKey.''])){
		session_regenerate_id(true);
        // unset cookies
        if (isset($_SERVER['HTTP_COOKIE'])) {
            $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
            foreach($cookies as $cookie) {
                $parts = explode('=', $cookie);
                $name = trim($parts[0]);
                setcookie($name, '', time()-1000);
                setcookie($name, '', time()-1000, '/');
            }
        }
    }
}

/*====================================================
    Error Reporting On or Off
====================================================*/
function showErrors($switch){
    
    if($switch == 'on'){
       
        return 'Error Reporting is On.';
        
    }elseif($switch == 'off'){
        
        error_reporting(E_ERROR | E_WARNING | E_PARSE);
        ini_set('display_errors', 0);
        
    }else{
        echo 'Incorrect input, please use on or off';
    }
    
}


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
'/<!--/',    // strip comments
'/-->/'    // strip comments
);

$replace = array(
'>',
'<',
'\\1',
'
<!--',
'-->
'
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


/*=============================================
    Checks the current theme for Admin Panel
=============================================*/
function userInfo($q){	
    global $mysqli;		
    $query = 'SELECT * FROM `U_sers` WHERE User_name LIKE "'.$_SESSION['user'].'"';
    if($result = $mysqli->query($query)){			
        while($row = $result->fetch_assoc()){	
            if(isset($row['Display_name'])){					
                $userName = $row['Display_name'];			
            }
            if(isset($row['Privileges'])){
                $privileges = $row['Privileges'];
            }						
        }				
    }	
    echo $$q;
}

/*====================================================
    Login timout variable in seconds
====================================================*/
$destroy = '<meta http-equiv="refresh" content="1800;url='.ROOT.'includes/admin/_ee/sess-destroy.php" />';


/*====================================================
           Checks for Theme Functions
====================================================*/
if(file_exists($_SERVER['DOCUMENT_ROOT'].$cmsPath.'libraries/themes/'.theme().'/themeFunctions.php')){
    
    include $_SERVER['DOCUMENT_ROOT'].$cmsPath.'libraries/themes/'.theme().'/themeFunctions.php';
    
}

/*========================================
    Secure Pages
========================================*/
class secPage{
    public $ips;
    public $newIps;
    
    private function vars(){
        if( file_exists('includes/admin/sec.txt') ){ $this->ips = file_get_contents('includes/admin/sec.txt'); }
        $this->newIps = explode('>>', $this->ips);
    }
    
    public function listed(){
        $this->vars();
        echo '<ul>';
            foreach( $this->newIps as $ips ){
                echo '<li>'.$ips.'</li>';
            }
        echo '</ul>';
    }
    
    public function authorize(){
        if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
            $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
        }
        $this->vars();
        if( file_exists( 'includes/admin/sec.txt' ) ){
            if( in_array( $_SERVER['REMOTE_ADDR'],$this->newIps ) ){
                return 'true';
            }else{
                return 'false';
            }
        }else{
            return 'false';
        }
    }
    
    public function currentIp(){
        if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
            $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
        }
        echo $_SERVER['REMOTE_ADDR'];
    }
    
}
