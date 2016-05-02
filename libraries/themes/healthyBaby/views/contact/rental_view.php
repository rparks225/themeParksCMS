<?php tpBlock('CTA'); ?>

<!--Open Cont area-->
  <div class="row cont">
   
              <div class="col-md-9">
                  
                  <!--Open Title-->
                    <div class="titles">
                            <hr>
                        <h1>Breast Pump Rental Service</h1>
                    </div>  
                 <!--Close Title-->
                 
                 <h2>Get Started!</h2>
                 
                 <p>It's easy to rent a hospital grade breast pump from Healthy Baby Essentials! Get started today! Just fill out the online form or the printable form below, someone will contact you.</p>
                 
                 <div id="#contact_form_response"></div>
                 
         <form method="post" id="contact_form" action="<?php echo ROOT; ?>includes/email/_includes/rental_form.php" enctype="multipart/form-data" class="secure">

            <div class="col-md-6 form-group"> 
                
                Mother's Full Name<span style="color:red;">*</span><br />
                <input required class="form-control" type="input" id="full_name" name="full_name" style="background-color:#e8e2ec" />
                
             </div>

            <div class="col-md-6 form-group">
                
                Mother's Address<span style="color:red;">*</span><br />
                <input required class="form-control" id="address" type="input"  name="address" style="background-color:#e8e2ec" />
                
             </div>

            <div class="col-md-4 form-group">
                
                City<span style="color:red;">*</span><br />
                <input required class="form-control" type="input" id="city" name="city" style="background-color:#e8e2ec" />
                
             </div>

            <div class="col-md-4 form-group">
    
                State<span style="color:red;">*</span><br />
                <select required class="form-control" name="state" id="state" style="background-color:#e8e2ec">
                    <option value="">Select State</option>
                    <option value="AL">Alabama</option>
                    <option value="AK">Alaska</option>
                    <option value="AZ">Arizona</option>
                    <option value="AR">Arkansas</option>
                    <option value="CA">California</option>
                    <option value="CO">Colorado</option>
                    <option value="CT">Connecticut</option>
                    <option value="DE">Delaware</option>
                    <option value="DC">District Of Columbia</option>
                    <option value="FL">Florida</option>
                    <option value="GA">Georgia</option>
                    <option value="HI">Hawaii</option>
                    <option value="ID">Idaho</option>
                    <option value="IL">Illinois</option>
                    <option value="IN">Indiana</option>
                    <option value="IA">Iowa</option>
                    <option value="KS">Kansas</option>
                    <option value="KY">Kentucky</option>
                    <option value="LA">Louisiana</option>
                    <option value="ME">Maine</option>
                    <option value="MD">Maryland</option>
                    <option value="MA">Massachusetts</option>
                    <option value="MI">Michigan</option>
                    <option value="MN">Minnesota</option>
                    <option value="MS">Mississippi</option>
                    <option value="MO">Missouri</option>
                    <option value="MT">Montana</option>
                    <option value="NE">Nebraska</option>
                    <option value="NV">Nevada</option>
                    <option value="NH">New Hampshire</option>
                    <option value="NJ">New Jersey</option>
                    <option value="NM">New Mexico</option>
                    <option value="NY">New York</option>
                    <option value="NC">North Carolina</option>
                    <option value="ND">North Dakota</option>
                    <option value="OH">Ohio</option>
                    <option value="OK">Oklahoma</option>
                    <option value="OR">Oregon</option>
                    <option value="PA">Pennsylvania</option>
                    <option value="RI">Rhode Island</option>
                    <option value="SC">South Carolina</option>
                    <option value="SD">South Dakota</option>
                    <option value="TN">Tennessee</option>
                    <option value="TX">Texas</option>
                    <option value="UT">Utah</option>
                    <option value="VT">Vermont</option>
                    <option value="VA">Virginia</option>
                    <option value="WA">Washington</option>
                    <option value="WV">West Virginia</option>
                    <option value="WI">Wisconsin</option>
                    <option value="WY">Wyoming</option>
                  </select>
                
                 </div>

                
                <div class="col-md-4 form-group">
                    
                    ZIP Code<span style="color:red;">*</span><br />
                    <input required class="form-control" type="input" id="zip"  name="zip" style="background-color:#e8e2ec;" /> 
                    
                 </div>

                <div class="col-md-6 form-group">
                    
                    Phone Number<span style="color:red;">*</span><br />
                    <input required class="form-control" type="input" id="phone"  name="phone" style="background-color:#e8e2ec;"  />
                    
                 </div>

                <div class="col-md-6 form-group">
                    
                    Mother's Email Address<span style="color:red;">*</span><br />
                    <input required class="form-control" id="email" type="email"  name="email" style="background-color:#e8e2ec" />
                    
                 </div>

                <div class="col-md-6 form-group">
                    
                    Baby Due Date<span style="color:red;">*</span><br />
                    <input required class="form-control" type="input" id="due_date"  name="due_date" style="background-color:#e8e2ec;" />
                    
                 </div>

                <div class="col-md-6 form-group">
                    
                    Mother's Date of Birth<span style="color:red;">*</span><br />
                    <input required class="form-control" type="input" id="dob"  name="dob" style="background-color:#e8e2ec;"  />
                    
                 </div>

                 <div class="col-md-6 form-group">
                 
                    Mother's Insurance Provider<br />
                    <input class="form-control" type="input" id="insurance_prov"  name="insurance_prov" style="background-color:#e8e2ec;"  />
                     
                    </div>

                 <div class="col-md-6 form-group">
                 
                    Mother's Insurance ID<br />
                    <input class="form-control" type="input" id="insurance_id"  name="insurance_id" style="background-color:#e8e2ec;" />
                     
                    </div>

                 <div class="col-md-6 form-group">
                 
                    Physician's Name<span style="color:red;">*</span><br />
                    <input required class="form-control" type="input" id="physi_name"  name="physi_name" style="background-color:#e8e2ec;"  />
                     
                    </div>

                 <div class="col-md-6 form-group">
                 
                    Physician's Number<span style="color:red;">*</span><br />
                    <input required class="form-control" type="input" id="physi_num"  name="physi_num" style="background-color:#e8e2ec;"  />
                     
                    </div>

                 <div class="col-md-12 form-group">
                 
                    How You Heard About Us<span style="color:red;">*</span><br />
                    <textarea required class="form-control" name="heard" rows="4" style="background-color:#e8e2ec" id="heard"></textarea>
                     
                    </div>

                 <div class="col-md-6 form-group">
                 
                    <input required type="checkbox" value="Yes" name="insurance"/>
                     <span class="pull-left">I'm interested in renting under my insurance plan</span>
                     
                     <br><br>
                      <input class="btn btn-warning" type="submit" value="Submit"  />
                     
                    </div>

                </form>
                 
                 
                 <div class="clearfix">&nbsp;</div>
                 <div class="clearfix">&nbsp;</div>
                 
                 
                 <span class="e-ease ee:wwig" id="_<?php echo title(); ?>">
                 
                   <?php newEE(title());?>
                 
                 </span>
                 
              </div>
              
          <?php tpBlock('sideBar'); ?>

  </div>
<!--Close Cont area-->                 