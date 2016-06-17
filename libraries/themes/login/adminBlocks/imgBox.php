<?php
global $gallery;
global $img;
global $id;
?>

<div style="margin-bottom:30px;" class="col-sm-3">
    <div style="height:150px;overflow:hidden;">
        <img style="width:100%;" src="<?php ROOT; ?>apps/dropzone/upload/<?php echo $gallery; ?>/<?php echo $img; ?>" /><br>
    </div>
    <div class="clearfix">&nbsp;</div>
    <button class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span></button>
    <button class="btn btn-danger" data-toggle="modal" data-target="#<?php echo $gallery; ?>-<?php echo $id; ?>">
        <span class="glyphicon glyphicon-trash"></span>
    </button>
</div>

<!-- Delete PopUp -->
<div class="modal fade" id="<?php echo $gallery; ?>-<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Do you want to delete <br> <?php echo $img; ?>?</h4>
            </div>
            <div class="modal-body" style="text-align:center;">
                <form method="post">
                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                    <input type="hidden" name="img" value="<?php echo $img; ?>" />
                    <input type="hidden" name="loc" value="<?php echo $gallery; ?>" />
                    <input type="hidden" name="table" value="images" />
                    <input type="submit" name="delete" class="btn btn-primary" value="Yes Delete" />
                </form>    
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>
<!-- Delete PopUp -->