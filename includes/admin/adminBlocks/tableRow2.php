<!--Table row for post # <? echo $id; ?> -->
<tr>

    <td>
        <?php if($edit == 'false'){ echo $title; }else{ echo '<a href="'.ROOT.$title.'">'.$title.'</a>'; }; ?></td>

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

        <div style="position:relative;top:0;right:0;" class="fixed-action-btn horizontal direction-left">
            <a class="btn-floating btn-large blue">
                <i class="large material-icons">add</i>
            </a>
        <ul>
        <li><a href="<?php echo ROOT.'tp-Pages-Update-'.$id; ?>" class="waves-effect waves-light btn-floating orange">

            <i class="material-icons left">mode_edit</i>

        </a></li>
        
        <li><a class="modal-trigger waves-effect waves-light btn-floating red" data-toggle="modal" href="#myModal-<?php echo $id; ?>">

            <i class="material-icons left">delete</i>

        </a></li>
        </ul>    
        </div>

        <!-- Modal -->
        <div class="modal" id="myModal-<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">

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