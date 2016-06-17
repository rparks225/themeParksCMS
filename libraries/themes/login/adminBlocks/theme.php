
<?php 

if($file == '.DS_Store' || $file == 'login' || $file == 'index.php'){
	return false;
	}
	
?>
<option name="theme" value="<?php echo $file; ?>"><?php echo $file; ?></option>