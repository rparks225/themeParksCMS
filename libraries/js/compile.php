<?php

ob_start();
require_once '../../includes/db.php';
require_once '../../includes/settings.php';
require_once '../themes/'.$theme.'/themeFunctions.php';

global $cmsPath;
global $sUrl;


$root = $_SERVER['DOCUMENT_ROOT'];
$path = ''.$cmsPath.'libraries/js/';

$files = scandir($root . $path);


foreach($frameWork['js'] as  $frameWorks['js']){
    
echo '/*================================
';    
    echo $frameWorks['js'];
echo '
================================*/';
    
    include '../themes/'.$theme.'/js/'.$frameWorks['js'];
    echo '
    
    ';
}

echo 'var cmsPath = '.$cmsPath.'';

$comp = ob_get_clean();

ob_end_clean();

if(file_exists('themeParks-Scripts.js')){
    
    echo '<h1>Complete! jQuery Libraries has been Compiled<h1>';
    echo '<a style="font-family:arial;font-size:12pt;padding:5px 15;text-decoration:none;border:1px solid black;border-radius:10px;" href="http://'.$_SERVER['HTTP_HOST'].'/Home">Home</a>';
    
}else{
    
    if(isset($_GET['compile']) && !file_exists('themeParks-Scripts.js')){ 
        
    echo '<h1>File does not exist</h1>';
    echo '<p>Do you want to compile Js?</p>';
    echo '<a style="font-family:arial;font-size:12pt;padding:5px 15;text-decoration:none;border:1px solid black;border-radius:10px;" href="javascript:window.location.reload();" type="button">Yes Compile Js!</a>';
    //echo '<a type="button" >Yes Compile!</a>';
    file_put_contents('themeParks-Scripts.js',$comp);
    
    }else{
        
        header("Content-type: application/javascript; charset: UTF-8");
        echo $comp;
        
    }
    
}
    
    
