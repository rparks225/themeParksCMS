<!-- Modal -->

<h3 class="fancy">Update Post - <?php echo $title; ?></h3>

<hr><br>

<form class="form col-md-9 col-xs-9" method="post" style="">

    <input type="hidden" name="id" value="<?php echo $id; ?>">

    <div class="form-group">
        <label>Title:</label><br>
        <input class="form-control col-md-12" type="text" name="title" value="<?php echo $title; ?>">
        <br><br>
    </div>

    <div style="margin-bottom:20px;" class="form-group">

        <label>Post:</label>                       
        <textarea class="form-control col-md-12 ckeditor" rows="5" name="post" value="<?php echo $script; ?>"><?php echo $script; ?></textarea>

    </div>

    <div class="form-group">
        <label><br>Image:</label><br>
        <select class="form-control col-md-12" name="img">
            <option value="">Select</option>
            <?php

            $directory = 'apps/dropzone/upload/Posts';
            $blocks = 'img_select';
            $other = ''.$img.'';
            tpDirect($directory,$blocks,$other);

            ?>
        </select><br><br>
    </div>

    <div class="form-group">

        <label for="cap">Image Caption</label>
        <input  type="text" class="form-control" name="cap" id="cap" value="<?php if($imgCap == 'false'){ echo ''; }else{ echo $imgCap; }  ?>" />

    </div>

    <div class="form-group">
        <label>Date:</label><br>
        <input class="form-control col-md-12" id="datepicker" type="text" name="date" value="<?php echo(date("m/d/Y")); ?>"><br><br>
    </div>

    <input type="submit" name="edited" class="btn btn-default" value="Edit" />

</form>

<div class="col-md-3 col-xs-3">
    <strong>Attached Image</strong>
    <hr><br>
    <img style="width:100%;border:2px solid black;float:right;" src="<?php echo ROOT; ?>apps/dropzone/upload/Posts/<?php if(!empty($img)){echo $img;}else{ echo 'image.png'; } ?>"  /><br><br><br>

</div>

<div class="clearfix">&nbsp;</div>
<div class="clearfix">&nbsp;</div>

<!--Close Modal--> 