
<?php 

if($file == '.DS_Store' OR $file == 'login'){
	return false;
	}
	
?>
<option name="theme" value="<?php echo $file; ?>"><?php echo $file; ?></option>