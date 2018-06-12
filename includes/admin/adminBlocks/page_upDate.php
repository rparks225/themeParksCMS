<!-- Modal -->
<div class="modal" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title" id="myModalLabel">Insert New Page</h4>
            </div>
            <div class="modal-body">

                <form class="form" method="post" style="">

                    <input type="hidden" name="id" value="">

                    <div class="form-group input-field">
                        <label for="title">Page Title:</label>
                        <input class="form-control col-md-12" requires type="text" id="title" name="title" value="">
                    </div>

                    <div class="form-group input-field">
                        <select required class="form-control" id="change" type="text" id="editable" name="editable">
                            <option value="Please choose a selection." active>Select</option>
                            <option value="false">No</option>
                            <option value="true">Yes</option>
                        </select>
                        <label for="editable">Page Editable <span class="text-muted">(Yes or No)</span>?</label>
                    </div>

                    <div class="form-group input-field">
                        <label for="key">Page Key Words:</label>
                        <input class="form-control col-md-12" requires type="text" id="key" name="key" value="">
                    </div>

                    <div style="margin-bottom:10px;" class="form-group input-field">
                        <label for="script">Page Description:</label>
                        <textarea class="materialize-textarea form-control" length="120" rows="5" id="script" name="script" value=""></textarea>
                    </div>

                    <span><br></span>

                    <input type="submit" name="inserted" class="btn btn-default" value="Submit" />

                </form>

            </div>
        </div>
    </div>
</div>
<!--Close Modal-->