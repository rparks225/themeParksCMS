
    <div class="col-md-8 col-sm-8 col-xs-12">  

            <h2 class="text-muted"><?php echo $title; ?></h2><br>

                    <p>Posted - <i><?php echo $date; ?></i></p>

            <p><?php echo substr(strip_tags($script), 0, 255); ?>...</p>

    </div>
        
    
        <div class="col-md-4 col-sm-4 col-xs-12">

            <a href="<?php echo ROOT ?>apps/dropzone/upload/Posts/<?php echo $img;?>" rel="prettyPhoto">
                    <img class="lazy img-fluid pull-right" data-original="<?php echo ROOT ?>apps/dropzone/upload/Posts/<?php if(!empty($img)){echo $img;}else{ echo 'image.png';} ?>" alt="<? echo $img; ?>" />
            </a>

                    <div class="clearfix">&nbsp;</div>
                    <div class="clearfix">&nbsp;</div>

            <a class="btn btn-warning pull-right" href="<?php echo ROOT; ?>News-Post-<?php echo $id; ?>" role="button">View Post &raquo;</a>

        </div>
        

        <div class="clearfix">&nbsp;</div>                
        
<hr>
       
        <div class="clearfix">&nbsp;</div> 
        