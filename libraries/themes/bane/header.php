<body>
    
    <!--Open Above the fold cont-->
    <div class="above">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4 col-xs-7  pull-right">
                <button class="btn btn-new mob2" data-toggle="modal" data-target="#brochureForm"><span class="glyphicon glyphicon-edit"></span> Call Now - Get a Brochure</button>
                </div>    
            </div>
        </div>
    </div>
    
                    <!--Open Side form-->
                    <div class="modal fade" id="brochureForm" tabindex="-1" role="dialog" aria-labelledby="brochureFormLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title fancy" id="myModalLabel">Brochure Request</h4>
                          </div>
                          <div class="modal-body">
                            
                              <form method="Post" action="">
                              
                                  <div class="form-group">
                                      <label for="Name">Name</label>
                                      <input class="form-control" name="Name" id="Name" />
                                  </div>
                                  
                                  <div class="form-group">
                                      <label for="Email">Email</label>
                                      <input class="form-control" name="Email" id="Email" />
                                  </div>
                                  
                                  <div class="form-group">
                                      <label for="Address">Address</label>
                                      <input class="form-control" name="Address" id="Address" />
                                  </div>
                                  
                                  <div class="form-group">
                                      <label for="Phone">Phone Number</label>
                                      <input class="form-control" name="Phone" id="Phone" />
                                  </div>
                                  
                                  <div class="form-group">
                                      <label for="Facility">Select a facility</label>
                                      <select name="Facility" id="Facility" class="form-control">
                                          <option value="">Select</option>
                                          <?php 
                                          
                                           $fac = array('Abbott-House','Devereux-House','Rosewood','Bay-Path','Colonial','Hancock-Park','Harbor-House','John-Scott-House','Mayflower-Place','The-Bostonian','Brighton-House','Craneville-Place','Springside','Sugar-Hill');
                                             
                                             foreach($fac as $vals){

                                                 echo '<option value="'.$vals.'">'.$vals.'</option>';
                                                 $i++;
                                             }
                                          
                                          ?>
                                      </select>
                                  </div>
                                  
                                  <label for="Message">Message</label>
                                  <textarea rows="5" class="form-control" name="Message" id="Message"></textarea>
                              
                              </form>
                              
                          </div>
                          <div  style="text-align:center;" class="modal-footer">
                              <b>Thank You For Choosing Harbor House</b>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--Close Side Form-->
    
    <!--Close Above the fold cont-->
    
    <!--Open Top Nav-->
    <div class="top">
    
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <a href="<?php echo ROOT; ?>Home"><img width="180" height="114" src="images/BaneCareLogos.png" alt="BaneCare A Matter Of Trust"></a>
                </div>
                
                <div class="col-md-8 pull-right mob">
                    <ul>
                        <li><span class="glyphicon glyphicon-duplicate"></span> <a href="<?php echo ROOT; ?>Employment-Opportunities"> CAREERS</a></li>
                        <li><span class="glyphicon glyphicon-download-alt"></span><a href="<?php echo ROOT; ?>Contact"> CONTACT</a></li>
                        <li><span class="glyphicon glyphicon-phone-alt"></span>
                        
                            <?php
                             global $pages;
                            if(title(2) == $pages[title(2)]['name']){
                                
                                echo '<a href="tel: '.$pages[title(2)]['phone'].'"> '.$pages[title(2)]['phone'].'</a>';
                                
                            }else{
                                echo '<a href="tel: 1-866-747-2263"> 1-866-747-BANE (2263)</a>';
                            }
                            
                            ?>
                        
                        </li>
                        <li><a href="<?php echo ROOT; ?>"><span class="glyphicon glyphicon-home"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    
    </div>
    <!--Close Top Nav-->
    
    <!--Open Nav-->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>

            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="<?php active('about-banecare-skilled-nursing-rehabilitation'); ?>">
                        <a data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            ABOUT BANECARE <span class="caret"></span></a>
                        
                         <ul class="dropdown-menu">
                             
                             <?php
                             
                                 $page = array(
                                 /*'about-banecare-skilled-nursing-rehabilitation'=>'About Us',*/
                                 'banecare-story-skilled-nursing-rehabilitation'=>'The BaneCare Story',
                                 'leadership-team-skilled-nursing-rehabilitation'=>'Meet the Team',
                                 'mission-for-skilled-nursing-rehabilitation'=>'Mission'
                                 );

                                 navi($page);
                             
                             ?>
                             
                        </ul>
                        
                    </li>
                    <li class="<?php active('services-amenities'); ?>">
                        <a data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            SERVICES & AMENITIES <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            
                            <?php
                             
                                 $page = array(
                                     'services-amenities'=>'Services & Amenities',
                                     'skilled-nursing-rehabilitation-services'=>'Skilled Nursing',
                                     'short-term-rehabilitation-services'=>'Rehabilitation',
                                     'assisted-living-services'=>'Assisted Living',
                                     'respite-care'=>'Respite Care'
                                     /*'hospice-care'=>'Hospice',
                                     'specialty-care'=>'Specialty Care',
                                     'nutritional-services-skilled-nursing'=>'Diet & Nutrition',
                                     'skilled-nursing-assisted-living-amenities'=>'Facility Amenities',
                                     'discharge-planning'=>'Discharge Planning'*/
                                 );

                                 navi($page);
                             
                             ?>
                            
                        </ul>
                    </li>
                    <li><a data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        NEWS & MEDIA <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            
                            <?php
                            
                            $page = array(
                                'skilled-nursing-news'=>'News & Media',
                                'skilled-nursing-accreditations'=>'Awards and Accreditations',
                                'skilled-nursing-community'=>'BaneCare Community'
                            );
                            navi($page)
                            
                            ?>
                            
                        </ul>
                    </li>
                    <li><a data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        LOCATIONS <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                               
                                <?php 
                                
                                        $page = array(
                                         'skilled-nursing-assisted-living-locations-ma'=>'All BaneCare Locations',
                                         'skilled-nursing-assisted-living-north-shore-ma'=>'BaneCare North',
                                         'skilled-nursing-assisted-living-south-shore-ma'=>'BaneCare South',
                                         'skilled-nursing-assisted-living-boston-metro-ma'=>'BaneCare Metro Boston',
                                         'skilled-nursing-assisted-living-western-ma'=>'BaneCare West', 
                                        );
                                    navi($page);

                                ?>
                                
                            </ul>
                    </li>
                    <?php 
                    
                    $page = array(
                            'choosing-a-nursing-home'=>'GETTING STARTED',
                            'skilled-nursing-testimonials'=>'TESTIMONIALS'    
                            );       
                    navi($page)
                                
                    ?>
                </ul>
                
                    <div class="unMob">
                        <hr>
                            <ul>
                                <li><span class="glyphicon glyphicon-phone-alt"></span>
                                    <?php
                                    global $pages;
                                    if(title(2) == $pages[title(2)]['name']){

                                        echo '<a href="tel: '.$pages[title(2)]['phone'].'"> '.$pages[title(2)]['phone'].'</a>';

                                    }else{
                                        echo '<a href="tel: 1-866-747-2263"> 1-866-747-BANE (2263)</a>';
                                    }

                                    ?>
                                </li>
                                <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
                            </ul>
                        <button class="btn btn-new" data-toggle="modal" data-target="#brochureForm"><span class="glyphicon glyphicon-edit"></span> Call Now - Get a Brochure</button>
                    </div>    
                </div>
                
            </div>
    </nav>
    <!--Close Nav-->

<?php tpBlock('slider'); ?>