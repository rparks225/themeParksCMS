<?php

$name = $_REQUEST["name"];
$email = $_REQUEST["email"];
$address = $_REQUEST["address"];
$zip = $_REQUEST["zip"];
$facility = ''.title(2).'';
$request = $_REQUEST["request"];
$comment = $_REQUEST["comment"];
$response = $_REQUEST["g-recaptcha-response"];
$msg1 = '';

require_once 'includes/PHPMailer/PHPMailerAutoload.php';
require_once 'includes/email/facilityMail.php';

?>

<!--Open Body Conetent-->
    <div class="cont">
        <div class="container">
            <div class="row">
                
                <?php 
                
                if(title(2) == 'Abbott-House' || title(2) == 'The-Bostonian' || title(2) == 'Devereux-House' || title(2) == 'Rosewood'){

                         $page = array(
                        ''.title(2).'-skilled-nursing-home-rehabilitation'=>''.implode(' ',explode('-',title(2))).'',
                        ''.title(2).'-skilled-programs-services'=>'Programs/Services',
                        ''.title(2).'-leadership-team'=>'Leadership',
                        ''.title(2).'-skilled-nursing-photo-gallery'=>'Photo Gallery',
                        ''.title(2).'-virtual-tours'=>'Virtual Tours',
                        ''.title(2).'-Alliance'=>'Alliance Health',
                        ''.title(2).'-contact-referrals'=>'Contact and Referrals',
                        );

                }else if(title(2) == 'Sugar-Hill'){
                    
                     $page = array(
                        ''.title(2).'-assisted-living-home-rehabilitation'=>''.implode(' ',explode('-',title(2))).'',
                        ''.title(2).'-assisted-living-programs-services'=>'Programs/Services',
                        ''.title(2).'-leadership-team'=>'Leadership',
                        ''.title(2).'-assisted-living-photo-gallery'=>'Photo Gallery',
                        ''.title(2).'-virtual-tours'=>'Virtual Tours',
                        ''.title(2).'-contact-referrals'=>'Contact and Referrals',
                        );
                    
                }else if(title(2) == 'Hancock-Park'){

                         $page = array(
                        ''.title(2).'-skilled-nursing-home-rehabilitation'=>''.implode(' ',explode('-',title(2))).'',
                        ''.title(2).'-skilled-programs-services'=>'Programs/Services',
                        ''.title(2).'-leadership-team'=>'Leadership',
                        ''.title(2).'-skilled-nursing-photo-gallery'=>'Photo Gallery',
                        ''.title(2).'-virtual-tours'=>'Virtual Tours',
                        ''.title(2).'-Assisted-Living-Residency'=>'Assisted Living Residency',
                        ''.title(2).'-contact-referrals'=>'Contact and Referrals',
                        );
                    
                    }else{

                        $page = array(
                        ''.title(2).'-skilled-nursing-home-rehabilitation'=>''.implode(' ',explode('-',title(2))).'',
                        ''.title(2).'-skilled-programs-services'=>'Programs/Services',
                        ''.title(2).'-leadership-team'=>'Leadership',
                        ''.title(2).'-skilled-nursing-photo-gallery'=>'Photo Gallery',
                        ''.title(2).'-virtual-tours'=>'Virtual Tours',
                        ''.title(2).'-contact-referrals'=>'Contact and Referrals',
                        );

                    };
                
                        tpBlock('sideBar');
                        secNav($page);

                ?>
   
              <div class="col-md-9">
                  <?php echo $msg1; ?>
                  
                  <?php
                    $title = title(2);
                    global $pages;

                        $add = $pages[$title]['add'];
                        $phone = $pages[$title]['phone'];
                        $map = $pages[$title]['map'];

                        $trail = array(''.$add.'',''.$phone.'');

                        breadcrumbs($trail);

                    ?>
                  
                  <!--Open Title-->
                    <h1 class="fancy"><?php echo title(2); if(title(2) == 'Sugar-Hill'){ echo ' Assisted Living Community'; }else{ echo ' Skilled Nursing'; }; ?> Contact Referrals</h1>
                    <hr>
                 <!--Close Title-->
                  
                  <p>Please use this form for questions related to our BaneCare Facilities or for general inqueries. All valid emails will be answered within 48 hours.</p>
                     
                     <br>
                     
                    <form method="post" id="schedule" action="" style="<?php echo $hidden; ?>text-align:left;width:80%;">
                        
                        <input type="hidden" name="op" value="" />
                            
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
                            <label for="facility">Facility</label>
                            <input name="facility" id="facility" disabled class="form-control" value="<?php echo title(2); ?>" />
                            </div>
                        
                            <div class="form-group">
                            <label for="request">Request Type</label>
                                <select id="request" name="request" class="form-control">
                                   <option class="active">Select</option>
                                    <?php 
                                    
                                    $types = array(
                                    'General Inquiry'=>'General Inquiry',
                                    'Myself'=>'I Am Looking for Myself',
                                    'Father'=>'I Am Looking for Father',
                                    'Mother'=>'I Am Looking for Mother',
                                    'Aunt'=>'I Am Looking for Aunt',
                                    'Uncle'=>'I Am Looking for Uncle',
                                    'Sister'=>'I Am Looking for Sister',
                                    'Brother'=>'I Am Looking for Brother',
                                    'Cousin'=>'I Am Looking for Cousin',
                                    'Friend'=>'I Am Looking for Friend',
                                    'Other'=>'Other',
                                    );
                                    
                                    foreach($types as $type=>$tits){
                                        
                                        echo '<option value="'.$type.'" >'.$tits.'</option>';
                                            
                                    }
                                    
                                    ?>
                                
                                </select>
                            </div>
                            
                            <div class="form-group">
                            <label for="comment">Comment</label>
                            <textarea name="comment" rows="10" class="form-control" id="comment"></textarea>
                            </div>
                            
                            <div class="clearfix"></div> 
                            
                            <?php echo $captcha; ?>
                            
                            <input class="btn btn-warning" type="submit" name="facilityForm" value="Submit" />
                            
                    </form> 
                 
                  <br><br>
                  
                  <!--Open Title-->
                    <div class="titles">
                            <hr>
                        <h1 class="fancy">Driving Directions</h1>
                    </div>  
                 <!--Close Title-->
                 
                  <?php
                  
                  if(isset($map)){
                      
                      echo '<iframe src="'.$map.'" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>';
                      
                  }else{
                      
                      echo '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2942.187444751219!2d-71.11782748453967!3d42.48756747917853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e374922e862579%3A0x5ee503341a0fd55a!2s500+Unicorn+Park+Dr%2C+Woburn%2C+MA+01801!5e0!3m2!1sen!2sus!4v1463589861996" width="100%" height="450" frameborder="0" style="border:0" scrolling="no" allowfullscreen></iframe>';
                  }
                  
                  ?>
                  
                </div>

            </div>
        </div>
    </div>
<!--Close Body Content-->
        
        <br><br>
