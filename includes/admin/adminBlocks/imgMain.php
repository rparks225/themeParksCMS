<div class="row">

    <div class="col s12">
        <ul class="tabs">
            <li class="tab col s3"><a class="active" href="#test1">Add New Gallery</a></li>
            <li class="tab col s3"><a href="#test2">Edit Images</a></li>
            <li class="tab col s3"><a href="#test3">Upload</a></li>
        </ul>
    </div>

    <div id="test1" class="col s12">

        <div class="clearfix">&nbsp;</div>

        <button class="waves-effect waves-red btn modal-trigger" data-target="addGal">Add new image gallery</button>

        <div class="table-responsive">

            <table class="responsive-table highlight">

                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Gallery Name</th>
                        <th>Cover Image</th>
                        <th>Page Title</th>
                        <th>Sort Order</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <?php
                
                    //Calls Album table loops
                    $query = 'SELECT * FROM gallery';
                    $block = 'galList';
                    $tab = new admin_model();
                    $tab->query($query,$block);

                ?>

            </table>

        </div>

        <!-- Modal Structure -->
        <div id="addGal" class="modal">
            <div class="modal-content">
                <h4>Add New Photo Gallery</h4>
                <form class="form" method="post" style="">
                    <input type="hidden" name="id" value="">
                    <div>
                        <label for="gallery">Gallery Name:</label>
                        <br>
                        <input type="text" name="gallery" id="gallery" value="">
                    </div>
                    <div>
                        <label for="title">Gallery Title:</label>
                        <br>
                        <input type="text" name="title" id="title" value="">
                    </div>
                    <input type="submit" class="btn" name="inserted" value="Add">
                </form>
            </div>
        </div>

    </div>

    <div id="test2" class="col s12">

        <div class="clearfix">&nbsp;</div>

        <div class="form-group">
            <select class="form-control" name="imgChoice" id="imgChoice">
                <option class="active" value="">Select Album to Edit Images</option>
                <?php 

                $query = 'SELECT * FROM gallery';
                $block = 'options';
                $tab = new admin_model();
                $tab->query($query,$block);

                ?>
            </select>
        </div>

            <?php

                //Calls Single image loop               
                $gal = $_SERVER['DOCUMENT_ROOT'].'/themeParksCMS/images/uploads/';
                $block = 'imgList';
                tpDirect($gal,$block,false);               

            ?>

    </div>

    <div id="test3" class="col s12">

        <iframe style="height:600px;width:100%;border:none;padding:0 15px;" 
                src="<?php echo ROOT; ?>includes/admin/dropzone/"></iframe>

    </div>

</div>