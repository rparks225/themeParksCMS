
<?php

$url = new cms();
$url->parseUrl();
$tits = array($url->parseUrl());

global $sName;
$siteN = "{$sName}";

$metaKey = array(

''.title().''=>array(

'name'=>''.$title.'',

'title'=>'
<title>'.$siteN.' - '.$heading.'</title>',

'keyWords'=>'<meta name="keywords" content="'.$keywords.'" />',

'script'=>'
<meta name="description" content="'.$script.'" />',

'link'=>'
<link rel="canonical" href="'.links().'">'
	
)

);

if($script == 'false'){
	
	echo '<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">';
	echo $metaKey[title()]['title'];
	
	}else if(isset($tits[2])){
			
			echo '<meta name="keywords" content="Posts, Blog posts" />
<meta name="description" content="Posts for all things posts! '.bloggy($tits[2]).'" />
<title>'.$siteN.' - News Post - '.bloggy($tits[2]).'</title>
';
			
			}else if(title() === $metaKey[title()]['name']){
		
		echo $metaKey[title()]['keyWords'];
		echo $metaKey[title()]['script'];
		echo $metaKey[title()]['link'];
		echo $metaKey[title()]['title'];
		
		};		
			
?>

        