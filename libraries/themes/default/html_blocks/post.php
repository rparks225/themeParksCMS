
<div class="col-md-8">  

            <p>Posted - <i><?php echo $date; ?></i></p>

    <p>
            <span>
                    <?php echo $script; ?>
            </span>
    </p>

</div>
       
        
<div class="col-md-4">

     <a href="<? echo ROOT ?>apps/dropzone/upload/Posts/<?php echo $img;?>" rel="prettyPhoto">
             <img class="img-responsive pull-right" width="100%" src="<? echo ROOT ?>apps/dropzone/upload/Posts/<? if(!empty($img)){echo $img;}else{ echo 'image.png';} ?>" alt="<? echo $img; ?>" />
     </a>
     
     <br>
     
            <div class="clearfix">&nbsp;</div>
            <div class="clearfix">&nbsp;</div>
    
    <a class="btn btn-warning pull-right" href="<?php echo ROOT;?>News-All" role="button">&laquo; Previous Posts</a>

</div>
        
        
                
    
        