<?php
global $cmsPath;
?>
<div class="row">
   
    <div class="col s12">
        <ul class="tabs">
            <li class="tab col s3"><a class="active" href="#test1">Add New Gallery</a></li>
            <li class="tab col s3"><a href="#test2">Edit Images</a></li>
            <li class="tab col s3"><a href="#test3">Upload</a></li>
        </ul>
    </div>
    
    <div id="test1" class="col s12">
      
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

                        $query = 'SELECT * FROM gallery';
                        $block = 'galList';
                        $tab = new admin_model();
                        $tab->query($query,$block);

                    ?>

                </table>
        
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

            $query = 'SELECT * FROM gallery';
            $block = 'imgList';
            $tab = new admin_model();
            $tab->query($query,$block);
        
        ?>
        
    </div>
    
    <div id="test3" class="col s12">
       
        <iframe style="height:600px;width:100%;border:none;padding:0 15px;" 
                src="<?php echo ROOT; ?>apps/dropzone/"></iframe>
                
    </div>
    
</div>
