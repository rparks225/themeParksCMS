<?php
$back = --$id;
?>

<div style="margin-bottom:20px;" class="bloggy">

    <div>
    
            <div class="col-md-8" style="padding-left:0;">  
                     <h2 class="fancy"> <?php echo $title; ?></h2>
                
                    <p style="text-align:left;">Posted - <i><?php echo $date; ?></i></p>
                
                <p style="height:auto;overflow:hidden;text-align:left;"><?php echo $script; ?></p>
            
            </div>
        
                <div class="col-md-4 imgBox" style="border:5px solid #e0e5e8;overflow:hidden;height:auto;padding:0;">
                
                     <a href="<?php echo ROOT ?>apps/dropzone/upload/Posts/<?php echo $img;?>" rel="prettyPhoto">
                         <img style="width:100%;" src="<?php echo ROOT; ?>apps/dropzone/upload/Posts/<?php if(!empty($img)){echo $img;}else{ echo '<span class="glyphicon glyphicon-picture"></span>';} ?>" alt="<?php echo $img; ?>" style="width: 140px; height: 140px;" />
                    </a><br>
                    
                        <?php if($imgCap != 'false'){ 
                        
                                echo '<p style="background:#e0e5e8;margin-bottom:0;padding:5px;">';
                                echo $imgCap; 
                                echo '</p>';
    
                            }else{ 
    
                                echo '';} 
                        
                        ?>
                
                </div>
        
            <p>&nbsp;</p>
        
        <p style="text-align:right;">
        
            <p style="text-align:right;">
                <a class="btn btn-warning" href="<?php echo ROOT.'Skilled-Nursing-News'; ?>" role="button">&laquo; Back to All Posts</a>
            </p>
        
        </p>
    
    </div>

</div>

        