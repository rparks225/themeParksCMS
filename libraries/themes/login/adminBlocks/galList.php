
<tr>
    <td><?php echo $id; ?></td>
    <td><?php echo $album; ?></td>
    <td>
        <?php
            if(isset($cover) && $cover != ''){

                echo '<img style="width:100px;" src="'.ROOT.'apps/dropzone/upload/'.$album.'/'.$cover.'" />';

            }else{

                echo 'no image selected';

            }
        ?>
    </td>
    <td><?php echo $title; ?></td>
    <td>
        <?php
            if(isset($order) && $order != ''){

                echo $order;

            }else{

                echo 'order not set';

            }
        ?>
    </td>
    <td>
        <div style="position:relative;top:0;right:0;" class="fixed-action-btn horizontal">
            <a class="btn-floating btn-large blue">
                <i class="large material-icons">add</i>
            </a>
            <ul style="right:90%;">

                <li>
                    <a href="<?php echo ROOT.'tp-Album-'.$id; ?>" type="button" class="orange waves-effect waves-red btn-floating btn-large">

                        <i class="material-icons left">mode_edit</i>

                    </a>
                </li>

                <li>
                    <a class="modal-trigger waves-effect waves-light btn-floating btn-large red" data-toggle="modal" href="#myModal-<?php echo $id; ?>">

                        <i class="material-icons left">delete</i>

                    </a>
                </li>
            </ul>
        </div>

        <!-- Delete Modal -->
        <div class="modal fade" id="myModal-<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="text-align:center;">

                        <h4 class="modal-title" id="myModalLabel">
                            Are you sure you want to delete - "<?php echo $album; ?>" image gallery folder?
                        </h4>
                        <div class="clearfix">&nbsp;</div>
                        <p>This will delete all images in this folder as well</p>
                    </div>
                    <div class="modal-body">

                       <div class="clearfix">&nbsp;</div>
                       <div class="clearfix">&nbsp;</div>
                        <form method="post" style="text-align:center;">

                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <input type="hidden" name="delAlb" value="<?php echo $album; ?>">
                            <a href="#!" class="btn btn-default modal-close">Cancel</a>
                            <input type="submit" name="delete" class="btn btn-default" value="Delete" />

                        </form>
                        <br>
                        <br>

                    </div>
                </div>
            </div>
        </div>
        <!--Close Delete Modal-->
        
    </td>
</tr>