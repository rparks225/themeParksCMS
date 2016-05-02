<?php tpBlock('CTA'); ?>

<!--Open Cont area-->
  <div class="row cont">
   
              <div class="col-md-9">
                  
                  <!--Open Title-->
                    <div class="titles">
                            <hr>
                        <h1>Breast Pump Easy Ordering</h1>
                    </div>  
                 <!--Close Title-->
                 
                 <h2>Get Started!</h2>
                 
                 <p>If you subscribe to BC Mass, Tufts, Neighborhood Health or Health Plans, Inc. you can get your breast pump shipped today. All you need is a physician order and we take care of everything else and shipping within Massachusetts is free.</p>

                    <div class="easyForm" style="margin-bottom:30px; border:0px;margin:0; padding:0;">
                    	<div id="contact_form_response" style="display: none;"></div>
                    </div>
                    <form method="post" id="contact_form" action="https://www.healthybabyessentials.com/newSite/includes/email/_includes/easy_ordering_form.php" class="secure" enctype="multipart/form-data">
                        
                        <div class="clearfix"></div>
                        	
                            <br />
                            <h3 class="fancy" >Mother's Information</h3>
                        
                        <div class="col-md-6 form-group">
                            
                             Full Name<span style="color:red;">*</span><br />
                             <input required class="form-control" type="text" id="full_name" name="full_name" style="background-color:#e8e2ec"  value="<?php echo $_GET['full_name'];?>"/>
                            
                        </div>    
                            
                        <div class="col-md-6 form-group">
                            
                             Address<span style="color:red;">*</span><br />
                             <input required class="form-control" id="address" type="text"  name="address" style="background-color:#e8e2ec" />
                            
                         </div>    
                                
                        
                         <div class="col-md-4 form-group">
                             
                             City<span style="color:red;">*</span><br />
                             <input required class="form-control" type="text" id="city" name="city" style="background-color:#e8e2ec" />
                             
                          </div>
                        
                          <div class="col-md-4 form-group">
                              
                             State<span style="color:red;">*</span><br />
                             <input required class="form-control" name="state" id="state" style="background-color:#e8e2ec" value="Massachusetts">
                        
                          </div>  
                        
                          <div class="col-md-4 form-group">

                             ZIP Code<span style="color:red;">*</span><br />
                             <input required class="form-control" pattern="[0-9]*" maxlength="5" type="text" id="zip"  name="zip" style="background-color:#e8e2ec;" />
                        
                          </div>      
                            
                          <div class="col-md-6 form-group">
                              
                             Phone Number<span style="color:red;" >*</span><br />
                             <input required class="form-control" type="tel" id="phone" value="<?php echo $_GET['phone'];?>"  name="phone" style="background-color:#e8e2ec;"  />
                              
                          </div>      
                        
                          <div class="col-md-6 form-group">
                            
                             Email Address<span style="color:red;">*</span><br />
                             <input required class="form-control" id="email" type="email" value="<?php echo $_GET['email'];?>"  name="email" style="background-color:#e8e2ec" />
                           
                          </div>      
                                
                        
                          <div class="col-md-6 form-group">
                              
                              Date of Birth<span style="color:red;">*</span><br />
                              <input required class="form-control" type="date" id="dob" value="<?php echo $_GET['dob'];?>"  name="dob" style=" background-color:#e8e2ec;"  />
                              
                          </div>      
                        
                          <div class="col-md-6 form-group">
                              
                              Baby Due Date<span style="color:red;">*</span><br />
                              <input required class="form-control" type="date" id="due_date" value="<?php echo $_GET['due_date'];?>" name="due_date" style=" background-color:#e8e2ec;" />
                        
                           </div>
                  
                           <div class="col-md-6 form-group">
                               
                               Insurance Provider<span style="color:red;">*</span>
                                  <select required class="form-control" name="insurance" id="insurance" style="background-color:#e8e2ec">
                                            <?php

                                                $ins = array(
                                                    '' => 'Select One',
                                                    'BC-mass'=>'Blue Cross (Massachusetts residents)',
                                                    'BMC'=>'BMC Healthnet',
                                                    'HarvardPilgrim'=>'Harvard Pilgrim',
                                                    'HealthPlansInc'=>'Health Plans Inc',
                                                    'MassHealt_Stand'=>'Masshealth Standard',
                                                    'NHP_Comm'=>'Neighborhood Health Plan (Commercial)',
                                                    'NHP_MH'=>'Neighborhood Health Plan (Masshealth)',
                                                    'TuftsHealth_HMO'=>'Tufts Health HMO/PPO/EPO/POS',
                                                    'TuftsHealth_Dir'=>'Tufts Health Direct/Unify (Network Health Commercial)',
                                                    'TuftsHealth_Togeth'=>'Tufts Health Together (Network Health Masshealth)'
                                                );

                                                foreach( $ins as $var => $ins ): 
                                            ?>
                                                <option value="<?php echo $var ?>"<?php if( $var == $_GET['insurance'] ): ?> selected="selected"<?php endif; ?>><?php echo $ins ?></option>
                                            <?php endforeach; ?>

                                    </select>
                               
                              </div>   
                  
                              <div class="col-md-6 form-group">
                                  
                                Insurance ID<span style="color:red;">*</span><br />
                                <input required class="form-control" type="text" id="insurance_id" value="<?php echo $_GET['insurance_id'];?>"  name="insurance_id" style="background-color:#e8e2ec;" />
                                  
                              </div>      
                  <div class="col-md-6 form-group">
                                Physician's Name<span style="color:red;">*</span><br />
                                <input required class="form-control" type="text" id="physi_name"  name="physi_name" style="background-color:#e8e2ec;"  />
                  </div>
                  
                  <div class="col-md-6 form-group">
                                Physician's Tel Number<span style="color:red;">*</span><br />
                                <input required class="form-control" type="tel" id="physi_num"  name="physi_num" style="background-color:#e8e2ec;"  />
                  </div>
                  
                  <div class="col-md-6 form-group">
                                Your Benefit Limit<span style="color:red;"></span><br />
                                <input class="form-control" type="text" id="benefit_limit"  name="benefit_limit" style="background-color:#e8e2ec;" readonly/>
                  </div>
                  
                  <div class="col-md-6 form-group">
                                MD Script ( <a href="#inline-upload" rel="prettyPhoto" >Upload Instructions</a> ) or fax to 1-508-404-1761<br />
                                <input type="file" name="file" id="file"><br />
                                        
                  </div>
                  
                  <div class="col-md-12 form-group">
                                How You Heard About Us<span style="color:red;">*</span><br />
                                <textarea required class="form-control" name="heard" rows="4" style="background-color:#e8e2ec"  id="heard"><?php echo $_GET['heard'];?></textarea>
                  </div>
                  
                  
                        <div class="easyForm" style="margin-bottom:30px; display:none" id="basic_items">
                            <h3 class="fancy" >Breast Pump Information</h3>
                            <table width="470px" border="0" cellspacing="0" cellpadding="5" align="center">
                              
                               <!-- covered pump set 1: normal-->
                               
                               <tbody id="basic_pump"></tbody>
                               
                              	<tr>
                                	<td colspan="3" align="left">
                                    	<p><input type="radio" id="enable_upgrade" name="pump_model" value="Interested in upgrading pumps"/> I'm interested in upgrading to another model for an additional cost.</p>
                                        <p>As a mother, you have the ability to upgrade your pump to your personal preference in the event that your insurance does not cover a specific pump. If you choose this upgrade option, note that your insurance does not cover the upgrade fee and you are responsible for any payment not covered by tour insurer. By signing below, you acknowledge you have read and understand this notice.</p>
                                        	
                                    </td>
                                </tr>
                            </table>
                        </div>
                        
                        <div class="easyForm" id='upgrade_items' style="margin-bottom:30px; display:none;">
                            <h3 class="fancy" >Upgrade Items</h3>
                            
                            <table width="470px" border="0" cellspacing="0" cellpadding="5" align="center">
                            	<tbody id="upgrade"></tbody>
                    
                                <tr>
                                	<td colspan="3"><p><em>* You may select more than 1 item, then we will give you the upgrade cost in our follow up communication and your credit card will not be charged until you authorize the upgrade cost.</em></p>
                                    
                                    </td>
                                </tr>
                              
                            </table>
                        </div>
                        <div class="easyForm" id='accessories' style="margin-bottom:30px display:none; display:none;">
                            <h3 class="fancy" >Breast Pump Accessories</h3>
                            
                            <table width="470px" border="0" cellspacing="0" cellpadding="5" align="center">
                        		<tr id="accessory">
                                	<br />
                                	<p>You can now adapt your Medela or Ameda to the Freemie hands-free system. </p>
                                    <p>Freemie Collection Cups Deluxe Set is compatible with the Medela Advanced Starter Set & Medela Pump In Style. Purchase the Deluxe Set & Connection Kit to adapt the Ameda Purely Yours.</p>
                                	<td width="33%" style="vertical-align:text-top"><a href="#inline-8" rel="prettyPhoto" ><img src="https://www.healthybabyessentials.com/_images/products/freemie-collection.jpg" height="100"/></a><br /><input type="checkbox" name="accessories[]" value="Freemie Collection Cups Deluxe Set $55" id="accessory1"/> <a href="#inline-8" rel="prettyPhoto" >Freemie Collection Cups Deluxe Set</a> ($55)</td>
                                    <td width="33%" style="vertical-align:text-top"><a href="#inline-9" rel="prettyPhoto" ><img src="https://www.healthybabyessentials.com/_images/products/connection-kit-ameda-lg.jpg" height="100"/></a><br /><input type="checkbox" name="accessories[]" value="Freemie Connection Kit for Ameda $18" id="accessory2"/> <a href="#inline-9" rel="prettyPhoto" >Freemie Connection Kit for Ameda</a> ($18)</td>
                                   
                                </tr>
                                
                                <tr>
                                    <td width="33%" style="vertical-align:text-top"><a href="#inline-31" rel="prettyPhoto" ><img src="https://www.healthybabyessentials.com/_images/accessories/NuRoo_Pocket_PROD_Black.jpg" height="100"/></a><br /><input type="checkbox" name="accessories[]" value="The NuRoo Pocket Set $59.99" id="accessory3"/> <a href="#inline-31" rel="prettyPhoto" >The NuRoo Pocket Set</a> 
                                    
                                    <br />
                                    
                                    <select name="accessories[]" id="colorSize" style="width:100px;">
                                    
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
                                    
                                    
                                    
                                    <br />($59.99)</td>
                                    
                                    <td width="33%" style="vertical-align:text-top"><a href="#inline-32" rel="prettyPhoto" ><img src="https://www.healthybabyessentials.com/_images/accessories/NuRoo_Scarf_PROD_GrayStripe_3_hires.jpg" height="100"/></a><br /><input type="checkbox" name="accessories[]" value="The NuRoo Nursing Scarf $29.99" id="accessory3"/> <a href="#inline-32" rel="prettyPhoto" >The NuRoo Nursing Scarf</a> <br />($29.99)</td>
                                   </tr>
                                 
                            </table>
                            <p>*Please note that, prices above are <strong>NOT</strong> including shipping ($10) and tax.</p>
                        </div>
                        
                        <div class="easyForm" style="margin-bottom:30px; display:none;position:relative;" id="cc_info" >
                            <h3 class="fancy" >Credit Card Information</h3>
                            
                            <table width="470px" border="0" cellspacing="0" cellpadding="5" align="center">
                            	<input name="check_cc" type="hidden" value="cc_hide" />
                            	<tr>
                                	<td valign="top" align="left" colspan="2">
                                    	Your credit card information is required in case your Insurance company denies the claim through no fault of HBE. In this case you will be notified of the charges prior to charging your credit card.<br />
                                    </td>
                          		</tr>
                                <img alt="" src="https://www.healthybabyessentials.com/_images/products/fsa-eligible-logo.png" width="90px" style="position:absolute; right:10px; top:70px;" />
                                <tr>
                                    <td valign="top" align="left"> Credit Card Type<span style="color:red;">*</span></td>
                                    <td valign="top" align="left">
                                    	<select required name="cctype" id="cctype" style="width:130px; background-color:#e8e2ec">
                                            <option value="">Select One</option>
                                                <option value="Visa">Visa</option>
                                                <option value="MasterCard">MasterCard</option>
                                                <option value="AmericanExpress">American Express</option>
                                            
                                        </select>
                                        <img src="https://www.healthybabyessentials.com/_images/assets/cc-type.png" height="18" style="vertical-align:text-bottom"/>
                                        </td>
                                        
                                </tr>
                                <tr>
                                    <td valign="top" align="left"> Credit Card #<span style="color:red;">*</span></td>
                                    <td valign="top" align="left">
                                    	<input required type="text" id="ccn" name="ccn"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top" align="left"> Expiration Date<span style="color:red;">*</span></td>
                                    <td valign="top" align="left">
                                    	<select required name="exmonth" id="exmonth" style="width:100px; background-color:#e8e2ec">
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
                                        <select required name="exyear" id="exyear" style="width:100px; background-color:#e8e2ec">
                                            <option value="">Year</option>
                                                <option value="2014"><?php $date = date('Y'); echo $date; ?></option>
                                                <option value="2015"><?php echo ++$date; ?></option>
                                                <option value="2016"><?php echo ++$date; ?></option>
                                                <option value="2017"><?php echo ++$date; ?></option>
                                                <option value="2018"><?php echo ++$date; ?></option>
                                                <option value="2019"><?php echo ++$date; ?></option>
                                                
                                            
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top" align="left"> CCV #<span style="color:red;">*</span></td>
                                    <td valign="top" align="left">
                                    	<input required type="text" id="ccv" name="ccv" placeholder="3 or 4 digits on the back"/>
                                    </td>
                                </tr>					
                            </table>
                            
                        </div>
						
                        <div class="easyForm" style="margin-bottom:30px;">
                            <h3 class="fancy" >Authorization</h3>
                            
                            <table border="0" cellspacing="0" cellpadding="5" align="center">
                            	<input type="hidden" name="ipAddress" id="ipAddress" value="<?php print $_SERVER['REMOTE_ADDR']; ?>" />
								
                                <div class="col-md-12">I authorize Enos HBE to bill my Insurance Company for equipment listed above
