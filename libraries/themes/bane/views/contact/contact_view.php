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

<!--Open Body Conetent-->
    <div class="cont">
        <div class="container">
            <div class="row">
                
                <?php 
                
                  $linked = array('About'=>'The BaneCare Story','Leadership'=>'Meet the Team','Mission'=>'Mission','Contact'=>'Contact Us');
               
                  tpBlock('sideBar'); 
                  secNav($linked);
                
                ?>
   
              <div class="col-md-9">
                  
                  <!--Open Title-->
                    <h1 class="fancy">Contact Us</h1>
                    <hr>
                 <!--Close Title-->
                  
                  <p>Please use this form for questions related to our BaneCare Facilities or for general inqueries. All valid emails will be answered within 48 hours.</p>
                     
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
                  
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2942.187444751219!2d-71.11782748453967!3d42.48756747917853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e374922e862579%3A0x5ee503341a0fd55a!2s500+Unicorn+Park+Dr%2C+Woburn%2C+MA+01801!5e0!3m2!1sen!2sus!4v1463589861996" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                  
                </div>

            </div>
        </div>
    </div>
<!--Close Body Content-->
        
        <br><br>
