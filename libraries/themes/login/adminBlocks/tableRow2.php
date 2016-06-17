<!--Table row for post # <? echo $id; ?> -->
<tr>

    <td>
        <?php if($edit == 'false'){ echo $title; }else{ echo '<a href="'.ROOT.''.$title.'">'.$title.'</a>'; }; ?></td>

    <td>
        <?php if($edit == 'false'){ echo '<span style="color:grey;">No</span>'; }else{ echo '<span style="color:green;">Yes</span>'; }; ?> </td>

    <td>
        <?php echo $heading; ?>
    </td>

    <td>
        <?php echo $keywords; ?>
    </td>

    <td>
        <?php echo $script; ?>
    </td>

    <td>

        <a href="<?php echo ROOT.'tp-Pages-'.$id; ?>" type="button" class="waves-effect waves-red btn-floating btn-large">

            <i class="material-icons left">mode_edit</i>

        </a>

    </td>


    <td>

        <button type="button" class="waves-effect waves-light btn-floating btn-large red" data-toggle="modal" data-target="#myModal-<?php echo $id; ?>">

            <i class="material-icons left">delete</i>

        </button>


        <!-- Modal -->
        <div class="modal fade" id="myModal-<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Are you sure you want to delete - Id# <?php echo $id; ?></h4>
                    </div>
                    <div class="modal-body">

                        <form method="post" style="text-align:center;">

                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <input type="hidden" name="title" value="<?php echo $title; ?>">
                            <input type="submit" name="delete" class="btn btn-default" value="Delete" />

                        </form>
                        <br>
                        <br>

                    </div>
                </div>
            </div>
        </div>
        <!--Close Modal-->

    </td>

</tr>
<!--End table row for post # <? echo $id; ?> -->