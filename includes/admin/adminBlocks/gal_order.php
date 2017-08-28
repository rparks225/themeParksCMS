<?php 

require_once '../../../includes/db.php';
global $db_name;

$mysqli = new mysqli($db_host,$db_user,$db_pass,$db_name);	
		
	$update = $_POST['list'];
		
	if(isset($update)){
		
		$i = 0;
		
		global $mysqli;
		
		foreach( $update as $newId ){
		$query = 'UPDATE  `'.$db_name.'`.`gallery` SET  `Order` =  \''.$i.'\' WHERE  `gallery`.`Id` = \''.$newId.'\'';
		$mysqli->query($query);
		$i++;	
		echo '  '.$i.' = '.$newId.' ';
		
		}
		
		
	};		

?>