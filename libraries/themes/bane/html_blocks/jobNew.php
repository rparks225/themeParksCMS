<!-- Modal -->
<div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Insert New Job</h4>
      </div>
      <div class="modal-body">
   
                  <form class="form" method="post" style="">
                          
                      <input type="hidden" name="id" value="">
                                           
                      <div class="form-group">
                      <label>Job Name:</label><br>
                      <input class="form-control col-md-12" required type="text" name="job" value="">
                      <br><br>
                      </div>
                      
                      <div class="form-group">
                      <label>Facility</label><br>
                      <select required class="form-control col-md-12" type="text" name="facility">
                          <option value="Please choose a selection." active>Select</option>
                          <option value="Arlington">Arlington</option>
                          <option value="Burlington">Burlington</option>
                          <option value="Concord">Concord</option>
                          <option value="Groton">Groton</option>
                          <option value="Milton">Milton</option>
                      </select>
                      <br><br>
                      </div>
                      
                      <div style="margin-bottom:10px;" class="form-group">
                      <label>Job Description:</label><br>
                      <textarea class="form-control col-md-12" rows="5" name="script" value=""></textarea>
                      <br><br>
                      </div>
                      
                      <span><br></span>
                      
                      <div style="margin-bottom:10px;" class="form-group">
                      <label>Date:</label><br>
                      <input class="form-control col-md-4" name="date" required id="datepicker" placeholder="<?php echo date('d/m/Y'); ?>" value="" />
                      <br><br>
                      </div>
                      
                      <input type="submit" name="inserted" class="btn btn-default" value="Submit" />
                  
                  </form>
        
      </div>
    </div>
  </div>
</div>
 <!--Close Modal--> 