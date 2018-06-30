<?php

class model{
	
	public $query;
	public $block;	
    
    //Makes Vars Global
    public function __construct(){
        $this->query = true;
        $this->block = true;
    }
	
    //Queries the DB for home page	
	public function query($query, $block){
            if (isset($other)){
                $this->other = $other;
                return $other;
			}else{
			}
		
		global $mysqli;
        
		if($result = $mysqli->query($query)){
			while($row = $result->fetch_assoc()){
                $loops = array(
                    //General Vars
                    'Id'=>'id',
                    'Title'=>'title',
                    'Heading'=>'heading',
                    'Description'=>'script',
                    'Image'=>'img',
                    'COUNT(*)'=>'count',
                    
                    //Page Vars
                    'Html'=>'html',
                    'Editable'=>'edit',
                    'KeyWords'=>'keywords',
                    
                    //Image & Gallery Vars
                    'Alt'=>'alt',
                    'Gallery'=>'album',
                    'Cover'=>'cover',
                    'Album'=>'gallery',
                    
                    //Product Vars
                    'Price'=>'price',
                    
                    //Post Vars
                    'Date'=>'date',
                    'Updated'=>'update',
                    'Caption'=>'imgCap',
                    
                    //Job Vars
                    'Job'=>'job',
                    'Facility'=>'facility',

                    //Nav Menu Vars
                    'Menu_Name'=>'menNam',
                    'Nav_Text'=>'navTxt',
                );	
 
                foreach($loops as $loop => $val){
                    if(isset($row[$loop])){
                        $val = $row[$loop];
                    }
                };		
						
				   // Creates html block if it doesnt exist or just returns the already existing block		
				  $filename = 'libraries/themes/'.theme().'/html_blocks/'.$block.'.php';
				  
				  if(!file_exists($filename)){
				  
				   touch($filename);
				   chmod($filename, 0777);
				  
				  $fileNew = fopen($filename,'w+');

				  return $fileNew;
				  fclose($fileNew);
				  
				  }else{
                      
                          $fileConts = file_get_contents($filename);
                      
                          foreach($loops as $loop => $val){
                              if(isset($row[$loop])){
                                  $val = $row[$loop];
                                  
                                  $rep = '/\{\{ '. $loops[$loop] .' \}\}/';
                                  $fileConts = preg_replace($rep,$val,$fileConts);
                              }
                          };		
                          $search = array(
                              '/\{\% echo (.*?) \%\}/',
                              '/\{\# (.*?) \#\}/',
                              '/\{\-\- if (.*?) \-\-\}/',
                              '/\{\-\- elseif (.*?) \-\-\}/',
                              '/\{\-\- else \-\-\}/',
                              '/\{\-\- endif \-\-\}/',
                          );
                          $replace = array(
                              '<?php echo ($1); ?>',
                              '<?php ($1); ?>',
                              '<?php if ($1) : ?>',
                              '<?php elseif ($1) : ?>',
                              '<?php else : ?>',
                              '<?php endif; ?>',
                          );
                          $fileConts = preg_replace($search,$replace,$fileConts);
                          eval(' ?>'.$fileConts.'<?php ');
                            
					  }
				}
		  }
	}
	
	//Queries the DB for page data

	public function extra($query, $block, $other){
		$this->query($query, $block, $other);
    }
    
    public function singleQuery( $query, $dbVar ){
            global $mysqli;
            if( $result = $mysqli->query($query) ){
                while( $row = $result->fetch_assoc() ){
                        if( isset( $row[$dbVar] ) ){
                            $val = $row[$dbVar];
                            return $val;
                        }else{
                            return 'Not Working';
                        }
                   }
              }
        }
    
    public function rows($query){
        global $mysqli;
        $newQuery = 'SELECT COUNT(*) '.substr($query,8);
        $result = $mysqli->query($newQuery);
        $row = $result->fetch_assoc();
        return $row['COUNT(*)'];
    }
					
}
	
	