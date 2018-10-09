<?php
header("Cache-Control: no-store, no-cache");

/*######    This page is the build page for the editor display    ######*/
/*######          customise these variables as required           ######*/

// main config, yes you do need it
include("config.php"); 
global $cmsPath;
// realData is 'funnily enough' the content you are about to edit
$realData = file_get_contents("".$_SERVER['DOCUMENT_ROOT'].$eeCpath."/".$_GET['file']."".$eeExtn."");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Content Editor</title>
     <script>var cmsPath = "<?php echo $cmsPath?>";</script>
	 <script type="text/javascript" src="<?php echo $eeJs;?>/lib/ckeditor/ckeditor.js"></script> 
    
	<style type="text/css">
		html, body, div, h1, h2, h3, h4, h5, h6, ul, ol, dl, li, dt, dd, p, blockquote, pre, form, fieldset, table, th, td { background: none; margin: 0; padding: 0; border: 0 ; }
		body {  font: 62.5% "Century Gothic", Geneva, Verdana, Arial, Helvetica, sans-serif; color: #4C1803;padding:10px;}
        #content {background: none;width:100%;height:100;}
        .btn{ padding:10px; border-radius:4px; border:none; }   
        .btn:hover{ cursor:pointer; }   
        .btn.one{ background:#0980b0; color:white; border:1px solid grey; }
        .btn.two{ background:#72aa5c; color:white; border:1px solid grey; }
        .btn.one:hover, .btn.two:hover{ background:none; border:1px solid grey; color:black; }
        .cke_contents{ height:55vh!important;}      
        #simplemodal-overlay {background-color:#000;}
        #simplemodal-container {background-color:#333; border:8px solid #444; padding:12px;}
        .edit[contenteditable=true] { border: 1px dotted grey; }
        .edit[contenteditable=true]:focus { border: none!important; }
        .cke_dialog{border: 1px solid grey;box-shadow: 2px 2px 10px;}
	</style>
     
  </head>
<body>
  <div id="content">
	<form name="edit_now" id="edit_now" action="cfk-action.php" method="post">
		<textarea id="eeta-<?php echo $_GET['file'];?>" name="eeta-<?php echo $_GET['file'];?>" rows="10" cols="20"><?php echo $realData;?></textarea>
		<script type="text/javascript">
		//<![CDATA[
			CKEDITOR.replace( 'eeta-<?php echo $_GET['file'];?>', {
                skin: 'moono-lisa,<?php echo $eeJs;?>/lib/ckeditor/skins/moono-lisa/',
                filebrowserBrowseUrl : '<?php echo $eeJs;?>/lib/kcfinder/browse.php',
		        //filebrowserWindowWidth : 450,
		        //filebrowserWindowHeight : 400,
                
    		});
            CKEDITOR.dtd.$removeEmpty['span'] = false;
		//]]>
		</script>
		<input type="hidden" value="eeta-<?php echo $_GET['file'];?>" name="tVal" />
		<input type="hidden" value="<?php echo $_GET['file'];?>" name="file" />
		<br/>
        <button class="btn one suby" type="submit">Save Changes</button>
        <button class="btn two" onclick="self.parent.ppClose();" >Cancel Editing</button>
	</form>
  </div>
</body>
</html>
