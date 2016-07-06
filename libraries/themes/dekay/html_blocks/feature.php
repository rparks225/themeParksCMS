<div style="margin-bottom:20px;" class="bloggy">

    <div>
    
            <div class="col-md-8 col-sm-10 col-xs-9" style="padding-left:0;">  
                 
                <h2 style="text-align:left;height:35px;overflow:hidden;" class="text-muted"><? echo $title; ?></h2><br>
                
                    <p style="text-align:left;">Posted - <i><? echo $date; ?></i></p>
                
                <p style="height:auto;overflow:hidden;text-align:left;"><? echo substr(strip_tags($script), 0, 255); ?>...</p>
            
            </div>
        
                <div class="col-md-4 col-sm-2 col-xs-3 imgBox" style="overflow:hidden;height:100%;padding-right:0;">
                
                    <a href="<? echo ROOT ?>apps/dropzone/upload/Posts/<?php echo $img;?>" rel="prettyPhoto"><img class="lazy" data-original="<? echo ROOT ?>apps/dropzone/upload/Posts/<? if(!empty($img)){echo $img;}else{ echo 'image.png';} ?>" alt="<? echo $img; ?>" style="width: 100%; height: 100%;" /></a><br>
                
                </div>
        
            <p>&nbsp;</p>
        
        <p style="text-align:right;">
        
            <a class="btn btn-warning" href="<? echo ROOT; ?>News-Post-<? echo $id; ?>" role="button">View Post &raquo;</a>
        
        </p>
        
        <hr>
    
    </div>

</div>

        