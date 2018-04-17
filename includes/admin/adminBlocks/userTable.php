<!--Table row for post # <? echo $id; ?> -->
<tr>

    <td>
        <?php echo $id?>
    <td>
        <?php echo $users; ?>
    <td>
        <?php if (empty($displName)): ?>
            <b>Not Set</b>
        <?php else: ?>
            <?php echo $displName; ?>
        <?php endif; ?>
    </td>

    <td>
        <b>Encrypted</b>
    </td>
    
    <td>
        <?php echo $email; ?>
    </td>

    <td>
        <?php echo $signedUp; ?>
    </td>
    
    <td>
       <?php if (empty($privi)): ?>
            <b>Not Set</b>
       <?php else: ?>
           <?php echo $privi; ?>
       <?php endif; ?>
    </td>

    <td>

        <div style="position:relative;top:0;right:0;" class="fixed-action-btn horizontal direction-left">
            <a class="btn-floating btn-large blue">
                <i class="large material-icons">add</i>
            </a>
            <ul>
                <li><a class="modal-trigger waves-effect waves-light btn-floating orange" data-toggle="modal" href="#addModal-<?php echo $id; ?>">

                    <i class="material-icons left">mode_edit</i>

                    </a></li>

                <li><a class="modal-trigger waves-effect waves-light btn-floating red" data-toggle="modal" href="#myModal-<?php echo $id; ?>">

                    <i class="material-icons left">delete</i>

                    </a></li>
            </ul>    
        </div>
        
        <!-- add Modal -->
        <div class="modal" id="addModal-<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">

                        <h4 class="modal-title" id="myModalLabel">Update User Info - <?php echo $users; ?></h4>
                    </div>
                    <div class="modal-body">
                            
                            <form class="form" method="post" style="">

                                <div class="form-group col s6">
                                    <input id="use" class="form-control" required type="text" name="use" value="<?php echo $users; ?>">
                                    <label for="use">User Name:</label>
                                </div>

                                <div class="form-group col s6">
                                    <input id="displName" class="form-control" required type="text" name="displName" value="<?php echo $displName; ?>">
                                    <label for="displName">Display Name:</label>
                                </div>

                                <div class="form-group col s12">
                                    <input id="pas" class="form-control" required type="text" name="pas" value="<?php echo $pass; ?>">
                                    <label for="pas">Password (Auto Encrypted):</label>
                                </div>
                                
                                    <p>&nbsp;</p>

                                <div class="form-group col s6">
                                    <select id="privi" class="form-control col-md-12" type="text" name="privi" value="">
                                        <option value="Not Set">Select Admin Privileges</option>
                                        <?php $opt = array('Limited','Super Admin','Admin'); foreach($opt as $opts): ?>
                                            <option <?php if($opts == $privi){ echo 'selected'; } ?> value="<?php echo $opts; ?>"><?php echo $opts; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <label for="privi">Privileges:</label>
                                </div>
                                
                                <div class="form-group col s6">
                                    <input id="email" class="form-control" type="email" name="email" value="<?php echo $email; ?>">
                                    <label for="email">Email (optional)</label>
                                </div>

                                <span><br></span>

                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <input type="submit" name="Updated" class="btn btn-default" value="Submit" />

                            </form>
                        <br>
                        <br>

                    </div>
                </div>
            </div>
        </div>
        <!--Close Modal-->

        <!-- Delete Modal -->
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