<?php 

class update{
	
	public $query;
	
	public function uped($location,$query,$method){
		
		$this->query = $query;
	
	if(!empty($_POST[''.$method.''])){
	  
	  global $mysqli;
		
	if($result = $mysqli->query($query)){
	  
	 if($method == 'submit'){
		 
		 }else{
			 
     echo '<script>alert("'.$location.' Record has successfully been '.$method.'.");</script>';
	   clearstatcache();
	  echo '<script>location.href = "'.links().'"</script>';
			 }
	  
		   }
		  
		}
		  
	}

}  