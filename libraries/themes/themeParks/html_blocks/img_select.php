
<?php 

if($file == '.DS_Store'){
	return false;
	}
	
?>
<option name="img" <?php if($file == $other){ echo 'selected="selected"'; } ?> value="<? echo $file; ?>"><? echo $file; ?></option>