
<!--Open CTA-->
        <div class="row form">
            <div class="col-md-12">
                <div class="backing">
                    <div class="inner">
                        <h1 class="fancy">Breast Pump Request Form</h1>
                        
                        <div class="clearfix">&nbsp;</div>
                        
                        <div class="col-md-6 mob" style="border-right:solid 1px black;">
                            <h3 style="margin:0;padding;0;color:#282166;letter-spacing:5px;" class="fancy">Free Same Day Shipping</h3>
                                <p style="letter-spacing:2.6px;">Easy Ordering if You Subscribe to These Plans</p>
                            <a href="#">
                                <img style="width:85%;" src="images/free-shipping.jpg" alt="">
                            </a>
                        </div>
                        
                        <div class="col-md-6 col-sm-12" style="text-align:center;">
                            <p>
                                Fill Out Our Request Form to See If You Qualify For an Insurance Covered Breast Pump
                            </p>
                            <br>
                            <button data-toggle="modal" href="#form" class="btn btn-warning">
                                Begin Here
                            </button>
                        </div>
                        
                        <div class="clearfix"></div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!--Close CTA-->
        
        
        <!-- Open Modal -->
        <div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title fancy" id="myModalLabel">Easy Order Form</h4>
              </div>
              <div class="modal-body">
                  
                 <form method="POST" class="secure" id="contact_form" name="smallForm" action="<?php echo ROOT; ?>includes/email/_includes/request_form.php" style="text-align:left;">
                     <input type="hidden" name="simpleCheck" id="simpleCheck" value="false">
                <div class="col-md-6">   
                    
                  <div class="form-group">
                    <label for="full_name">Mother’s Full Name*</label>
                    <input type="text" required class="form-control" name="full_name" id="full_name">
                  </div>
                     
                  <div class="form-group">
                    <label for="phone">Phone Number *</label>
                    <input type="tel" required class="form-control" name="phone" id="phone">
                  </div>
                    
                  <div class="form-group">
                    <label for="email">Mother’s Email Address*</label>
                    <input type="email" required class="form-control" name="email" id="email">
                  </div>    
                    
                  <div class="form-group">
                    <label for="due_date">Baby Due Date*</label>
                    <input type="date" required class="form-control" name="due_date" id="due_date">
                  </div>   
                    
                  <div class="form-group">
                    <label for="dob">Mother’s Date of Birth *</label>
                    <input type="date" required class="form-control" name="dob" id="dob">
                  </div>  
                    
                </div>    
                     
                <div class="col-md-6">   
                     
                  <div class="form-group">
                    <label for="insurance_id">Mother’s Insurance ID</label>
                    <input type="text" required class="form-control" name="insurance_id" id="insurance_id">
                  </div>  
                    
                  <div class="form-group">
                    <label for="insurance">Mother’s Insurance Provider</label>
                      <select required class="form-control" name="insurance" id="insurance">
                        <option value="">Select</option>
                        <option value="Harvard Pilgrim">Harvard Pilgrim</option>
                        <option value="Health Plans Inc">Health Plans Inc.</option>
                        <option value="Blue Cross MA">Blue Cross MA</option>
                        <option value="Blue Cross other">Blue Cross (other)</option>
                        <option value="Tufts">Tufts</option>
                        <option value="United HC">United HC</option>
                        <option value="CIGNA">CIGNA</option>
                        <option value="BMC">BMC</option>
                        <option value="Fallon">Fallon</option>
                        <option value="Unicare">Unicare</option>
                        <option value="Neighborhood Health">Neighborhood Health</option>
                        <option value="Masshealth Standard">Masshealth Standard</option>
                        <option value="Network Health">Network Health</option>
                        <option value="Tricare">Tricare</option>
                        <option value="Blue Cross LA">Blue Cross LA</option>
                        <option value="United Harvard Passport">United/Harvard Passport</option>
                        <option value="other">Other</option>
                      </select>
                  </div>  
                    
                    <div class="form-group" id="insurance_sup" style="display:none;">Enter Insurance Provider:
			        <input class="form-control" name="insurance_sup" type="input" style="width:185px; background-color:#e8e2ec"/></div>
                    
                  <div class="form-group">
                    <label for="action">How You Want Us To Respond*</label>
                      <select form="contact_form" required class="form-control" name="action" id="action">
                        <option value="">Select</option>
                        <option value="Send me a form I can sign on my computer or touchscreen device">Send me a form I can sign on my computer or touchscreen device</option>
                        <option value="Proceed to online ordering">Proceed to online ordering</option>
                        <option value="Send me a form I can print and sign">Send me a form I can print and sign</option>
                        <option value="Mail me a form I can sign and return">Mail me a form I can sign and return</option>
                      </select>
                  </div>      
                    
                  <div class="form-group">
                    <label for="heard">How You Heard About Us*</label>
                      <textarea rows="3" required class="form-control" name="heard" id="heard"></textarea>
                  </div>   
                     
                  <button type="submit" class="btn btn-warning">Submit</button>
                    
               </div>    
                    
                </form>
                  
                  <div class="clearfix">&nbsp;</div>  
                  
              </div>
              <div class="modal-footer" style="text-align:center;">
                <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                  <p class="fancy">Thank you for choosing Healthy Baby Essentials</p>
              </div>
            </div>
          </div>
        </div>
        <!--Close Modal-->
        
        
        <br>
        <div class="clearfix">&nbsp;</div>
