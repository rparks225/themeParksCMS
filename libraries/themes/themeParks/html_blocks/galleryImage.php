  
<li id="<?php echo 'item-'.$id; ?>" style="height:200px;padding-left:0;" class="col-md-4">
  
    <a href="<?php echo ROOT; ?>apps/dropzone/upload/<? echo $gallery; ?>/<? echo $img; ?>" rel="prettyPhoto[<?php echo $gallery; ?>]"><br>
        
        <img class="lazy" data-gallery="<?php echo $gallery; ?>" style="width:100%;position:relative;top:-10px;" alt="<? echo $img; ?>" data-original="<?php echo ROOT; ?>apps/dropzone/upload/<? echo $gallery; ?>/<? echo $img; ?>" /><br>
        
    </a>
  
</li>
