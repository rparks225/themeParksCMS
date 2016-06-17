<?php 
$a = '';
require_once $_SERVER['DOCUMENT_ROOT'].'/'.$a.'includes/db.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/'.$a.'includes/settings.php';

$vars = array('id','sUrl','dbName','sCaptcha','cmsPath','eePath','emailHost','emailAuth','emailUser','emailPass','emailEnc','emailPort','emailFrom','emailName','emailAdd','emailReply','eReplyTitle','sName');

    foreach($vars as $var){

        global $$var;

    };

$sessKey = md5($_SERVER['SERVER_ADDR'].' - '.$sName.'');
session_start();
session_name(''.$sessKey.'');

	$update = $_POST['list'];
		
	if(isset($update)){
		
		$i = 0;
		
		global $mysqli;
		
		foreach( $update as $newId ){
		$query = 'UPDATE  `'.$dbName.'`.`gallery` SET  `Order` =  \''.$i.'\' WHERE  `gallery`.`Id` = \''.$newId.'\'';
		$mysqli->query($query);
		$i++;	
		echo '  '.$i.' = '.$newId.' ';
		
		}
		
		
	};

if(!isset($_SESSION[''.$sessKey.''])){
		
		header('Location: '.$sUrl.'');
		
		}else{
			
			include 'form.php';
			
			}

?>