<?php
// +----------------------------------------------------------------------+
// | editEase 1.5ish - ok I give up on versioning 						  |
// | $date:  03 November 2009                                             |
// +----------------------------------------------------------------------+
// | By Stephen Neate (http://code.google.com/p/editease/)                |
// | Copyright (c) 2007/2009 Stephen Neate                                |
// | Licensed under the MIT License:                                      |
// | -- http://www.opensource.org/licenses/mit-license.php                |
// +----------------------------------------------------------------------+
// | editEase REQUIREMENTS (TESTED WITH)                                  |
// +----------------------------------------------------------------------+
// | PHP  (5.1.2 - 5.2+)                                                  /
// | Apache (1.3.7 - 1.3.9, 2.2+)                                         /
// | jQuery (1.2.6+)    *required                                         /
// +----------------------------------------------------------------------+

include("config.php");

/*Cancel open file and replace with existing data*/
if($_POST['eData']==='cancel'){
		$realData = file_get_contents($_SERVER['DOCUMENT_ROOT'].$eeCpath."/".$_POST['file']."".$eeExtn."");
		echo $realData;

/*Save new data to open file and close file for editing*/
}elseif($_POST['eData']==='save'){

		// write data to file, and double check it can be written to
		$dataPath = $_SERVER['DOCUMENT_ROOT'].$eeCpath."/".$_POST['file']."".$eeExtn."";

		if (is_writable($dataPath)) {
				if (!$dataPath = fopen($dataPath, 'w+')) {
						 echo "Sorry I cant find the file you are looking for :(";
						 exit;
				}

				// if magic quotes turned on
				if ( get_magic_quotes_gpc() ) { 
					$_POST['nData'] = stripslashes($_POST['nData']); 
				} 
				
				if (fwrite($dataPath, $htmlData = $_POST['nData']) === FALSE) {
						echo "The file ".$_POST['file']."".$eeExtn." is not writable, please CHMOD permissions to 757 or 777";
						exit;
				}
				$replacedData = file_get_contents($_SERVER['DOCUMENT_ROOT'].$eeCpath."/".$_POST['file']."".$eeExtn."");
				echo $replacedData;
				fclose($dataPath);
		} else {
				echo "The file ".$_POST['file']."".$eeExtn." is not writable, please CHMOD permissions to 757 or 777";
		}


/*Open file to edit*/
}elseif($_POST['eData']==='edit'){
$realData = file_get_contents($_SERVER['DOCUMENT_ROOT'].$eeCpath."/".$_POST['file']."".$eeExtn."");

/*Height and width adjusted a fraction for a better fit across all browers*/
$height = ($_POST['height']-3);
$width = ($_POST['width']-5);

?>
<textarea name="eeta-<?php echo $_POST['file'];?>" id="eeta-<?php echo $_POST['file'];?>" cols="40" rows="6" style="margin-left:1px;border:0;height:<?php echo $height;?>px;width:<?php echo $width;?>px;overflow:scroll-x;"><?php echo $realData;?></textarea>
<?php
}
?>
