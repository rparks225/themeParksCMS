<?php
ob_start();

require_once '../../includes/db.php';
require_once '../../includes/settings.php';
require_once '../themes/'.$theme.'/themeFunctions.php';

global $cmsPath;
global $sUrl;
global $theme;
global $sessKey;

session_start();
$sessKey = md5($_SERVER['SERVER_ADDR'].' - '.$sName.'');
session_name(''.$sessKey.'');

$root = $_SERVER['DOCUMENT_ROOT'];
$path = $cmsPath.'libraries/css/';
echo '@charset "UTF-8";
/* CSS Document */';

$files = scandir($root . $path);

function compress($buffer) {
    /* remove comments */
    $buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);
    /* remove tabs, spaces, newlines, etc. */
    $buffer = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $buffer);
    return $buffer;
}

foreach($frameWork['css'] as $frameWorks['css']){

echo '
/*========================
    '. $frameWorks['css'].'
========================*/
    ';
       include '../themes/'.$theme.'/css/'.$frameWorks['css'];
   }

$comp = ob_get_clean();

ob_end_clean();

if(file_exists('themeParks-styles.css') && !isset($_GET['Delete'])){
    	
    echo '<h1>Complete! CSS has been Compiled<h1>';
    echo '<a style="font-family:arial;font-size:12pt;padding:5px 15;text-decoration:none;border:1px solid black;border-radius:10px;" href="tp-Dashboard">Close</a>';
    
}else{
    
    if( isset($_GET['compile']) && !empty($_GET['compile']) && !file_exists('themeParks-styles.css') ){ 
        
        if( !isset($_SESSION[''.$sessKey.'']) ){
            
            header("Content-type: text/css; charset: UTF-8");
            echo compress($comp);
            
        }else{
            echo '<h1>File does not exist</h1>';
            echo '<p>Do you want to compile Css?</p>';
            echo '<a style="font-family:arial;font-size:12pt;padding:5px 15;text-decoration:none;border:1px solid black;border-radius:10px;" href="javascript:window.location.reload();" type="button">Yes Compile Css!</a>';
            file_put_contents('themeParks-styles.css',compress($comp));
        }
    
    }else{
        
        if( !empty($_GET['compile']) && !empty($_GET['Delete']) ){
            
            if( !isset($_SESSION[''.$sessKey.'']) ){
                header("Content-type: text/css; charset: UTF-8");
                echo compress($comp);
            }else{
                echo '<h1>Complete! CSS has been Compiled<h1>';
                echo '<a style="font-family:arial;font-size:12pt;padding:5px 15;text-decoration:none;border:1px solid black;border-radius:10px;" href="tp-Dashboard">Close</a>';
                unlink('themeParks-styles.css');   
            }
            
        }else{
            header("Content-type: text/css; charset: UTF-8");
            echo compress($comp);  
        }
        
    }
    
}
    
?>