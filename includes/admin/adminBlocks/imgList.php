<!-- <?php global $cmsPath; echo $file; ?> -->
   
    <div  style="display:none;" class="row hid" id="<?php echo $file; ?>">

        <?php
        
            $query1 = 'SELECT * FROM images WHERE Album LIKE "'.$file.'"';
            $block = 'imgBox';
            $gals2 = new admin_model();
            $gals2->query($query1,$block);
            $location = 'images';

            if(isset($_POST['imgDelete'])){
                $del = new delete();
                $other = false;
                $del->del($location,$other);

                $path = $_SERVER['DOCUMENT_ROOT'].$cmsPath.'images/uploads/'.$_POST['gal'].'/'.$_POST['imgDelete'].'';
                echo $path;
                unlink($path);
            }

        ?>

    </div>

<!-- Close <?php echo $file; ?> -->
