<?php

//Runs Everything
require_once 'includes/config.php';
require_once 'includes/settings.php';

$vars = array('id','sUrl','dbName','sCaptcha','cmsPath','eePath','emailHost','emailAuth','emailUser','emailPass','emailEnc','emailPort','emailFrom','emailName','emailAdd','emailReply','eReplyTitle','userName');

    foreach($vars as $var){

        global $$var;

    }

define("ROOT", "{$sUrl}");

function links(){
	
	$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	
	return $actual_link;
	
	}

function title($numb = ''){
	
    if($numb != ''){
        
        $url = new cms();
        $url->parseUrl();
        $tits = $url->parseUrl();
        if(isset($tits[$numb])){
            
            return $tits[$numb];
            
        }else if(isset($tits[1])){
            
            return $tits[1];
            
        }else{
            
            return $tits[0];
            
        }
        
    }else{
        
        $url = new cms();
        $url->parseUrl();
        $tits = $url->parseUrl();

        if(isset($tits[1])){

            return $tits[1];

            }else{

            return $tits[0];

            }

        }
	
	}
	
function active($name) {
	
	$tits = ''.ROOT.$name.'';
	
	if($tits == links()){
		echo 'active';
		}else{
			return 'inactive';
			}
	
	  }			
	
function bloggy($num){
	
	global $mysqli;
		
		$query = 'SELECT * FROM post WHERE `Id` LIKE "'.$num.'"';
		
		if($result = $mysqli->query($query)){
			
			while($row = $result->fetch_assoc()){
	
				if(isset($row['Title'])){
					
					$title = $row['Title'];
					
					return $title;
					
					}else{
						
						}
						
				}
	
		}

  }

function navi($page){
    
    foreach($page as $link => $title){
         if(links() == ROOT.$link){
             $a = 'active';
         }else{
             $a = 'inactive';
         };

         echo '<li class="'.$a.'"><a href="'.ROOT.$link.'">'.$title.'</a></li>';
     };
    
}

function breadcrumbs($trails){

    echo '<ul class="breadcrumb">';
    foreach($trails as $trail){
        echo '<li><span><img width="27" height="16" src="images/baneLeaf.png"></span> '.$trail.'</li>';
    }
    echo '</ul>';
}
	
function theme(){
	
	global $mysqli;
		
		$query = 'SELECT * FROM Theme LIMIT 1';
		
		if($result = $mysqli->query($query)){
			
			while($row = $result->fetch_assoc()){
	
				if(isset($row['Theme'])){
					
					$theme = $row['Theme'];
					
					return $theme;
					
					}else{
						
						}
						
				}
				
		  }
		  
	if(!isset($theme)){
		
		return 'default';
		
		}	  
	
	}	

// Adds new easy edit page	
function newEE($title){
	
	$filename = 'apps/_ee/inc/_'.$title.'.php';
				  
				  if(!file_exists($filename)){
				  
				   touch($filename);
				   chmod($filename, 0777);
				  
				  $fileNew = fopen($filename,'w+');

				  return $fileNew;
				  fclose($fileNew);
				  
				  }else{
						include 'apps/_ee/inc/_'.$title.'.php';
					  }
	
	};

//Loops through files in directory	
function direct($directory, $blocks, $other){

						  if (! is_dir($directory)) {
							  exit('Invalid diretory path');
						  }
					  
						  $files = array();
						  
						  $i = 1;
					  
						  foreach (scandir($directory) as $file) {
							  if ('.' === $file) continue;
							  if ('..' === $file) continue;
					  
					  $id = $i++;
					  
							  $files[] = $file;
							   include 'libraries/themes/'.theme().'/html_blocks/'.$blocks.'.php';
						  }
	
	};	


//Loops through files in directory	
function tpDirect($directory, $blocks, $other){

    if (! is_dir($directory)) {
        exit('Invalid diretory path');
    }

    $files = array();

    $i = 1;

    foreach (scandir($directory) as $file) {
        if ('.' === $file) continue;
        if ('..' === $file) continue;

        $id = $i++;

        $files[] = $file;
        include 'libraries/themes/login/adminBlocks/'.$blocks.'.php';
    }

};	
	

//Makes New Image Album
$albums = isset($_POST['album'])? $_POST['album']: '';

$ds          = DIRECTORY_SEPARATOR;  //1
 
$storeFolder = 'images/uploads/'.$albums.'';   //2

if (!file_exists($storeFolder)) {
	
	$old = umask(0);
    mkdir($storeFolder, 0777, true);
	umask($old);
	
	echo '<script>alert("Album: '.$albums.' has been successfully added!")</script>';
		
}

//Adds images to folders 
if (!empty($_FILES)) {
     
    $tempFile = $_FILES['file']['tmp_name'];          //3   
      
    $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;  //4
     
    $targetFile =  $targetPath. $_FILES['file']['name'];  //5
 
    move_uploaded_file($tempFile,$targetFile); //6
     
}	

//gallery sort

