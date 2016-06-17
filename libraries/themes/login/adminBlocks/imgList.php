<div style="" class="row hid" id="<?php echo $album; ?>">

    <?php
    $query = 'SELECT * FROM images';
    $block = 'imgBox';
    $gals = new admin_model();
    $gals->query($query,$block);
    ?>
    
</div>    
    