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
<div class="col l3 m4 s12">
    <div class="card-panel" style="padding:24px 0;">
        <ul>

            <li><a style="padding:15px;width:100%;" 
                   class="grey-text waves-effect waves-white" 
                   href="tp-Image">Back to Manage Images</a></li>

            <li><a style="padding:15px;width:100%;" 
                   class="grey-text waves-effect waves-white" 
                   href="tp-Dashboard">Back to Dashboard</a></li>

        </ul>
    </div>
</div>

<div class="col l9 m8 s12">
    <div class="card-panel">
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

            <input class="btn btn-primary" type="submit" name="updated" value="Update">

        </form>
    </div>
</div>