and I agree to pay any copays or other charges not covered by my insurance.
Enos HBE will notify me prior to shipping of any listed copays.
If for any reason my  insurer denies the claim through no fault of Enos HBE,
I will be notified that my credit card will be charged for the pump. <br><br>
                                
                                    Signature<span style="color:red;">*</span><br>(use mouse to draw your signature, or draw with finger on touch devices)
                                </div>
                                    
                                    <div class="clearfix">&nbsp;</div>
                                    <div class="clearfix">&nbsp;</div>
                                    
                                    <div class="col-md-12">
                                    	  <div class="sigPad">
											<div class="sig sigWrapper">
											  <div class="typed"></div>
											  <canvas class="pad" width="300" height="55"></canvas>    <ul style="padding-left:0;list-style:none;" class="pull-left sigNav">
											  <li class="clearButton"><a class="btn btn-default" href="#clear">Clear</a></li>
											</ul>
											  <input type="hidden" name="output" id="output" class="output">
											</div>
										  </div>

										  <script src="https://www.healthybabyessentials.com/sig/jquery.signaturepad.js"></script>
										  <script>
											$(document).ready(function() {
											  $('.sigPad').signaturePad({drawOnly:true});
											});
										  </script>
										  <script src="https://www.healthybabyessentials.com/sig/assets/json2.min.js"></script>
                                    </div>
                                </tr>								
                            </table>
                        </div>
						
                        
                        <table>
                            <tr>
                            	<input id="approved" name="approved" type="checkbox" value="I am at least 32 weeks pregnant or nursing an infant under 1 years old." />I am at least 32 weeks pregnant or nursing an infant under 1 years old.
                            </tr>
                            
                            <br><br>
                            <tr>
                                
                                <td align="right"><input type="submit" class="btn btn-warning" value="Submit Order"  id="btnsubmit" disabled/></td>
                            </tr>
                        </table>
                    </form>
                    <br />
                    
                </div>

      <?php tpBlock('sideBar'); ?>

  </div>
<!--Close Cont area-->       

<?php tpBlock('popUps2'); ?>