
<?php 

if($file == '.DS_Store'){
	return false;
	}
	
?>
<option data-icon="apps/dropzone/upload/Posts/<?php echo $file; ?>" 
        class="left circle" <?php if($file == $other){ echo 'selected="selected"'; } ?> 
        value="<?php echo $file; ?>"><?php echo $file; ?></option>