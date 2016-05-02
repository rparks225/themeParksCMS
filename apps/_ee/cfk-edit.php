<?php
header("Cache-Control: no-store, no-cache");

/*######    This page is the build page for the editor display    ######*/
/*######          customise these variables as required           ######*/

// main config, yes you do need it
include("config.php"); 

// realData is 'funnily enough' the content you are about to edit
$realData = file_get_contents("".$_SERVER['DOCUMENT_ROOT'].$eeCpath."/".$_GET['file']."".$eeExtn."");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Content Editor</title>
	 <!--<script type="text/javascript" src="<?php echo $eeJs;?>/lib/ckeditor/ckeditor.js"></script> -->
        
    <script src="//cdn.ckeditor.com/4.5.1/full/ckeditor.js"></script>
    
	<style type="text/css">
		html, body, div, h1, h2, h3, h4, h5, h6, ul, ol, dl, li, dt, dd, p, blockquote, pre, form, fieldset, table, th, td { background: none; margin: 0; padding: 0; border: 0 ; }
		body {  font: 62.5% "Century Gothic", Geneva, Verdana, Arial, Helvetica, sans-serif; color: #4C1803;padding:10px;}
		#content {background: #fff;width:100%;}
	</style>
  </head>
<body>
  <div id="content">
	<form name="edit_now" id="edit_now" action="cfk-action.php" method="post">
		<textarea id="eeta-<?php echo $_GET['file'];?>" name="eeta-<?php echo $_GET['file'];?>" style="height:80%;" rows="15" cols="80"><?php echo $realData;?></textarea>
		<script type="text/javascript">
		//<![CDATA[
			CKEDITOR.replace( 'eeta-<?php echo $_GET['file'];?>', {
		        toolbar : [
				    ['Source','-','Save','-','Templates'],
				    ['Cut','Copy','Paste','PasteText','PasteFromWord','-','Print', 'SpellChecker', 'Scayt'],
				    ['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],
				    ['Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField'],
				    '/',
				    ['Bold','Italic','Underline','Strike','-','Subscript','Superscript'],
				    ['NumberedList','BulletedList','-','Outdent','Indent','Blockquote'],
				    ['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
				    ['Link','Unlink','Anchor'],
				    ['Image','Table','HorizontalRule','Smiley','SpecialChar','PageBreak'],
				    '/',
				    ['Styles','Format','Font','FontSize'],
				    ['TextColor','BGColor'],
				    ['Maximize', 'ShowBlocks','-','About','Class']
				],
				filebrowserBrowseUrl : '<?php echo $eeJs;?>/cfk_image_list.php',
		        filebrowserWindowWidth : 250,
		        filebrowserWindowHeight : 400,
    		});
            
		//]]>
		</script>
		<input type="hidden" value="eeta-<?php echo $_GET['file'];?>" name="tVal" />
		<input type="hidden" value="<?php echo $_GET['file'];?>" name="file" />
		<br/>
		<button type="submit">Save Changes</button>
		<button onclick="self.parent.closeEditing('<?php echo $_GET['file'];?>','xxlee');" >Cancel Editing</button>
	</form>
  </div>
</body>
</html>
