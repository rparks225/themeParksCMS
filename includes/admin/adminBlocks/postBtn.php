<button class="waves-effect waves-red btn modal-trigger left" data-target="postAdded" class="btn modal-trigger">Add New Post</button>
<div class="clearfix">&nbsp;</div>    


<!-- Modal -->
<div class="modal" id="postAdded" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <?php tpAdmin('insert_form'); ?>
            </div>
        </div>
    </div>
</div>
<!--Close Modal-->