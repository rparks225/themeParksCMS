<?php tpBlock('CTA'); ?>

<!--Open Cont area-->
  <div class="row cont" id="survey">
   
              <div class="col-md-9">
                  
                  <!--Open Title-->
                    <div class="titles">
                            <hr>
                        <h1>Customer Satisfaction Survey</h1>
                    </div>  
                 <!--Close Title-->
                  
                  <p>Enos Healthy Baby Essentials strives to provide service that is in a class by itself. But the real test is whether we meet your expectations.

Please help us learn how we can improve our performance. Excellence in providing home and institutional medical services is our primary goal.

Thank you for taking the time to fill out this Medial Services Report Card®. Your response will help us provide better service to our clients in the future.<br><br>
                      
                      <strong>Choose your rates: 5 = Excellent; 4 = Good; 3 = Average; 2 = Fair; 1 = Poor;</strong>
                  </p>
                     
                     <br>
                     <?php echo $msg1; ?>
                    <form method="post" id="contact_form" action="includes/email/_includes/survey_form.php" class="secure">
                                
                               <div class="form-group">
                                   <b>1.  The equipment and/or supplies were delivered at the agreed upon time.</b>
                                   
                                   <br>
                                            <label>
                                                <input type="radio" name="q1" value="5" />
                                                5</label>
                                            <label>
                                                <input type="radio" name="q1" value="4" />
                                                4</label>
                                            <label>
                                                <input type="radio" name="q1" value="3" />
                                                3</label>
                                            <label>
                                                <input type="radio" name="q1" value="2" />
                                                2</label>
                                            <label>
                                                <input type="radio" name="q1" value="1" />
                                                1</label>
                                </div>
                                
                                <div class="form-group">
                                    <b>Comment:</b>
                                        <input required class="form-control" name="comment1" size="100" maxlength="90" />
                                </div>
                                
                                    <br><br>
                        
                                <div class="form-group">
                                    <b>2.  The equipment and/or supplies were clean when received.</b>
                                   <br>
                                        <label>
                                            <input type="radio" name="q2" value="5" />
                                            5</label>
                                        <label>
                                            <input type="radio" name="q2" value="4" />
                                            4</label>
                                        <label>
                                            <input type="radio" name="q2" value="3" />
                                            3</label>
                                        <label>
                                            <input type="radio" name="q2" value="2" />
                                            2</label>
                                        <label>
                                            <input type="radio" name="q2" value="1" />
                                            1</label>
                                        
                                </div>
                        
                                <div class="form-group">
                                    <b>Comment:</b>
                                        <input class="form-control" name="comment2" size="100" maxlength="90" />
                                </div>
                        
                                    <br><br>
                                
                                 <div class="form-group">
                                     <b> 3.  The equipment operates properly.</b> <br/>
                                    
                                            <label>
                                                <input type="radio" name="q3" value="5" />
                                                5</label>
                                            <label>
                                                <input type="radio" name="q3" value="4" />
                                                4</label>
                                            <label>
                                                <input type="radio" name="q3" value="3" />
                                                3</label>
                                            <label>
                                                <input type="radio" name="q3" value="2" />
                                                2</label>
                                            <label>
                                                <input type="radio" name="q3" value="1" />
                                                1</label>
                                </div>
                                
                                
                                <div class="form-group">
                                    <b>Comment:</b>
                                        <input name="comment3" maxlength="90" class="form-control">
                                </div>
                        
                                    <br><br>
                                
                                <div class="form-group">
                                    <b>4. Adequate instructions were provided for the safe use of the equipment. </b>
                                    <br/>
                                            <label>
                                                <input type="radio" name="q4" value="5" />
                                                5</label>
                                            <label>
                                                <input type="radio" name="q4" value="4" />
                                                4</label>
                                            <label>
                                                <input type="radio" name="q4" value="3" />
                                                3</label>
                                            <label>
                                                <input type="radio" name="q4" value="2" />
                                                2</label>
                                            <label>
                                                <input type="radio" name="q4" value="1" />
                                                1</label>
                                        
                                </div>
                        
                                <div class="form-group">
                                    <b> Comment:</b> 
                                        <input name="comment4" size="100" maxlength="90" class="form-control">
                                </div>
                        
                                  <br><br>
                  
                                <div class="form-group">
                                    <b>5. Our staff was courteous and helpful. </b>
                                    <br>
                                            <label>
                                                <input type="radio" name="q5" value="5" />
                                                5</label>
                                            <label>
                                                <input type="radio" name="q5" value="4" />
                                                4</label>
                                            <label>
                                                <input type="radio" name="q5" value="3" />
                                                3</label>
                                            <label>
                                                <input type="radio" name="q5" value="2" />
                                                2</label>
                                            <label>
                                                <input type="radio" name="q5" value="1" />
                                                1</label>
                                        
                                </div>
                  
                                <div class="form-group">
                                    <b> Comment:</b>
                                        <input name="comment5" size="100" maxlength="90" class="form-control">
                                </div>
      
                                    <br><br>
                  
                                <div class="form-group">
                                    <b>6. Our response to your questions, problems and concerns was timely. </b>
                                    <br>
                                            <label>
                                                <input type="radio" name="q6" value="5" />
                                                5</label>
                                            <label>
                                                <input type="radio" name="q6" value="4" />
                                                4</label>
                                            <label>
                                                <input type="radio" name="q6" value="3" />
                                                3</label>
                                            <label>
                                                <input type="radio" name="q6" value="2" />
                                                2</label>
                                            <label>
                                                <input type="radio" name="q6" value="1" />
                                                1</label>
                                        
                                </div>
      
                                <div class="form-group">
                                    <b> Comment:</b>
                                        <input name="comment6" size="100" maxlength="90" class="form-control">
                                </div>
                                
                                    <br><br>
                  
                                <div class="form-group">
                                    <b>7. Our business practices allow easy &amp; understandable access to equipment, items, services and information. </b><br>
                                   
                                            <label>
                                                <input type="radio" name="q7" value="5" />
                                                5</label>
                                            <label>
                                                <input type="radio" name="q7" value="4" />
                                                4</label>
                                            <label>
                                                <input type="radio" name="q7" value="3" />
                                                3</label>
                                            <label>
                                                <input type="radio" name="q7" value="2" />
                                                2</label>
                                            <label>
                                                <input type="radio" name="q7" value="1" />
                                                1</label>
                                        
                                </div>

                                <div class="form-group">
                                    <b> Comment:</b>
                                        <input name="comment7" size="100" maxlength="90" class="form-control">
                                </div>

                                    <br><br>

                                <div class="form-group">
                                    <b>8. Our staff provided you with a packet which included information about Pt. rights, responsibilities and privacy. </b><br>
                                   
                                            <label>
                                                <input type="radio" name="q8" value="5" />
                                                5</label>
                                            <label>
                                                <input type="radio" name="q8" value="4" />
                                                4</label>
                                            <label>
                                                <input type="radio" name="q8" value="3" />
                                                3</label>
                                            <label>
                                                <input type="radio" name="q8" value="2" />
                                                2</label>
                                            <label>
                                                <input type="radio" name="q8" value="1" />
                                                1</label>
                                        
                                </div>

                                <div class="form-group">
                                    <b> Comment:</b>
                                        <input name="comment8" size="100" maxlength="90" class="form-control">
                                </div>
                                
                                    <br><br>
                                
                                <div class="form-group">
                                    <b>9. Staff gives brief explanation of what my insurance covers, and what my financial responsibilities will be. </b>
                                    <br>
                                            <label>
                                                <input type="radio" name="q9" value="5" />
                                                5</label>
                                            <label>
                                                <input type="radio" name="q9" value="4" />
                                                4</label>
                                            <label>
                                                <input type="radio" name="q9" value="3" />
                                                3</label>
                                            <label>
                                                <input type="radio" name="q9" value="2" />
                                                2</label>
                                            <label>
                                                <input type="radio" name="q9" value="1" />
                                                1</label>
                                        
                                </div>
                        
                                <div class="form-group">
                                    <b> Comment:</b>
                                        <input name="comment9" size="100" maxlength="90" class="form-control">
                                </div>
                                
                                    <br><br>
                                
                                <div class="form-group">
                                    <b>10. Have you ever shopped on healthybabyessentials.com?</b>
                                    <br>
                                    
                                            <label>
                                                <input type="radio" name="q10" value="Yes" />
                                                Yes</label>
                                            <label>
                                                <input type="radio" name="q10" value="No" />
                                                No</label>
                                        
                                    <b> Comment:</b>
                                        <input name="comment10" size="100" maxlength="90" class="form-control">
                                </div>
                                
                                    <br><br>
                                
                                <div class="form-group">
                                    <b>11. What can we do to improve our services?</b>
                                <br><br>
                                    <b> Comment:</b>
                                        <input name="comment11" size="100" maxlength="90" class="form-control">
                                </div>
                                
                                
                                <div class="form-group">
                                    <b>12. What products do we not currently carry that you would like to see offered? </b>
                                <br><br>
                                    <b>Comment:</b>
                                        <input name="comment12" size="100" maxlength="90" class="text_field">
                                </div>
                        
                            <br><br>
                            <p>Your name and address (complete if you’d like to be entered in our raffle)</p>
                            
                            <div class="form-group">
                                
                            <div class="col-md-6">
                               <input class="form-control" type="input" id="full_name" value="Full Name" name="full_name" onfocus="if(this.value=='Full Name')this.value='';" />
                                
                                <br>
                                <input class="form-control" type="input" id="phone" value="Phone" name="phone" onfocus="if(this.value=='Phone')this.value='';" />
                                
                                 <br>
                                <input class="form-control" type="input" id="address" value="Street Address" name="address" onfocus="if(this.value=='Street Address')this.value='';" />
                                
                                 <br>
                                   <input class="form-control" type="input" id="city" value="City" name="city" onfocus="if(this.value=='City')this.value='';" />
                                <br>
                                <input class="form-control" type="input" id="state" value="State" name="state" onfocus="if(this.value=='State')this.value='';" />
                                
                                </div>
                                
                                <div class="col-md-6">
                               
                                    <input class="form-control" type="input" id="zip" value="Zip" name="zip" onfocus="if(this.value=='Zip')this.value='';" />
                               <br>
                                    <input class="form-control" id="email" type="input" value="Email Address" name="email" onfocus="if(this.value=='Email Address')this.value='';" />
                                <br>
                                 <textarea class="form-control" id="comments" name="comments" rows="4"  onfocus="if(this.value=='Comments/Questions')this.value='';">Comments/Questions</textarea>
                                	<br>
                                    <button class="btn btn-default" name="reset" type="reset">Clear</button> 
                                    
                                    &nbsp;<button class="btn btn-default" type="submit">Submit</button>
                                    
                                </div>    
                                    
                                </div>
                           
                        </form>
                 
                  <br><br>

              </div>
              
          <?php tpBlock('sideBar'); ?>

  </div>
  <!--Close Cont area-->