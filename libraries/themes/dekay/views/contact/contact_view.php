<?php

require_once 'includes/PHPMailer/PHPMailerAutoload.php';
require_once 'includes/email/mail.php';
global $sName;

?>

<!--Open Cont area-->
  <div class="cont">
      <div class="container">
          <div class="row">
   
              <div class="col-md-8">
                  <h1 class="fancy">Contact <span class="blueish">Us</span></h1><br>
                  
                  <p>Please use this form for questions related to <b><?php echo $sName; ?></b> or simply to say hi. All valid emails will be answered within 48 hours.</p>
                     
                     <br>
                     <?php echo $msg1; ?>
                    <form method="post" id="schedule" action="" style="text-align:left;width:80%;">
                        
                        <input type="hidden" name="op" value="" />
                            
                            <div class="form-group">
                            <label>Name</label>
                            <input name="" type="text" required class="form-control" id="name" />
                            </div>
                            
                            <div class="form-group">
                            <label>Email</label>
                            <input name="email" type="email" required class="form-control" id="email" />
                            </div>
                            
                            <div class="form-group">
                            <label>Address</label>
                            <input name="address" type="text" required class="form-control" id="address" />
                            </div>
                            
                            <div class="form-group">
                            <label>Zip</label>
                            <input name="zip" pattern="[0-9]*" maxlength="5" required class="form-control" id="zip" />
                            </div>
                            
                            <div class="form-group">
                            <label>Comment</label>
                            <textarea name="comment" rows="10" class="form-control" id="comment"></textarea>
                            </div>
                            
                            <div class="clearfix"></div> 
                            
                            <?php echo $captcha; ?>
                            
                            <input class="btn btn-warning" type="submit" name="shortForm" value="Submit" />
                            
                    </form> 
                 
                  <br><br>

              </div>
              
                  <?php require_once 'libraries/themes/'.theme().'/html_blocks/sideBar.php'?>
                  
          </div>
          
      </div>
  </div>
  <!--Close Cont area-->
