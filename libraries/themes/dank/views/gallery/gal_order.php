<?php 

require_once '../../../../../includes/db.php';
require_once '../../../../../includes/settings.php';

$vars = array('id','sUrl','dbName','sCaptcha','cmsPath','eePath','emailHost','emailAuth','emailUser','emailPass','emailEnc','emailPort','emailFrom','emailName','emailAdd','emailReply','eReplyTitle');

    foreach($vars as $var){

        global $$var;

    };	
		
	$update = $_POST['list'];
		
	if(isset($update)){
		
		$i = 0;
		
		global $mysqli;
        global $db_name;
		
		foreach( $update as $newId ){
            $query = 'UPDATE  `'.$db_name.'`.`gallery` SET  `Order` =  \''.$i.'\' WHERE  `gallery`.`Id` = \''.$newId.'\'';
		$mysqli->query($query);
		$i++;	
		echo '  '.$i.' = '.$newId.' ';
		
		}
		
		
	};		

?>