function uped($method,$location,$query,$site){
	
	$i = 0;		
					
			if(isset($_POST[''.$method.''])){
				
				if(isset($_POST[$i])){
					
					$id = mysqli_real_escape_string($i);
					$order = addslashes($_POST[$method]);
					  
					$query = 'UPDATE `gallery` SET `Order` = '.$newId.' WHERE `gallery`.`Id` = '.$i.';';
					echo '<script>console.log("Got eem!");</script>';
								  }
							  
				}
		
}

function tpCompile($e){
    
    if($e == 'styles'){
        
         if(file_exists('libraries/css/themeParks-styles.css')){
    
            echo '<link href="'.ROOT.'libraries/css/themeParks-styles.css" type="text/css" rel="stylesheet" />
            ';

            }else{

            echo '<link href="'.ROOT.'libraries/css/compile.php" type="text/css" rel="stylesheet" />
            ';

            };
        
    }else if($e == 'js'){
        
        if(file_exists('libraries/js/themeParks-Scripts.js')){
        
        echo '<script src="'.ROOT.'libraries/js/themeParks-Scripts.js" type="text/javascript"></script>
        ';

            }else{

            echo '<script src="'.ROOT.'libraries/js/compile.php" type="text/javascript"></script>
            ';

            };
        
    }else{
        
        echo 'Incorrect pram.';
        
    };
    
   
};

function tpBlock($blocks){
        
    require_once 'libraries/themes/'.theme().'/html_blocks/'.$blocks.'.php';
    
};

function tpAdmin($blocks){

    require_once 'libraries/themes/login/adminBlocks/'.$blocks.'.php';

};

function tpInc($inc){
        
    require_once 'libraries/themes/'.theme().'/'.$inc.'.php';
    
};

function tpView($folder,$view){
        
    require_once 'libraries/themes/'.theme().'/views/'.$folder.'/'.$view.'_view.php';
    
};

function tpReq($req){
        
    require_once 'includes/tp-includes/tp-'.$req.'.php';
    
};

