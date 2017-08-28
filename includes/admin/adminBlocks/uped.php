<!-- Open Page Update -->

<form class="form" method="post">

    <input type="hidden" name="id" value="<?php echo $id; ?>">

    <div class="form-group col s6">
        <label>Page Name:</label>
        <input class="form-control" required type="text" name="name" value="<?php echo $title; ?>">
        <br>
        <br>
    </div>

    <div class="form-group col s6">
        <label>Page Editable <span class="text-muted">(Yes or No)</span>?</label>
        <br>
        <select class="form-control" type="text" name="editable">
            <option value="Please choose a selection.">Select</option>
            <option value="false" <?php if($edit=='false' ){ echo 'selected="selected"'; }else{ echo ''; }; ?>>No</option>
            <option value="true" <?php if($edit=='true' ){ echo 'selected="selected"'; }else{ echo ''; }; ?>>Yes</option>
        </select>
        <br>
        <br>
    </div>

    <div class="form-group">

        <?php 

        if($edit == 'false'){

            echo '<label>Html:</label><br><textarea class="form-control col-md-12 ckeditor" id="upDate" rows="5" name="html" value="'.htmlspecialchars($html).'">'.htmlspecialchars($html).'</textarea><br><br>';
        }else{ echo ''; };

        ?>

    </div>

    <div class="form-group">
        <label>Page Title:</label>
        <br>
        <input class="form-control col-md-12" requires type="text" name="title" value="<?php echo $heading; ?>">
        <br>
        <br>
    </div>

    <div class="form-group">
        <label>Page Key Words:</label>
        <br>
        <input class="form-control col-md-12" requires type="text" name="key" value="<?php echo $keywords; ?>">
        <br>
        <br>
    </div>

    <div style="margin-bottom:10px;" class="form-group">
        <label>Page Description:</label>
        <br>
        <textarea class="form-control materialize-textarea" rows="5" length="120" name="script" value="<?php echo $script; ?>"><?php echo $script; ?></textarea>
        <br>
        <br>
    </div>

    <span><br><br></span>

    <input type="submit" name="edited" class="btn btn-default" value="Edit" />

</form>

<!-- Close Page Update -->