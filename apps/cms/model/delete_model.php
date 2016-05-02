<?php 

class delete{
	
	public function del($location){
		
	if(isset($_POST['delete'])){
							  
	if(isset($_POST['id'])){
	   
	$id = $_POST['id'];
	
	 }
	 
	}else{
	  
	  }
	
	if(!empty($_POST['delete'])){
		
      global $db_name;   
      global $cmsPath;    
	  $site = "{$db_name}";	
	  
	  $query = 'DELETE FROM `'.$site.'`.`'.$location.'` WHERE `'.$location.'`.`Id` = '.$id.'';
	  
	  global $mysqli;
		
		if($result = $mysqli->query($query)){
            
            if(isset($_POST['title'])){

                $path = $_SERVER['DOCUMENT_ROOT'].$cmsPath.'apps/_ee/inc/';
                unlink($path.'_'.$_POST['title'].'.php');

            }
	  
	  echo '<script>alert("Record has successfully deleted.");</script>';
	
	  echo '<script>location.href = "'.links().'"</script>';
	  
	  }
	  
	}
	  
}

	}  