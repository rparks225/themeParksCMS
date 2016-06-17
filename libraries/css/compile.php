<?php
ob_start();

require_once '../../includes/db.php';
require_once '../../includes/settings.php';
global $cmsPath;
global $sUrl;

$root = $_SERVER['DOCUMENT_ROOT'];
$path = $cmsPath.'libraries/css/';
echo '@charset "UTF-8";
/* CSS Document */';

$files = scandir($root . $path);

foreach($files as $v){
	
	if($v == '.DS_Store' || $v == '.' || $v == '..' || $v == 'compile.php' || $v == "car.css"){
	
	echo '';
	
	}else{
	
    echo '
    
/*========================
      '.$v.'
========================*/

    ';
include ''.$v. 
	
	'';
	
	}
	
	};
	
echo '
    
/*========================
     Custom Styles
========================*/

    ';	
include '../themes/'.$theme.'/customStyles.css';

$comp = ob_get_clean();

ob_end_clean();

if(file_exists('themeParks-styles.css')){
    	
    echo '<h1>Complete! CSS has been Compiled<h1>';
    echo '<a style="font-family:arial;font-size:12pt;padding:5px 15;text-decoration:none;border:1px solid black;border-radius:10px;" href="'.$sUrl.$cmsPath.'Home">Home</a>';
    
}else{
    
    if(isset($_GET['compile']) && !file_exists('themeParks-styles.css')){ 
        
    echo '<h1>File does not exist</h1>';
    echo '<p>Do you want to compile Css?</p>';
    echo '<a style="font-family:arial;font-size:12pt;padding:5px 15;text-decoration:none;border:1px solid black;border-radius:10px;" href="javascript:window.location.reload();" type="button">Yes Compile Css!</a>';

    file_put_contents('themeParks-styles.css',$comp);
    
    }else{
        
        header("Content-type: text/css; charset: UTF-8");
        echo $comp;
        
    }
    
}
    
    
?>