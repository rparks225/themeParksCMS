<?php

if ($grade == 'Hosp' || $grade == 'Access'){
    return false;
};

?>
<div class="col-md-4 prodImage">
    <a href="#" data-toggle="modal" data-target="#prod-<?php echo $id; ?>">
        <img alt="" class="lazy" data-original="<?php echo ROOT; ?>apps/_ee/files/<?php echo $img; ?>" />
    </a>
</div>

<div class="col-md-8">
    
        <div class="clearfix cleared">&nbsp;</div>
    
    <h3 style="margin-top:0;" class="fancy">
        <a href="#" data-toggle="modal" data-target="#prod-<?php echo $id; ?>"><?php echo "{$title}" ?></a>
    </h3>
    
    <span class="text-muted pull-left"><b>Grade: </b>
        <?php echo "{$grade}";?>
    </span>
    
    <div class="clearfix"></div>

    <p>
       <?php echo strip_tags (substr($script,0,300));?>...
        
    <br /><br>
        
        <button type="button" data-toggle="modal" data-target="#prod-<?php echo $id; ?>" class="btn btn-warning">More info</button>
        <?php
        
        if($badges == 'Freemie'){
            echo '<img class="bads lazy" data-original="'.ROOT.'apps/_ee/files/freemie-compatible-logo.png" />';
        }else if($badges == 'FSA'){
            echo '<img class="bads lazy" data-original="'.ROOT.'apps/_ee/files/fsa-eligible-logo.png " />';
        }else if($badges == 'Both'){
            echo '<img class="bads lazy" data-original="'.ROOT.'apps/_ee/files/freemie-compatible-logo.png" /><img class="bads lazy" data-original="'.ROOT.'apps/_ee/files/fsa-eligible-logo.png " />';
        }else{
            echo '';
        }
        
        ?>
    </p>
    
</div>

<br>
    <div class="clearfix">&nbsp;</div>
<br>

<!--Open Model id# <?php echo $id; ?>-->
<div class="modal fade prody" tabindex="-1" role="dialog" id="prod-<?php echo $id; ?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title fancy"><?php echo "{$title}" ?></h4>
      </div>
      <div class="modal-body">
          
          <div class="col-md-4">
              <img style="width:100%;" src="<?php echo ROOT; ?>apps/_ee/files/<?php echo $img; ?>" />
          <?php
        
            if($badges == 'Freemie'){
                echo '<img class="bads" src="'.ROOT.'apps/_ee/files/freemie-compatible-logo.png" />';
            }else if($badges == 'FSA'){
                echo '<img class="bads" src="'.ROOT.'apps/_ee/files/fsa-eligible-logo.png " />';
            }else if($badges == 'Both'){
                echo '<img class="bads" src="'.ROOT.'apps/_ee/files/freemie-compatible-logo.png" /><img class="bads " src="'.ROOT.'apps/_ee/files/fsa-eligible-logo.png " />';
            }else{
                echo '';
            }

            ?>
          </div>
        
        <div class="col-md-8">
            <div><?php echo $script; ?></div>
            <br>
        </div>
        
      </div>
      <div class="clearfix"></div>
      <div class="modal-footer">
          <span class="text-muted pull-left"><b>Grade: </b>
              <?php echo "{$grade}";?>
          </span>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--Close Model id# <?php echo $id; ?>-->