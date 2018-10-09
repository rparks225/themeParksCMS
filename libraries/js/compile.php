<?php
ob_start();

require_once '../../includes/db.php';
require_once '../../includes/settings.php';
require_once '../themes/'.$theme.'/themeFunctions.php';

global $cmsPath;
global $sUrl;
global $sessKey;

session_start();
$sessKey = md5($_SERVER['SERVER_ADDR'].' - '.$sName.'');
session_id(''.$sessKey.'');

$root = $_SERVER['DOCUMENT_ROOT'];
$path = ''.$cmsPath.'libraries/js/';

$files = scandir($root . $path);


foreach($frameWork['js'] as  $frameWorks['js']){
    
echo '/*================================
    '. $frameWorks['js'].'
================================*/
';
    
    include '../themes/'.$theme.'/js/'.$frameWorks['js'];
    echo '
    
    ';
}

echo 'var cmsPath = "'.$cmsPath.'";';

$comp = ob_get_clean();

ob_end_clean();

if( file_exists('themeParks-Scripts.js') && !isset($_GET['Delete']) ){
    
    echo '<h1>Complete! jQuery Libraries has been Compiled<h1>';
    echo '<a style="font-family:arial;font-size:12pt;padding:5px 15;text-decoration:none;border:1px solid black;border-radius:10px;" href="tp-Dashboard">Close</a>';
    
}else{
    
    
    if( isset($_GET['compile']) && !empty($_GET['compile']) && !file_exists('themeParks-Scripts.js') ){ 

        if( !isset($_SESSION[''.$sessKey.'']) ){

            header("Content-type: application/javascript; charset: UTF-8");
            echo $comp;

        }else{
            echo '<h1>File does not exist</h1>';
            echo '<p>Do you want to compile Js?</p>';
            echo '<a style="font-family:arial;font-size:12pt;padding:5px 15;text-decoration:none;border:1px solid black;border-radius:10px;" href="javascript:window.location.reload();" type="button">Yes Compile Js!</a>';
            file_put_contents('themeParks-Scripts.js',$comp);
        }
    
    }else{
        
        if( !empty($_GET['compile']) && !empty($_GET['Delete']) ){

            if( !isset($_SESSION[''.$sessKey.'']) ){
                header("Content-type: application/javascript; charset: UTF-8");
                echo $comp;
            }else{
                echo '<h1>Complete! JS has been Deleted<h1>';
                echo '<a style="font-family:arial;font-size:12pt;padding:5px 15;text-decoration:none;border:1px solid black;border-radius:10px;" href="tp-Dashboard">Close</a>';
                unlink('themeParks-Scripts.js');   
            }

        }else{
            header("Content-type: application/javascript; charset: UTF-8");
            echo $comp;
        }
        
    }
    
}
    
    
