<?php

$location = 'careers';

//deletes records
$delete = new delete();
$delete->del($location);

?>

<a class="col-md-12" href="<?php echo ROOT.'Employment-'.$job; ?>"><h3><?php echo $job; ?></h3></a>

    <p class="col-md-8"><?php echo substr($script, 0, 255).'...'; ?><br><br>
    
    </p>

<a href="<?php echo ROOT.'Employment-'.$job; ?>" class="col-md-2 btn btn-new">Apply</a>

<?php
$sessKey = md5($_SERVER['SERVER_ADDR'].' - cesi');
				if(isset($_SESSION[''.$sessKey.''])){
					echo'
 <button class="btn btn-danger col-md-1 col-md-offset-1" data-toggle="modal" data-target="#myModal'.$id.'">
        <span class="glyphicon glyphicon-trash"></span>
</button>'; 

echo '<!-- Modal -->
<div class="modal fade" id="myModal'.$id.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Are you sure you want to delete - Id# '. $id .'</h4>
      </div>
      <div class="modal-body">
   
                  <form method="post" style="text-align:center;">
                          
                      <input type="hidden" name="id" value="'.$id.'">
                      <input type="submit" name="delete" class="btn btn-default" value="Delete" />
                  
                  </form><br><br>
        
      </div>
    </div>
  </div>
</div>
 <!--Close Modal-->';
}

?>
        