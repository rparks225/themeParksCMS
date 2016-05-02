<?php

class model{
	
	public $query;
	public $block;	
	
//Queries the DB for home page	

	public function query($query, $block){
		
		$this->query = $query;
		$this->block = $block;
		
		if (isset($other)){
			
			$this->other = $other;
			return $other;
	
			}else{
			
			
				
			}
		
		global $mysqli;
		
		if($result = $mysqli->query($query)){
			
			while($row = $result->fetch_assoc()){
	
				if(isset($row['Id'])){
					
					$id = $row['Id'];
					
					}else{
						
						}
						
				if(isset($row['Title'])){
					
					$title = $row['Title'];
					
					}else{
						
						}
				
				if(isset($row['Html'])){
					
					$html = $row['Html'];
					
					}else{
						
						}
						
				if(isset($row['Description'])){
					
					$script = $row['Description'];
					
					}else{
						
						}
						
				if(isset($row['Links'])){
					
					$links = $row['Links'];
					
					}else{
						
						}	
						
				if(isset($row['Image'])){
					
					$img = $row['Image'];
					
					}else{
						
						}	
						
				if(isset($row['Alt'])){
					
					$alt = $row['Alt'];
					
					}else{
						
						}	
						
				if(isset($row['Price'])){
					
					$price = $row['Price'];
					
					}else{
						
						}
						
				if(isset($row['Gallery'])){
					
					$album = $row['Gallery'];
					
					}else{
						
						}	
						
				if(isset($row['Links'])){
					
					$link = $row['Links'];
					
					}else{
						
						}
						
				if(isset($row['First'])){
						
						$first = $row['First'];
						
						}else{
							
							}	
							
					if(isset($row['Last'])){
						
						$last = $row['Last'];
						
						}else{
							
							}	
						
					if(isset($row['Email'])){
						
						$email = $row['Email'];
						
						}else{
							
							}	
							
					if(isset($row['Phone'])){
						
						$phone = $row['Phone'];
						
						}else{
							
							}		
							
					if(isset($row['State'])){
						
						$state = $row['State'];
						
						}else{
							
							}	
						
					if(isset($row['Message'])){
						
						$message = $row['Message'];
						
						}else{
							
							}	
							
					if(isset($row['Date'])){
						
						$date = $row['Date'];
						
						}else{
							
							}	
							
					if(isset($row['Heading'])){
						
						$heading = $row['Heading'];
						
						}else{
							
							}	
							
					if(isset($row['KeyWords'])){
						
						$keywords = $row['KeyWords'];
						
						}else{
							
							}		
							
					if(isset($row['Editable'])){
						
						$edit = $row['Editable'];
						
						}else{
							
							}
							
					if(isset($row['Job'])){
						
						$job = $row['Job'];
						
						}else{
							
							}		
							
					if(isset($row['Facility'])){
						
						$facility = $row['Facility'];
						
						}else{
							
							}	
							
					if(isset($row['Updated'])){
						
						$update = $row['Updated'];
						
						}else{
							
							}	
							
					if(isset($row['Cover'])){
						
						$cover = $row['Cover'];
						
						}else{
							
							}
							
					if(isset($row['Album'])){
						
						$gallery = $row['Album'];
						
						}else{
							
							}	
							
					if(isset($row['fourth'])){
						
						$fourth = $row['fourth'];
						
						}else{
							
							}
							
					if(isset($row['Badges'])){
						
						$badges = $row['Badges'];
						
						}else{
							
							}		
							
					if(isset($row['Company'])){
						
						$company = $row['Company'];
						
						}else{
							
							}	
							
					if(isset($row['Grade'])){
						
						$grade = $row['Grade'];
						
						}else{
							
							}																										
						
				   // Creates html block if it doesnt exist or just returns the already existing block		
				  $filename = 'libraries/themes/'.theme().'/html_blocks/'.$block.'.php';
				  
				  if(!file_exists($filename)){
				  
				   touch($filename);
				   chmod($filename, 0777);
				  
				  $fileNew = fopen($filename,'w+');

				  return $fileNew;
				  fclose($fileNew);
				  
				  }else{
						include 'libraries/themes/'.theme().'/html_blocks/'.$block.'.php';
						
					  }
					  
				}
				
		  
		  }
		  
	  
	}
	
	//Queries the DB for page data

	public function home($query, $block){
		
		$this->query($query, $block);
		
		}
		
	public function pages($query, $block){
		
		
		$this->query($query, $block);
		
		
		}		
		
	protected function admin($query, $block){

		$this->query($query, $block);
		
		}	
		
	public function news($query, $block){
		
		
		$this->query($query, $block);
		
		
		}		
		
	protected function gallery($query, $block){

		$this->query($query, $block);
		
		}		
	
	public function extra($query, $block, $other){

		$this->query($query, $block, $other);
		
		}		
					
	}
	
	