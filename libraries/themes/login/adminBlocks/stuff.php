<div style="display:none;" class="row hid" id="<?php echo $gallery; ?>">
    <div style="margin-bottom:30px;" class="col s3">
        <div style="height:150px;overflow:hidden;">
            <img style="width:100%;" src="<?php echo ROOT.'apps/dropzone/upload/'.$gallery.'/'.$img; ?>" /><br>
        </div>
        <div class="clearfix">&nbsp;</div>
        <button class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span></button>
        <button class="btn btn-danger" data-toggle="modal" data-target="#<?php echo $file.'-'.$i; ?>">
            <span class="glyphicon glyphicon-trash"></span>
        </button>
    </div>
</div>