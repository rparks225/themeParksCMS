<div style="margin-bottom:20px;" class="bloggy">

    <div>
    
            <div class="col-md-8 col-sm-10 col-xs-9" style="padding-left:0;">  
                 
                <h2 style="text-align:left;" class="text-muted"><?php echo $title; ?></h2><br>
                
                <div class="clearfix"></div>
                
                    <p style="text-align:left;">Posted - <i><?php echo $date; ?></i></p>
                
                <p style="height:auto;overflow:hidden;text-align:left;"><?php echo substr(strip_tags($script), 0, 255); ?>...
                
                </p>
            
            </div>
        
                <div class="col-md-4 col-sm-2 col-xs-3 imgBox" style="overflow:hidden;height:auto;padding-right:0;">
                
                    <a href="<?php echo ROOT ?>apps/dropzone/upload/Posts/<?php echo $img;?>" rel="prettyPhoto"><img class="lazy" data-original="<?php echo ROOT ?>apps/dropzone/upload/Posts/<?php if(!empty($img)){echo $img;}else{ echo 'image.png';} ?>" alt="<?php echo $img; ?>" style="width: 100%;" /></a><br>
                
                </div>
        
            <p>&nbsp;</p>
        
        <p class="pull-right">
        
            <a class="btn btn-warning" href="<?php echo ROOT; ?>News-Post-<?php echo $id; ?>" role="button">View Post &raquo;</a>
        
        </p>
            <div class="clearfix"></div>
        <hr>
    
    </div>

</div>

        