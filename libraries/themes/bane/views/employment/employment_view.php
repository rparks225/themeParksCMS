<?php 
				
$method = 'inserted';
$location = 'careers';
$query = false;
$site = 'cesi';	
		
if(isset($_POST[''.$method.''])){
	
	if(isset($_POST['id'])){
		
		$id = addslashes($_POST['id']);
		$job = addslashes($_POST['job']);
		$facility = addslashes($_POST['facility']);
		$script = addslashes($_POST['script']);
		$date = addslashes($_POST['date']);
		
		  
		$query = 'INSERT INTO `'.$site.'`.`'.$location.'` (`Id`, `Job`, `Facility`, `Description`, `Date`) VALUES (NULL, \''.$job.'\', \''.$facility.'\', \''.$script.'\', \''.$date.'\');';
					  
					  }
				  
				  }

$addJob = new update();
$addJob->uped($location,$query,$method);
				
?>
				
<!--Open Content area-->
<div class="cont">

    <div class="container">
    
        <div class="row">
        
        <?php 
            
            $linked = array(
            'skilled-nursing-assisted-living-locations-ma'=>'All BaneCare Locations',
            'skilled-nursing-assisted-living-north-shore-ma'=>'BaneCare North',
            'skilled-nursing-assisted-living-south-shore-ma'=>'BaneCare South',
            'skilled-nursing-assisted-living-boston-metro-ma'=>'BaneCare Metro Boston',
            'skilled-nursing-assisted-living-western-ma'=>'BaneCare West',
            'Home'=>'Back to Careers Main Page'    
            );
            
            tpBlock('sideBar'); 
            secNav($linked);
            
            ?>
        
            <div class="col-md-9">
                
                <h1 class="fancy">All Employment Opportunities</h1>
                    
                    <?php 
                    $sessKey = md5($_SERVER['SERVER_ADDR'].' - cesi');
                    if(isset($_SESSION[''.$sessKey.''])){
                    echo '<button class="btn btn-primary" data-toggle="modal" data-target="#addPage">Add new job post</button>';
                    require_once 'libraries/themes/'.theme().'/html_blocks/jobNew.php';
                    } ?>
                    
                    <br>
                        <div id="textSize"><strong>Text Size: <span id="smaller"> A</span> <span id="bigger">A</span></strong></div>
                    <br>
                
                    <?php  
                    
                    $query ='Select * FROM careers';
                    $block = 'job';
                    
                    $jobs = new model();
                    $jobs->query($query, $block);
                    
                    ?>
                
            </div>
        
        </div>
        
    </div>
    
</div>
<!--Close Content area-->
