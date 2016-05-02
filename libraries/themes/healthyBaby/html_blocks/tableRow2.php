
<!--Table row for post # <? echo $id; ?> -->
<tr>
            
   <td><?php if($edit == 'false'){ echo $title; }else{ echo '<a href="'.ROOT.''.$title.'">'.$title.'</a>'; }; ?></td>
  
    <td> <?php if($edit == 'false'){ echo '<span style="color:grey;">No</span>'; }else{ echo '<span style="color:green;">Yes</span>'; }; ?> </td>
               
       <td><?php echo $heading; ?></td>
             
           <td> <?php echo $keywords; ?> </td>
           
               <td> <?php echo $script; ?> </td>
        
    <td> 
    
    <button type="button" class="btn btn-default btn-md" data-toggle="modal" data-target="#myModal2-<?php echo $id; ?>">
    
     <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
     
    </button> 
    
    <!-- Modal -->
<div class="modal fade" id="myModal2-<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Update Page - <?php echo $title; ?></h4>
      </div>
      <div class="modal-body">
   
                  <form class="form" method="post" style="">
                          
                      <input type="hidden" name="id" value="<?php echo $id; ?>">
                                           
                      <div class="form-group">
                      <label>Page Name:</label><br>
                      <input class="form-control col-md-12" required type="text" name="name" value="<?php echo $title; ?>">
                      <br><br>
                      </div>
                      
                      <div class="form-group">
                      <label>Page Editable <span class="text-muted">(Yes or No)</span>?</label><br>
                      <select class="form-control col-md-12" type="text" name="editable">
                          <option value="Please choose a selection.">Select</option>
                          <option value="false" <?php if($edit == 'false'){ echo 'selected="selected"'; }else{ echo ''; }; ?>>No</option>
                          <option value="true" <?php if($edit == 'true'){ echo 'selected="selected"'; }else{ echo ''; }; ?>>Yes</option>
                      </select>
                      <br><br>
                      </div>
                      
                      <div class="form-group">
                      
                      <?php 
					  
					  if($edit == 'false'){
						  
						  echo '<label>Html:</label><br><textarea class="form-control col-md-12 ckeditor" id="upDate" rows="5" name="html" value="'.htmlspecialchars($html).'"><p>'.htmlspecialchars($html).'</p></textarea><br><br>';
						  }else{ echo ''; };
					  
					  ?>
                      
                      </div>
                      
                      <div class="form-group">
                      <label>Page Title:</label><br>
                      <input class="form-control col-md-12" requires type="text" name="title" value="<?php echo $heading; ?>">
                      <br><br>
                      </div>
                      
                      <div class="form-group">
                      <label>Page Key Words:</label><br>
                      <input class="form-control col-md-12" requires type="text" name="key" value="<?php echo $keywords; ?>">
                      <br><br>
                      </div>
                      
                      <div style="margin-bottom:10px;" class="form-group">
                      <label>Page Description:</label><br>
                      <textarea class="form-control col-md-12" rows="5" name="script" value="<?php echo $script; ?>"><?php echo $script; ?></textarea>
                      <br><br>
                      </div>
                      
                      <span><br><br></span>
                      
                      <input type="submit" name="edited" class="btn btn-default" value="Edit" />
                  
                  </form><br><br>
        
      </div>
    </div>
  </div>
</div>
 <!--Close Modal--> 
    
     </td>
     
     
    <td>
    
    <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#myModal-<?php echo $id; ?>">
    
     <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
     
    </button>
    
    
    <!-- Modal -->
<div class="modal fade" id="myModal-<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Are you sure you want to delete - Id# <?php echo $id; ?></h4>
      </div>
      <div class="modal-body">
   
                  <form method="post" style="text-align:center;">
                          
                      <input type="hidden" name="id" value="<?php echo $id; ?>">
                      <input type="hidden" name="title" value="<?php echo $title; ?>">
                      <input type="submit" name="delete" class="btn btn-default" value="Delete" />
                  
                  </form><br><br>
        
      </div>
    </div>
  </div>
</div>
 <!--Close Modal--> 
        
    </td>
    
</tr>
<!--End table row for post # <? echo $id; ?> -->