$pages = array(
        'Abbott-House'=>array(
        'name'=>'Abbott-House',    
        'add'=>'28 Essex Street, Lynn, MA 01902',
        'phone'=>'(781) 595-5500',
        'map'=>'https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d94169.0123882903!2d-70.99745686721171!3d42.474932678441895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x89e36cb6fb877dc5%3A0x9d64065c0d4d9278!2sAbbott+House+BaneCare+Lynn%2C+MA!3m2!1d42.474954!2d-70.92741699999999!5e0!3m2!1sen!2sus!4v1463600772993',
        ),
        'Devereux-House'=>array(
        'name'=>'Devereux-House',
        'add'=>'39 Lafayette Street, Marblehead, MA 01945',
        'phone'=>'781-631-6120',
        'map'=>'https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d94140.64478377279!2d-70.94530636658246!3d42.493781677207174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x89e314e9a614da35%3A0x4695a7a2f9a211a0!2sDevereux+House+A+Bane+Skilled+Marblehead%2C+MA!3m2!1d42.493803!2d-70.8752665!5e0!3m2!1sen!2sus!4v1463601289769'    
        ),
        'Rosewood'=>array(
        'name'=>'Rosewood',
        'add'=>'322 Johnson Street, W. Peabody, MA 01960',
        'phone'=>'978-535-8700', 
        'map'=>'https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d94061.37269860266!2d-71.06300286482406!3d42.54641857380806!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x89e312724bd96bff%3A0x941305a69a922eca!2s22+Johnson+St%2C+Peabody%2C+MA+01960!3m2!1d42.546439899999996!2d-70.992963!5e0!3m2!1sen!2sus!4v1463601142804'    
        ),
        'Bay-Path'=>array(
        'name'=>'Bay-Path',
        'add'=>'125 Broad Street, Weymouth, MA 021882',
        'phone'=>'781-337-3121', 
        'map'=>'https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d94835.1068083806!2d-70.8098207819887!3d42.03037511023768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x89e4a39fe9b469ed%3A0x11a439f6b1e96d08!2sBay+Path+Rehabilitation+%26+Nursing+Center+Duxbury%2C+MA!3m2!1d42.0303964!2d-70.7397809!5e0!3m2!1sen!2sus!4v1463606526369'    
        ),
        'Colonial'=>array(
        'name'=>'Colonial',    
        'add'=>'125 Broad Street, Weymouth, MA 02188',
        'phone'=>'781-337-3121', 
        'map'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2954.909605404388!2d-70.96293958454815!3d42.2163765791968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e362fbfefaee21%3A0xa842c74b72a34ec3!2s125+Broad+St%2C+Weymouth%2C+MA+02188!5e0!3m2!1sen!2sus!4v1463608973055'    
        ),
        'Hancock-Park'=>array(
        'name'=>'Hancock-Park',    
        'add'=>'164 Parkingway, Quincy, MA 02169',
        'phone'=>'617-773-4222', 
        'map'=>'https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d94513.98947846866!2d-71.07290587486449!3d42.245165894234724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x89e37ccb2917f923%3A0xe20661f6a34bfe01!2s164+Parking+Way%2C+Quincy%2C+MA+02169!3m2!1d42.2451872!2d-71.002866!5e0!3m2!1sen!2sus!4v1463712607414'    
        ),
        'Harbor-House'=>array(
        'name'=>'Harbor-House',    
        'add'=>'11 Condito Road Hingham, MA 02043',
        'phone'=>'781-749-4774', 
        'map'=>'https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d94504.70957614246!2d-70.97369597465864!3d42.251359893791005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x89e366ab18f8c3db%3A0xea1769967960dfec!2sHarbor+House+Rehabilitation+%26+Nursing+Center+Hingham%2C+MA!3m2!1d42.2513812!2d-70.90365609999999!5e0!3m2!1sen!2sus!4v1463712726939'    
        ),
        'John-Scott-House'=>array(
        'name'=>'Harbor-House',    
        'add'=>'233 Middle Street Braintree, MA 02184',
        'phone'=>'781-843-1860', 
        'map'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2954.857583371222!2d-70.99452958454822!3d42.217488379196716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e362d026e862ff%3A0x7990c2e3f9febbc2!2sJohn+Scott+House+Rehabilitation+%26+Nursing+Center!5e0!3m2!1sen!2sus!4v1463887695603'    
        ),
        'Mayflower-Place'=>array(
        'name'=>'Mayflower-Place',    
        'add'=>'579 Buck Island Road West Yarmouth, MA 02673',
        'phone'=>'1-800-245-8389', 
        'map'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2980.7648327326992!2d-70.26155758456565!3d41.6608227792401!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89fb30be3e213493%3A0x180e517d2ef40244!2sMaplewood+at+Mayflower+Place!5e0!3m2!1sen!2sus!4v1464022039471'    
        ),
        'The-Bostonian'=>array(
        'name'=>'The-Bostonian',    
        'add'=>'337 Neponset Avenue Dorchester, MA 02122',
        'phone'=>'617-265-2350', 
        'map'=>'https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d94450.4736393283!2d-71.11716987345545!3d42.28754569121867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x89e37b7660d9d86b%3A0x91fa579785844070!2sBostonian+Nursing+Care+%26+Rehab+Massachusetts!3m2!1d42.287566999999996!2d-71.04713!5e0!3m2!1sen!2sus!4v1464025036264'    
        ),
        'Brighton-House'=>array(
        'name'=>'Brighton-House',    
        'add'=>'170 Corey Road Brighton, MA 02135',
        'phone'=>'617-731-0515', 
        'map'=>'https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d94366.8474021274!2d-71.2101052716003!3d42.343291287322415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x89e379b41bb2d547%3A0x6b7311bddfc6fafd!2s170+Corey+RoadBrighton%2C+MA+02135!3m2!1d42.3433126!2d-71.1400654!5e0!3m2!1sen!2sus!4v1464030226540'    
        ),
        'Park-Place'=>array(
        'name'=>'Park-Place',    
        'add'=>'113 Central Ave Hyde Park, MA 02136',
        'phone'=>'617-361-2388', 
        'map'=>'https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d94490.53619221949!2d-71.18900387434421!3d42.260818693115326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x89e37e931b19af65%3A0xf2cb4e7f694c5c50!2sPark+Place+Nursing+%26+Rehabilitation+Center+Massachusetts!3m2!1d42.260839999999995!2d-71.11896399999999!5e0!3m2!1sen!2sus!4v1464037985957'    
        ),
        'Craneville-Place'=>array(
        'name'=>'Craneville-Place',    
        'add'=>'265 Main Street Dalton, MA 01226',
        'phone'=>'413-684-3212', 
        'map'=>'https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d94171.89387875641!2d-73.24755086727563!3d42.47301767856785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x89e74bf9e8f26ceb%3A0x5ae0a309a15df4f1!2sCraneville+Place+of+Dalton+Rehabilitation+%26+Skilled+Care+Center+Dalton%2C+MA!3m2!1d42.473039!2d-73.177511!5e0!3m2!1sen!2sus!4v1464104568925'    
        ),
        'Springside'=>array(
        'name'=>'Springside',    
        'add'=>'255 Lebanon Avenue Pittsfield, MA 01201',
        'phone'=>'413-499-2334', 
        'map'=>'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11779.10693775183!2d-73.306292!3d42.432487!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xead53e315f4ed025!2sSpringside+Rehabilitation+%26+Skilled+Care+Center!5e0!3m2!1sen!2sus!4v1464104625589'    
        ),
        'Sugar-Hill'=>array(
        'name'=>'Sugar-Hill',    
        'add'=>'45 Main St Dalton, MA 01226',
        'phone'=>'413-684-0100', 
        'map'=>'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11771.199278728784!2d-73.183836!3d42.474546!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9d836b6356ca7060!2sSugar+Hill+Senior+Living+Community!5e0!3m2!1sen!2sus!4v1464104673137'    
        ),
    );

//For secure login
$sessKey = md5($_SERVER['SERVER_ADDR'].' - '.$sName.'');
session_start();
session_name(''.$sessKey.'');
//error_reporting(E_ERROR | E_WARNING | E_PARSE);
//ini_set('display_errors', 0);

?>