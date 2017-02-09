
<?php 

if($file == '.DS_Store' OR $file == 'login'){
	return false;
	}
	
?>
<option name="theme" value="<? echo $file; ?>"><? echo $file; ?></option>