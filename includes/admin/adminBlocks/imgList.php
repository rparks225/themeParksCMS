<!-- <?php global $cmsPath; global $dbName; echo $file; ?> -->
   
    <div  style="display:none;" class="row hid" id="<?php echo $file; ?>">

        <?php
        
            $query1 = 'SELECT * FROM images WHERE Album LIKE "'.$file.'"';
            $block = 'imgBox';
            $gals2 = new admin_model();
            $gals2->query($query1,$block);
            $location = 'images';
        
            if(isset($_POST['editedMeta']) && $_POST['editedMeta'] == 'Confirm'){
                $id = strip_tags($_POST['id']);
                $location = strip_tags($_POST['gal']);
                $title = strip_tags($_POST['title']);
                $method = 'updated';
                $query = 'UPDATE `'.$dbName.'`.`images` SET `Title` = "'.$title.'" WHERE `images`.`Id` = "'.$id.'"';
                
                $updaty = new update();
                $updaty->uped($location,$query,$method);
                echo $query;
            }

            if(isset($_POST['imgDelete'])){
                $del = new delete();
                $other = false;
                $del->del($location,$other);

                $path = $_SERVER['DOCUMENT_ROOT'].$cmsPath.'images/uploads/'.$_POST['gal'].'/'.$_POST['imgDelete'].'';
                chmod($path);
                echo $path;
                unlink($path);
            }
       
        ?>

    </div>

<!-- Close <?php echo $file; ?> -->
