
<?php 

if($file == '.DS_Store' || $file == 'index.php'){
	return false;
	}

if(theme() == $file){
    $a = 'selected ';
}else{
    $a = '';
}
	
?>
<option <?php echo $a; ?>name="theme" value="<?php echo $file; ?>"><?php echo $file; ?></option>