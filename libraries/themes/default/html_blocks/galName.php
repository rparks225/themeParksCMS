<?php global $inline; 
if(!empty($cover)){ 
    $bg = 'apps/dropzone/upload/'.$album.'/'.$cover;
}else{ 
    $bg = ''; 
}; 
?>
   <div id="list-<?php echo $id; ?>" class="sOrd">
    
        <div class="col-md-4" style="height:250px;background:url(<?php echo $bg; ?>) no-repeat;background-size:cover;">
        </div>
        
        <div class="col-md-8">
        
                <h3>
                        <a href="<?php echo ROOT; ?>Gallery-<?php echo $album; ?>">
                                <?php if(empty($title)){ echo $album; }else{ echo $title; } ?>
                        </a>
                </h3>

                <div id="_gallery_<?php echo $album; ?>" class="e-ease ee:wwig">

                        <?php newEE('gallery_'.$album); ?>

                </div>
                
            <div class="clearfix">&nbsp;</div>

                    <a href="<?php echo ROOT; ?>Gallery-<? echo $album; ?>" class="btn btn-warning">
                            View Gallery
                    </a>

            <div class="clearfix"></div>
             
        </div>
        
    <div class="clearfix"></div>    
    <div class="clearfix"></div>
    <hr>         
        
</div>
