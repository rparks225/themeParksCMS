<!-- Modal -->
<div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title fancy" id="myModalLabel">Insert New Product</h4>
      </div>
      <div class="modal-body">
   
                  <form class="form" method="post" style="">
                          
                      <input type="hidden" name="id" value="">
                                           
                      <div class="form-group">
                      <label>Product Name:</label><br>
                      <input class="form-control col-md-12" required type="text" name="prodName" value="">
                      <br><br>
                      </div>
                      
                      <div class="form-group">
                   
                       <label style="margin-top:20px;" >Image:</label><br>
                       
                       <select class="form-control form-group col-md-12" name="image">
                       <option value="">Select</option>
					   <?php

						  $directory = 'apps/_ee/files';
						  $blocks = 'img_select';
						  $other = false;
						  tpDirect($directory,$blocks,$other);
					   
					   ?>
                       </select>
                   
                        </div>
                      
                      <div class="form-group">
                      <label>Badge:</label><br>
                          <select class="form-control form-group col-md-12" name="badges">
                              <option value="">Select</option>
                          <?php
                              
                              $gra = array('Freemie','FSA','Both','None');
                              
                              foreach($gra as $gras){
                                  echo '<option value="'.$gras.'">'.$gras.'</option>';
                              }
                              
                              ?>
                          </select>
                      <br><br>
                      </div>
                      
                      <div style="margin-bottom:20px;" class="form-group">
                   
                       <label>Product info:</label>
                       <textarea type="text" rows="5" class="form-control col-md-12 ckeditor" name="script"></textarea>
                   
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
                                  echo '<option value="'.$gras.'">'.$gras.'</option>';
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
                                  echo '<option value="'.$comps.'">'.$comps.'</option>';
                              }
                              
                              ?>
                          </select>
                      <br><br>
                      </div>
                      <span><br></span>
                      
                      <input type="submit" name="inserted" class="btn btn-default" value="Submit" />
                  
                  </form>
        
      </div>
    </div>
  </div>
</div>
 <!--Close Modal--> 