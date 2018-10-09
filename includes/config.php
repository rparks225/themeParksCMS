<?php
/*Permission*/
umask(0002);

/*Init App if connect to db*/
require_once 'db.php';

if($mysqli->connect_errno){
	
	$mysqli->close();    
    echo '<strong>You are not connect</strong>';
    
}else{
	
	require_once 'apps/cms/model/cms_model.php';
    require_once 'apps/cms/model/admin_model.php';
	require_once 'apps/cms/model/delete_model.php';
	require_once 'apps/cms/model/update_model.php';	
	
}
		