<?php

$name = $_REQUEST["name"];
$email = $_REQUEST["email"];
$address = $_REQUEST["address"];
$zip = $_REQUEST["zip"];
$comment = $_REQUEST["comment"];
$loc = $_REQUEST["location"];
$response = $_REQUEST["g-recaptcha-response"];

require_once 'includes/PHPMailer/PHPMailerAutoload.php';
require_once 'includes/email/mail.php';

?>

 <!--Open Content-->
        <div id="cont">
            
            <div class="container">
                
                <div class="newItems">
                    
                    <div class="row">

                        <div class="col-md-4">
                            <img src="images/3342.png" alt="" />

                            <div class="script">
                                <h4 class="fancy">Rainbow Toker</h4>
                                    <br>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim...</p>
                                <div class="clearfix">&nbsp;</div>
                                <button class="btn btn-new col-md-offset-8" href="#">Buy Now</button>
                            </div>    

                        </div>

                             <div class="col-md-4">
                                <img alt="" src="images/11869.png" />

                                 <div class="script">
                                    <h4 class="fancy">Green Goblin</h4>
                                        <br>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim...</p>
                                    <div class="clearfix">&nbsp;</div>
                                    <button class="btn btn-new col-md-offset-8" href="#">Buy Now</button>
                                </div>    

                            </div>

                         <div class="col-md-4">
                            <img alt="" src="images/22571.png" />

                             <div class="script">
                                <h4 class="fancy">Pink Panther</h4>
                                    <br>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim...</p>
                                <div class="clearfix">&nbsp;</div>
                                <button class="btn btn-new col-md-offset-8" href="#">Buy Now</button>
                            </div> 

                        </div>

                    </div>

                </div>    

                <div class="clearfix">&nbsp;</div>
                <div class="clearfix">&nbsp;</div>
                
                    <div class="row">
                        <div class="col-md-8">
                            <h3 class="fancy">Contact Us</h3>
                            
                            <span>

                                <?php 
                                    //Breadcrumb Trail
                                    $trail = array(title() => 'Contact Us');
                                    breadcrumbs($trail); 
                                ?>

                            </span>
                            
                            <?php if(isset($msg1)){ echo $msg1; } ?>
                            
                             <p>Please use this form for questions related Dankvision Medias or simply to say hi. All valid emails will be answered within 48 hours.</p>
                     
                     <br>
                     
                    <form method="post" id="schedule" action="" style="text-align:left;width:80%;">
                        
                        <input type="hidden" name="op">
                            
                            <div class="form-group">
                            <label for="name">Name</label>
                            <input name="name" type="text" required class="form-control" id="name" />
                            </div>
                            
                            <div class="form-group">
                            <label for="email">Email</label>
                            <input name="email" type="email" required class="form-control" id="email" />
                            </div>
                            
                            <div class="form-group">
                            <label for="address">Address</label>
                            <input name="address" type="text" required class="form-control" id="address" />
                            </div>
                            
                            <div class="form-group">
                            <label for="zip">Zip</label>
                            <input name="zip" pattern="[0-9]*" maxlength="5" required class="form-control" id="zip" />
                            </div>
                            
                            <div class="form-group">
                            <label for="comment">Comment</label>
                            <textarea name="comment" rows="10" class="form-control" id="comment"></textarea>
                            </div>
                            
                            <div class="clearfix"></div> 
                            
                            <?php echo $captcha; ?>
                            
                            <input class="btn btn-new" type="submit" name="shortForm" value="Submit" />
                            
                    </form> 
                            
                        </div>
                        
                        <?php require_once 'libraries/themes/'.theme().'/html_blocks/sideBar.php'?>
                        
                        <div class="clearfix"></div>
                        
                        <br><br><br><br>
                        
                    </div>
                </div>
            
            <div id="bg"></div>
        
            <iframe id="map" class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d94006.43319796583!2d-71.8633048636054!3d42.582867671496494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x89e3e64eca2b5bf7%3A0x8e6f343faa216e1f!2sSimonds+Hall+Student+Housing+Fitchburg%2C+MA!3m2!1d42.582889!2d-71.79326499999999!5e0!3m2!1sen!2sus!4v1453689300357" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
        
        </div>    
        <!--Close Content-->
