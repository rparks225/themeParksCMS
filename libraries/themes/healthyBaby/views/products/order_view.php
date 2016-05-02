<?php tpBlock('CTA'); global $msg; ?>

<!--Open Content-->
    <div class="cont row" id="<?php echo title(); ?>">

        <div class="col-md-9">
            
            <!--Open Title-->
             <div class="titles">
                     <hr>
                 <h1>Accessories Order Form</h1>

             </div>  
             <!--Close Title-->
             
             <h2>Get Started!</h2>
                    <p>If you subscribe to BC Mass, Tufts, Neighborhood Health or Health Plans, Inc. you can get your breast pump shipped today. All you need is a physician order and we take care of everything else and best of all shipping is FREE. </p>
                    <br />
                    
                    <?php echo $msg; ?>
            
            <form method="post" id="contact_form" action="includes/email/_includes/access_form.php" class="secure" enctype="multipart/form-data">
                        
                        <div style="clear:both;"></div>
                        
                        <div class="easyForm" style="margin-bottom:30px;">
                        	
                            <h3 class="fancy" >Your Information</h3>
                            
                            <div class="col-md-6 form-group">
                                <label for="full_name">Full Name</label><span style="color:red;">*</span><br />
                                <input required class="form-control" type="input" id="full_name" name="full_name" style="background-color:#e8e2ec"  value=""/>
                             </div>
                                 
                                 <div class="col-md-6 form-group">
                                    <label for="address">Address</label><span style="color:red;">*</span><br />
                                    <input required class="form-control" id="address" type="input"  name="address" style="background-color:#e8e2ec" />
                                 </div>                                                         
                                
                                  <div class="col-md-4 form-group">
                                      <label for="city">City</label><span style="color:red;">*</span><br />
                                      <input required class="form-control" type="input" id="city" name="city" style="background-color:#e8e2ec" />
                                  </div>
                                        
                            <div class="col-md-4 form-group">
                                <label for="state">State</label><span style="color:red;">*</span><br />
                                <input required class="form-control" name="state" id="state" style="background-color:#e8e2ec" value="Massachusetts">
                            </div>
                            
                                  <div class="col-md-4 form-group">
                                      <label for="zip">ZIP Code</label><span style="color:red;">*</span><br />
                                      <input required class="form-control" pattern="[0-9]*" maxlength="5" type="input" id="zip"  name="zip" style="background-color:#e8e2ec;" />
                                  </div>                                                      
                                
                            <div class="col-md-6 form-group">    
                                <label for="phone">Phone Number</label><span style="color:red;" >*</span><br />
                                <input required class="form-control" type="input" id="phone" placeholder="Phone number"  name="phone" style="background-color:#e8e2ec;"  />
                            </div>
                            
                                <div class="col-md-6 form-group">
                                    <label for="email">Email Address</label><span style="color:red;">*</span><br />
                                    <input required class="form-control" id="email" type="email" placeholder="Email"  name="email" style="background-color:#e8e2ec" />
                                </div>   
                                
                                 
                                
                                 <div class="col-md-12 form-group">   
                                     <label for="promo">Promo Code</label><br />
                                     <input class="form-control" id="promo" type="input" placeholder="Enter promo code here"  name="promo" style="background-color:#e8e2ec" />
                                 </div>   
                            
                            <div class="col-md-12 form-group">                            
                                <label for="heard">How You Heard About Us</label><span style="color:red;">*</span><br />
                                <textarea required class="form-control" name="heard" rows="8" style="background-color:#e8e2ec" id="heard">
                                </textarea>
                            </div>
                            
                        </div>
                                
                                
                        <div class="clearfix">&nbsp;</div> 
                            <div class="clearfix">&nbsp;</div> 
                      
                        <div class="easyForm" id='accessories' style="margin-bottom:30px;">
                            <h3 class="fancy" >Breast Pump Accessories</h3>
                            
                        		 
                                	<br />
                                	<p>You can now adapt your Medela or Ameda to the Freemie hands-free system. </p>
                                    <p>Freemie Collection Cups Deluxe Set is compatible with the Medela Advanced Starter Set & Medela Pump In Style. Purchase the Deluxe Set & Connection Kit to adapt the Ameda Purely Yours.</p>
                                    
                            
                                <div class="col-md-6 form-group">
                                     <a href="#inline-1" rel="prettyPhoto">
                                         <img src="https://www.healthybabyessentials.com/_images/products/freemie-collection.jpg" height="150"/>
                                     </a>

                                        <div class="clearfix"></div>

                                    <a href="#inline-1" rel="prettyPhoto" >
                                        Freemie Collection Cups Deluxe Set
                                    </a> 

                                        <input type="checkbox" name="accessories[]" value="Freemie Collection Cups Deluxe Set $55" id="accessory1"/> ($55)
                                </div>       
                            
                             <div class="col-md-6 form-group">
                                 
                                     <a href="#inline-2" rel="prettyPhoto" >
                                         <img src="https://www.healthybabyessentials.com/_images/products/connection-kit-ameda-lg.jpg" height="150"/>
                                     </a>
                                 <br />
                                 
                                 <a href="#inline-2" rel="prettyPhoto" >Freemie Connection Kit for Ameda</a> <input type="checkbox" name="accessories[]" value="Freemie Connection Kit for Ameda $18" id="accessory2"/> ($18)
                                 
                             </div>
                                    
                                     
                            <div class="col-md-6 form-group">
                                
                                    <a href="#inline-3" rel="prettyPhoto" >
                                        <img src="https://www.healthybabyessentials.com/_images/accessories/NuRoo_Pocket_PROD_Black.jpg" height="150"/>
                                    </a>
                                
                                <br />
                            
                                    <select class="pull-left form-control" name="accessories[]" id="colorSize" style="width:50%;margin-right:15px;">
                                    
                                        <option value="">Please Select a Size</option>

                                        <option value="X Small/ Small - Black">X Small/ Small - Black</option>
                                        <option value="X Small/ Small - Teal">X Small/ Small - Teal</option>
                                        <option value="Medium - Black">Medium - Black</option>
                                        <option value="Medium - Teal">Medium - Teal</option>
                                        <option value="Large/ X Large - Black">Large/ X Large - Black</option>
                                        <option value="Large/ X Large - Teal">Large/ X Large - Teal</option>
                                        <option value="2Xl">2Xl - Black</option>
                                        <option value="2XL">2XL - Teal</option>
                                    
                                    </select>
                                    
                                     <a href="#inline-3" rel="prettyPhoto" >The NuRoo Pocket Set</a> 
                                <input type="checkbox" name="accessories[]" value="The NuRoo Pocket Set $59.99" id="accessory3"/> ($59.99)
                                
                             </div>
                                    
                                    
                            <div class="col-md-6 form-group">
                                <a href="#inline-4" rel="prettyPhoto" >
                                    <img src="https://www.healthybabyessentials.com/_images/accessories/08120_N++Roo_PROD_GrayStripe_1000x1000.jpg" height="150"/>
                                </a>
                                    <br />
                                <a href="#inline-4" rel="prettyPhoto" >
                                    The NuRoo Nursing Scarf
                                </a> 
                                
                                    <input type="checkbox" name="accessories[]" value="The NuRoo Nursing Scarf $29.99" id="accessory3"/> ($29.99)
                            </div>
                            
                            
                                <div class="clearfix">&nbsp;</div>
                            <div class="clearfix">&nbsp;</div>
                                 
                            
                            <p>*Please note that, prices above are <strong>NOT</strong> including shipping ($10) and tax.</p>
                        </div>
                        
                
                        <div class="easyForm" style="margin-bottom:30px;position:relative;display:none;" id="cc_info" >
                            
                            <h3 class="fancy" >Credit Card Information</h3>
                            
                           
                            	<input required name='check_cc' type="hidden" value="cc_hide" />
                                	
                                    	Your credit card information is required in case your Insurance company denies the claim through no fault of HBE. In this case you will be notified of the charges prior to charging your credit card.<br /><br />
                                    
                        <div class="form-inline">   
                            
                           Credit Card Type<span style="color:red;">*</span>

                                <select required class="form-control" name="cctype" id="cctype" style="background-color:#e8e2ec">
                                    <option value="">Select One</option>
                                        <option value="Visa">Visa</option>
                                        <option value="MasterCard">MasterCard</option>
                                        <option value="AmericanExpress">American Express</option>

                                </select>
                                <img src="../_images/assets/cc-type.png" height="18" style="vertical-align:text-bottom"/>
                         </div>    
                                        
                            <div class="clearfix">&nbsp;</div>
                            
                            
                        <div class="form-inline">     
                                
                           Credit Card #<span style="color:red;">*</span>
                                <input required class="form-control" type="text" id="ccn" name="ccn"/>
                            
                         </div>    
                            
                            <div class="clearfix">&nbsp;</div>
                            
                            <div class="form-inline"> 
                                
                             Expiration Date<span style="color:red;">*</span>

                                <select required class="form-control" name="exmonth" id="exmonth" style="width:100px; background-color:#e8e2ec">
                                    <option value="">Month</option>
                                        <option value="01">01</option>
                                        <option value="02">02</option>
                                        <option value="03">03</option>
                                        <option value="04">04</option>
                                        <option value="05">05</option>
                                        <option value="06">06</option>
                                        <option value="07">07</option>
                                        <option value="08">08</option>
                                        <option value="09">09</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>

                                </select>
                                
                                <select required class="form-control" name="exyear" id="exyear" style="width:100px; background-color:#e8e2ec">
                                    <option value="">Year</option>
                                        <option value="2014">2014</option>
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>


                                </select>
                                
                              </div>    
                                    
                            <div class="clearfix">&nbsp;</div>
                            
                            <div class="form-inline">
                                
                                     CCV #<span style="color:red;">*</span>
                                     
                                    	<input required class="form-control" type="text" id="ccv" name="ccv" placeholder="3 or 4 digits on the back"/>
                                    <br>
                                					
                            <img alt="" src="../_images/products/fsa-eligible-logo.png" width="90px" />
                                
                            </div>    
                            
                        </div>
						
                        <div class="easyForm" style="margin-bottom:30px;">
                            <h3 class="fancy" >Authorization</h3>
                            
                            
                            	<input type=hidden name="ipAddress" id="ipAddress" value="" /> <!--I authorize Enos HBE to bill my Insurance Company for equipment listed above
