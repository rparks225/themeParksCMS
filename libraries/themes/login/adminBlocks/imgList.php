<div style="display:none;" class="row hid" id="<?php echo $album; ?>">

    <?php
        $query = 'SELECT * FROM images';
        $block = 'imgBox';
        $gals = new admin_model();
        $gals->query($query,$block);
        $location = 'images';

        if(isset($_POST['imgDelete'])){
            $del = new delete();
            $del->del($location);
            
            $path = 'apps/dropzone/upload/'.$album.'/'.$_POST['imgDelete'].'';
            unlink($path);
        }
        
    ?>

</div>