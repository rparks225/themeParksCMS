<!-- Modal -->
<div class="modal" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Insert New Page</h4>
            </div>
            <div class="modal-body">

                <form class="form" method="post" style="">

                    <input type="hidden" name="id" value="">

                    <div class="form-group col s6">
                        <label>Page Name:</label>
                        <br>
                        <input class="form-control" required type="text" name="name" value="">
                        <br>
                        <br>
                    </div>

                    <div class="form-group col s6">
                        <label>Page Editable <span class="text-muted">(Yes or No)</span>?</label>
                        <br>
                        <select required class="form-control" id="change" type="text" name="editable">
                            <option value="Please choose a selection." active>Select</option>
                            <option value="false">No</option>
                            <option value="true">Yes</option>
                        </select>
                        <br>
                        <br>
                    </div>

                    <div style="margin-bottom:10px;" class="form-group" id="html">

                    </div>

                    <div class="form-group">
                        <label>Page Title:</label>
                        <br>
                        <input class="form-control col-md-12" requires type="text" name="title" value="">
                        <br>
                        <br>
                    </div>

                    <div class="form-group">
                        <label>Page Key Words:</label>
                        <br>
                        <input class="form-control col-md-12" requires type="text" name="key" value="">
                        <br>
                        <br>
                    </div>

                    <div style="margin-bottom:10px;" class="form-group col s12">
                        <label>Page Description:</label>
                        <br>
                        <textarea class="materialize-textarea form-control" length="120" rows="5" name="script" value=""></textarea>
                        <br>
                        <br>
                    </div>

                    <span><br></span>

                    <input type="submit" name="inserted" class="btn btn-default" value="Submit" />

                </form>

            </div>
        </div>
    </div>
</div>
<!--Close Modal-->