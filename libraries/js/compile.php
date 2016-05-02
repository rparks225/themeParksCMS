<?php
ob_start();
$a = '/dankVision';
$root = $_SERVER['DOCUMENT_ROOT'];
$path = ''.$a.'/libraries/js/';

$files = scandir($root . $path);

foreach($files as $v){
	
	if($v == '.DS_Store' || $v == '.' || $v == '..' || $v == 'compile.php' || $v == 'functions.js'){
	
	echo '';
	
	}else{
	
    echo '
    
/*=================================
      '.$v.'
==================================*/

    ';
include ''.$v. 
	
	'';
	
	}
	
	};
	
echo '
    
/*========================
    Functions . Js
========================*/

    ';	
include 'functions.js';

$comp = ob_get_clean();

ob_end_clean();

if(file_exists('themeParks-Scripts.js')){
    
    echo '<h1>Complete! jQuery Libraries has been Compiled<h1>';
    echo '<a style="font-family:arial;font-size:12pt;padding:5px 15;text-decoration:none;border:1px solid black;border-radius:10px;" href="http://localhost'.$a.'/Home">Home</a>';
    
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
    
    
?>