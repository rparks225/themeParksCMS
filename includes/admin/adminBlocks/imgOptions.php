<?php
$selected = '';
if($other['cover'] == $file){
    $selected = 'selected ';
}
?>
<option <?php echo $selected; ?>data-icon="images/uploads/<?php echo $other['album'].'/'.$file; ?>" 
                                class="left circle" 
                                value="<?php echo $file; ?>"><?php echo $file; ?>
</option>
