
<!-- Insert form-->
<form method="post">
                               
               <input type="hidden" name="id" />
               
                   <div class="form-group">
                   
                       <label>Title:</label>
                       <input type="text" required class="form-control col-md-12" name="title" />
                   
                   </div><br><br>
                   
                <div style="margin-bottom:20px;" class="form-group">
                   
                       <label>Post:</label>
                       <textarea type="text" rows="5" class="form-control col-md-12 ckeditor" name="post"></textarea>
                   
                </div>
                
                <div class="form-group">
                   
                       <label style="margin-top:20px;" >Image:</label><br>
                       
                       <select class="form-control form-group col-md-12" name="img">
                       <option value="">Select</option>
					   <?php

						  $directory = 'apps/dropzone/upload/Posts';
						  $blocks = 'img_select';
						  $other = false;
						  direct($directory,$blocks,$other);
					   
					   ?>
                       </select>
                   
                </div>
                
                <div class="form-group">
                   
                       <label style="margin-top:20px;" >Date:</label>
                       <input type="text" id="datepicker" require class="form-control col-md-12" name="date" value="<?php echo(date("m/d/Y")); ?>" />
                   
                </div><br><br>
                
                <div class="form-group">
                   
                       <input type="submit" class="btn btn-primary" name="inserted" value="Submit" />
                   
                </div>
               
               <br><br>
           
</form> 
<!--Close insert form-->                               
                                 