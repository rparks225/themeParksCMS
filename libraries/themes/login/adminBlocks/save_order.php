<?php		
		
    require_once '../../../../includes/db.php';
    global $db_name;
	
	$mysqli = new mysqli($db_host,$db_user,$db_pass,$db_name);	
		
	$update = $_POST['item'];
		
	if(isset($update)){
		
		$i = 0;
		
		global $mysqli;
		
		foreach( $update as $newId){
		$query ='UPDATE `'.$db_name.'`.`images` SET `Order` = \''.$i.'\' WHERE `images`.`Id` = \''.$newId.'\';';	
		$mysqli->query($query);
		$i++;	
		echo '  '.$i.' = '.$newId.'';
		
		}
		
		
	};		
		
		
?>