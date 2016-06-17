<!--Table row for post # <?php echo $id; ?> -->
<tr class="bPosts">

    <td>
        <a href="News-Post-<?php echo $id; ?>">
            <?php echo $title; ?>
        </a>
    </td>

    <td>
        <?php echo substr(strip_tags($script),0,155).'...'; ?>
    </td>

    <td><a href="apps/dropzone/upload/Posts/<?php echo $img; ?>" rel="prettyPhoto"><img style="width:100px;" src="apps/dropzone/upload/Posts/<?php echo $img; ?>" alt="<?php echo $img; ?>" /></a></td>


    <td>
        <?php if($imgCap == 'false'){ echo ''; }else{ echo $imgCap; } ?>
    </td>

    <td>
        <?php echo $date; ?>
    </td>

    <td>
        <?php if($update == '0000-00-00'){ echo 'Not Updated'; }else{ echo $update; } ?>
    </td>

    <td>

        <button href="<?php echo ROOT.'tp-Post-'.$id; ?>" type="button" class="waves-effect waves-red btn">

            <i class="material-icons left">mode_edit</i>

        </button>

    </td>


    <td>

        <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#myModal-<?php echo $id; ?>">

            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>

        </button>


        <!-- Delete Modal -->
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
<!--End table row for post # <?php echo $id; ?> -->