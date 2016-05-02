<div id="list-<?php echo $id; ?>" class="sOrd">

    <h3>
    
        <span>    
        
            <a href="<?php echo ROOT; ?>Gallery-<?php echo $album; ?>"><?php if(empty($title)){ echo $album; }else{ echo $title; } ?></a>
        
        </span>    
    
    </h3>
    
        <div class="col-md-4 imgBox" style="padding-left:0;"><?php if(!empty($cover)){ echo '<img style="width:100%;" src="apps/dropzone/upload/'.$album.'/'.$cover.'" alt="" />'; }
        else
        { echo '<span class="glyphicon glyphicon-picture" style="font-size:72pt;"></span>'; }; ?>
        </div>
        
        <div class="col-md-8">
        
        <span class="e-ease ee:wwig" id="_gallery_<?php echo $album; ?>"><?php newEE('gallery_'.$album); ?></span>
        
        </div>
    
    <p>&nbsp;</p>
    
        <a href="<?php echo ROOT; ?>Gallery-<?php echo $album; ?>" class="pull-right btn btn-warning col-md-2">View Gallery</a>
        
            <div class="clearfix"></div>
        
        <hr>  
        
</div>

    <br>
