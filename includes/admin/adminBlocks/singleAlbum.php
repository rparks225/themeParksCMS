<?php

if(isset($cover) && $cover != ''){

}else{
    $cover = 'Please Select a Cover Photo';
}

if(isset($order) && $order != ''){

}else{
    $order = 'Gallery order is not set';
}

?> 
<form action="" method="post">
    <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
    
    <div class="input-field col s12">     
        <input readonly type="text" name="galName" id="galName" value="<?php echo $album; ?>">
        <label for="galName">Gallery Name</label>
    </div>

    <div class="input-field col s12">      
        <input type="text" name="galTitle" id="galTitle" value="<?php echo $title; ?>">
        <label for="galTitle">Gallery Page Title</label>
    </div>

    <div class="clearfix">&nbsp;</div>
    
    <div class="input-field col s6">      
        <select class="icons" name="galCover" id="galCover">
            <option value="">Please Select a Cover Photo</option>
            <?php
                $directory = 'images/uploads/'.$album.'';
                $blocks = 'imgOptions';
                $other = array(
                    'album'=>$album,
                    'cover'=>$cover
                );
                tpDirect($directory,$blocks,$other);
            ?>
        </select>
        <label>Cover Photo</label>
    </div>

    <div class="input-field col s6">      
        <input type="text" name="galOrder" id="galOrder" value="<?php echo $order; ?>">
        <label for="galOrder">Gallery Sort Order</label>
    </div>

    <input class="btn" type="submit" name="updated" value="Update">

</form>