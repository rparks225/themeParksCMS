<?php

$name = $_REQUEST["name"];
$email = $_REQUEST["email"];
$address = $_REQUEST["address"];
$zip = $_REQUEST["zip"];
$comment = $_REQUEST["comment"];
$response = $_REQUEST["g-recaptcha-response"];
$msg = '';

require_once 'includes/PHPMailer/PHPMailerAutoload.php';
require_once 'includes/email/mail.php';

?>

<?php tpBlock('CTA'); ?>

<!--Open Cont area-->
  <div class="row cont">
   
              <div class="col-md-9">
                  
                  <!--Open Title-->
                    <div class="titles">
                            <hr>
                        <h1>Contact Us</h1>
                    </div>  
                 <!--Close Title-->
                  
                  <p>Please use this form for questions related to our Healthy Baby Essentials or simply to say hi. All valid emails will be answered within 48 hours.</p>
                     
                     <br>
                     <?php echo $msg1; ?>
                    <form method="post" id="schedule" action="" style="text-align:left;width:80%;">
                        
                        <input type="hidden" name="op" value="" />
                            
                            <div class="form-group">
                            <label>Name</label>
                            <input name="name" type="text" required class="form-control" id="name" />
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
                  
                  <!--Open Title-->
                    <div class="titles">
                            <hr>
                        <h1>Driving Directions</h1>
                    </div>  
                 <!--Close Title-->
                  
                  <iframe src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d94707.77331539353!2d-71.2783994!3d42.1156532!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x89e47d0012805f05%3A0xa57436673028a64c!2s1600+Boston+Providence+Highway++Suite+123+Walpole%2C+MA+02081!3m2!1d42.115605599999995!2d-71.23859759999999!5e0!3m2!1sen!2sus!4v1459449596865" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

              </div>
              
          <?php tpBlock('sideBar'); ?>

  </div>
  <!--Close Cont area-->
