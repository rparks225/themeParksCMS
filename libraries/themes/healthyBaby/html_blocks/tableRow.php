
<!--Table row for post # <?php echo $id; ?> -->
<tr class="bPosts">
            
       <td><a href="News-Post-<?php echo $id; ?>"><?php echo $title; ?></a></td>
      
          <td><?php echo substr(strip_tags($script),0,155).'...'; ?></td>
          
              <td><a href="apps/dropzone/upload/Posts/<?php echo $img; ?>" rel="prettyPhoto"><img style="width:100px;" src="apps/dropzone/upload/Posts/<?php echo $img; ?>" alt="<?php echo $img; ?>" /></a></td>
                 
                 <td> <?php echo $date; ?> </td>
                 
                     <td> <?php if($update == '0000-00-00'){ echo 'Not Updated'; }else{ echo $update; } ?> </td>
        
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
        <h4 class="modal-title" id="myModalLabel">Update Post - <?php echo $title; ?></h4>
      </div>
      <div class="modal-body">
   
                  <form class="form" method="post" style="">
                          
                      <input type="hidden" name="id" value="<?php echo $id; ?>">
                                           
                      <div class="form-group">
                      <label>Title:</label><br>
                      <input class="form-control col-md-12" type="text" name="title" value="<?php echo $title; ?>">
                      <br><br>
                      </div>
                      
                      <div style="margin-bottom:20px;" class="form-group">
                   
                      <label>Post:</label>                       
                      <textarea class="form-control col-md-12 ckeditor" rows="5" name="post" value="<?php echo $script; ?>"><?php echo $script; ?></textarea>
                   
                      </div>
                      
                      <div class="form-group">
                      <label><br>Image:</label><br>
                      <select class="form-control col-md-12" name="img">
                      <option value="">Select</option>
					   <?php
					   
						  $directory = 'apps/dropzone/upload/Posts';
						  $blocks = 'img_select';
						  $other = ''.$img.'';
						  direct($directory,$blocks,$other);
					  
					   ?>
                       </select><br><br>
                      </div>
                      
                      <div class="form-group">
                      <label>Date:</label><br>
                      <input class="form-control col-md-12" id="datepicker" type="text" name="date" value="<?php echo(date("m/d/Y")); ?>"><br><br>
                      </div>
                      
                      <input type="submit" name="edited" class="btn btn-default" value="Edit" />
                      
                      <img style="width:100px;border:2px solid black;float:right;" src="<?php echo ROOT; ?>apps/dropzone/upload/Posts/<?php if(!empty($img)){echo $img;}else{ echo 'image.png'; } ?>"  /><br><br><br>
                  
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
                      <input type="submit" name="delete" class="btn btn-default" value="Delete" />
                  
                  </form><br><br>
        
      </div>
    </div>
  </div>
</div>
 <!--Close Modal--> 
        
    </td>
    
</tr>
<!--End table row for post # <?php echo $id; ?> -->
