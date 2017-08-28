<!--Table row for post # <?php echo $id; ?> -->
<tr class="bPosts">
            
       <td><?php echo $id; ?></td>
      
          <td><?php echo $company; ?></td>
          
              <td><?php echo $title; ?></td>
                 
                 <td> <?php echo substr(strip_tags($script),0,155).'...'; ?> </td>
                 
                     <td> <?php echo $grade; ?> </td>
    
            <td><?php echo $img; ?></td>
    
    <td><?php echo $badges; ?></td>
        
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
        <h4 class="modal-title fancy" id="myModalLabel">Update Product - <?php echo $title; ?></h4>
      </div>
      <div class="modal-body">
   
                  <form class="form" method="post" style="">
                          
                      <input type="hidden" name="id" value="<?php echo $id; ?>">
                                           
                      <div class="form-group">
                      <label>Product Name:</label><br>
                      <input class="form-control col-md-12" required type="text" name="prodName" value="<?php echo $title; ?>">
                      <br><br>
                      </div>
                      
                      <div class="form-group">
                   
                       <label style="margin-top:20px;" >Image:</label><br>
                       
                       <select class="form-control form-group col-md-12" name="image">
                       <option value="">Select</option>
					   <?php

						  $directory = 'apps/_ee/files';
						  $blocks = 'img_select';
						  $other = $img;
						  tpDirect($directory,$blocks,$other);
					   
					   ?>
                       </select>
                   
                        </div>
                      
                      <div class="form-group">
                      <label>Badge:</label><br>
                          <select class="form-control form-group col-md-12" name="badges">
                              <option value="">Select</option>
                          <?php
                              
                              $bad = array('Freemie','FSA','Both','None');
                              
                              foreach($bad as $bads){
                                  if($badges == $bads){ $selected = 'selected="selected"'; }else{$selected = '';};
                                  echo '<option '.$selected.' value="'.$bads.'">'.$bads.'</option>';
                              }
                              
                              ?>
                          </select>
                      <br><br>
                      </div>
                      
                      <div style="margin-bottom:20px;" class="form-group">
                   
                       <label>Product info:</label>
                       <textarea type="text" rows="5" class="form-control col-md-12 ckeditor" name="script">
                          <?php echo $script; ?>
                          </textarea>
                   
                      </div>
                      
                      <div style="margin-bottom:10px;" class="form-group" id="html">
                      
                      </div>
                      
                      <div class="form-group">
                      <label>Grade:</label><br>
                          <select class="form-control form-group col-md-12" name="grade">
                              <option value="">Select</option>
                          <?php
                              
                              $gra = array('Home','Hosp','Access');
                              
                              foreach($gra as $gras){
                                  if($grade == $gras){ $selected = 'selected="selected"'; }else{$selected = '';};
                                  echo '<option '.$selected.' value="'.$gras.'">'.$gras.'</option>';
                              }
                              
                              ?>
                          </select>
                      <br><br>
                      </div>
                      
                      <div class="form-group">
                      <label>Company:</label><br>
                          <select class="form-control form-group col-md-12" name="company">
                              <option value="">Select</option>
                          <?php
                              
                              $comp = array('Ameda','Ardo','Freemie','Hygeia','Lansinoh','Medela','Spectra','Nuroo');
                              
                              foreach($comp as $comps){
                                  if($company == $comps){ $selected = 'selected="selected"'; }else{$selected = '';};
                                  echo '<option '.$selected.' value="'.$comps.'">'.$comps.'</option>';
                              }
                              
                              ?>
                          </select>
                      <br><br>
                      </div>
                      <span><br></span>
                      
                      <input type="submit" name="edited" class="btn btn-default" value="Edit" />
                      
                      <img style="width:100px;float:right;" src="<?php echo ROOT; ?>apps/_ee/files/<?php if(!empty($img)){echo $img;}else{ echo 'image.png'; } ?>"  /><br><br><br>
                  
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
<!--End table row for post # <? echo $id; ?> -->