and I agree to pay any copays or other charges not covered by my insurance.
Enos HBE will notify me prior to shipping of any listed copays.
If for any reason my  insurer denies the claim through no fault of Enos HBE,
I will be notified that my credit card will be charged for the pump.-->
I authorize Enos HBE to charge my credit card for the items selected above.<br/><br/>

                                     Signature<span style="color:red;">*</span> (use mouse to draw your signature, or draw with finger on touch devices)
                                     <br><br>
                                    	  <div class="sigPad">
											<div class="sig sigWrapper">
											  <div class="typed"></div>
											  <canvas class="pad" width="300" height="55"></canvas>    
                                                <ul style="list-style:none;padding:0;" class="pull-left sigNav">
											  <li class="clearButton"><a class="btn btn-default" href="#clear">Clear</a></li>
											</ul>
                                                
											  <input required type="hidden" name="output" id="output" class="output">
											</div>
										  </div>
                                								
                            
                        </div>
                                
                                 <input  class="btn btn-warning" type="submit" value="Submit Order"  id="btnsubmit"/>
                            
                        
                    </form>

        </div>

    <?php tpBlock('sideBar'); ?>
        
</div>
<!--Close Content-->

<?php tpBlock('popUps'); ?>

<div id='foo' style="position:absolute; bottom:500px;right:50%"></div>