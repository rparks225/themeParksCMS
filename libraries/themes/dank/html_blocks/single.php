 <!--Open Content-->
        <div class="<?php echo title(); ?>" id="cont">
            
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
                            <h3 class="fancy"><?php echo $heading ?></h3>
                            <span>

                                <?php 
                                //Breadcrumb Trail
                                $trail = array(title() => $heading);
                                breadcrumbs($trail); 
                                ?>

                            </span>
                             <?php 
					   
					   if($edit == 'false'){
						   
						   echo $html;
						   
						   }else{
							   
							   include 'libraries/themes/'.theme().'/html_blocks/ee.php';
							   
							   }
                       
						?>
                            
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
    