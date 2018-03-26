<!-- Modal -->
<div class="modal" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title" id="myModalLabel">Add New User</h4>
            </div>
            <div class="modal-body">

                <form class="form" method="post" style="">

                    <div class="form-group col s6">
                                <input class="form-control" required type="text" name="use" value="">
                                <label>User Name:</label>
                    </div>

                    <div class="form-group col s6">
                        <input class="form-control" required type="text" name="displName" value="">
                        <label>Display Name:</label>
                    </div>

                    <div class="form-group col s12">
                        <input class="form-control" required type="text" name="pas" value="">
                        <label>Password (Auto Encrypted):</label>
                    </div>
                    
                    <p>&nbsp;</p>
                    
                    <div class="form-group col s6">
                                <select class="form-control col-md-12" type="text" name="privi" value="">
                                    <option value="Not Set">Select Admin Privileges</option>
                                    <?php $opt = array('Limited','Super Admin','Admin'); foreach($opt as $opts): ?>
                                        <option value="<?php echo $opts; ?>"><?php echo $opts; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <label>Privileges:</label>
                    </div>

                    <div class="form-group col s6">
                                <input class="form-control" type="email" name="email" value="">
                                <label>Email (optional)</label>
                    </div>

                    <span><br></span>

                    <input type="submit" name="Added" class="btn btn-default" value="Submit" />
                    <input type="reset" class="btn orange" value="Reset" />

                </form>

            </div>
        </div>
    </div>
</div>
<!--Close Modal-->