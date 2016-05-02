<?php
$back = --$id;
?>

<div style="margin-bottom:20px;" class="bloggy">

    <div>
    
            <div class="col-md-8" style="padding-left:0;">  
                                 
                    <p style="text-align:left;">Posted - <i><? echo $date; ?></i></p>
                
                <p style="height:auto;overflow:hidden;text-align:left;"><? echo strip_tags($script); ?>...</p>
            
            </div>
        
                <div class="col-md-4 imgBox" style="overflow:hidden;height:auto;padding:0;">
                
                     <a href="<? echo ROOT ?>apps/dropzone/upload/Posts/<?php echo $img;?>" rel="prettyPhoto"><img style="width:100%;" src="<? echo ROOT ?>apps/dropzone/upload/Posts/<? if(!empty($img)){echo $img;}else{ echo 'image.png';} ?>" alt="<? echo $img; ?>" /></a><br>
                
                </div>
        
            <p>&nbsp;</p>
        
        <p style="text-align:right;">
        
            <p style="text-align:right;">
                <a class="btn btn-new" href="<?php if($back == '0'){ echo 'News-All'; }else{ echo 'News-Post-'.$back.''; } ?>" role="button">&laquo; Previous Posts</a>
            </p>
        
        </p>
    
    </div>

</div>

        