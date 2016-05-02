
<body>
    
    <span class="top glyphicon glyphicon-arrow-up"></span>
    
    <div class="mob" id="top">
    
        <div class="container">
        
            <div class="row">
            
                <div class="col-md-offset-3 col-md-9">
                
                    <span class="glyphicon glyphicon-map-marker"></span>1600 Boston Providence Highway Suite 123 Walpole, MA 02081
                    
                    <span style="margin-left:40px;" class="glyphicon glyphicon-phone-alt"></span> 1-888-495-7491
                
                    <span class="pull-right socials mob" style="padding-right:30px;">
                        <a target="_blank" href="https://www.facebook.com/healthy.baby.essentials/" class="pull-left facebook"></a>
                        <a target="_blank" href="#" class="pull-left twitter"></a>
                        <a target="_blank" href="#" class="pull-left youtube"></a>
                        <a target="_blank" href="#" class="pull-left instagram"></a>
                    </span>  
                    
                </div>
                
            </div>
            
        </div>
    
    </div>
    
    
    <nav style="border-top:1px solid black;border-bottom:1px solid black;" class="navbar navbar-default " role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo ROOT; ?>Home"><img style="width:200px;position:relative;top:-50px;z-index:3;" src="images/logos/HBE-logo.png" alt=""></a>
            </div>

            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav pull-right">
                    
                    <li class="<?php active('Home'); ?>"><a href="<?php echo ROOT; ?>Home">Home</a></li>
                    
                    
                    <li class="<?php active('About'); ?> dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About HBE <span class="caret"></span></a>
                        
                        <ul class="dropdown-menu">
                            <li class="<?php active('About'); ?>">
                                <a href="<?php echo ROOT; ?>About">About Us</a>
                            </li>
                            <li class="<?php active('Our-Standards'); ?>">
                                <a href="<?php echo ROOT; ?>Our-Standards">Our Standards</a>
                            </li>
                            <li class="<?php active('Breastfeeding-Basics'); ?>">
                                <a href="<?php echo ROOT; ?>Breastfeeding-Basics">New Parents</a>
                            </li>
                            <li class="<?php active('Insurance-Provided-Breast-Pumps'); ?>">
                                <a href="<?php echo ROOT; ?>Insurance-Provided-Breast-Pumps">Insurance Provided Breast Pump</a>
                            </li>
                            <li class="<?php active('Breast Pump Rental'); ?>">
                                <a href="<?php echo ROOT; ?>Breast-Pump-Rental">Breast Pump Rental</a>
                            </li>
                            <li>
                                <a href="https://www.healthybabyessentials.com/_pdf/breastpump_prescription.pdf">Physicians's Prescription</a>
                            </li>
                        </ul>
                    </li>
                    
                    
                    <li class="<?php active('Products'); ?> dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Products<span class="caret"></span></a>
                        
                        <ul class="dropdown-menu">
                            <li class="<?php active('Products'); ?>">
                                <a href="<?php echo ROOT; ?>Products">All Products</a>
                            </li>
                            <li class="<?php active('Products-HospitalGrade'); ?>">
                                <a href="<?php echo ROOT; ?>Products-HospitalGrade">Hospital Grade</a>
                            </li>
                            <li class="<?php active('Products-HomeGrade'); ?>">
                                <a href="<?php echo ROOT; ?>Products-HomeGrade">Home Grade</a>
                            </li>
                            <li class="<?php active('Products-Accessories'); ?>">
                                <a href="<?php echo ROOT; ?>Products-Accessories">Accessories</a>
                            </li>
                            <li class="<?php active('Products-AccessoriesOrder'); ?>">
                                <a href="<?php echo ROOT; ?>Products-AccessoriesOrder">Accessories Order Form</a>
                            </li>
                        </ul>
                    </li>
                    
                    
                    <li class="<?php active('Testimonials'); ?>">
                        <a href="<?php echo ROOT; ?>Testimonials">Testimonials</a>
                    </li>
                    
                    
                    <li class="<?php active('Community-Resource-Guide'); ?> dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Resources<span class="caret"></span></a>
                        
                        <ul class="dropdown-menu">
                            <li class="<?php active('Community-Resource-Guide'); ?>">
                                <a href="<?php echo ROOT; ?>Community-Resource-Guide">Community Resource Guide</a>
                            </li>
                            <li class="<?php active(''); ?>">
                                <a href="<?php echo ROOT; ?>instructionalVideos">Breast Pump Instruction Videos</a>
                            </li>
                            <li class="<?php active('Breast-Pump-Trouble-Shooting'); ?>">
                                <a href="<?php echo ROOT; ?>Breast-Pump-Trouble-Shooting">Breast Pump Troubleshooting</a>
                            </li>
                        </ul>
                    </li>
                    
                    
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contact Us<span class="caret"></span></a>
                    
                        <ul class="dropdown-menu pull-right">
                            <li class="<?php active('Contact'); ?>">
                                <a href="<?php echo ROOT; ?>Contact">Contact</a>
                            </li>
                            <li class="<?php active('Customer-Satisfaction-Survey'); ?>">
                                <a href="<?php echo ROOT; ?>Customer-Satisfaction-Survey">Customer Satisfaction Survey</a>
                            </li>
                        </ul>
                        
                    </li>
                    
                    
                </ul>
            </div><!--.nav-collapse -->
        </div>
    
    </nav>
    
<?php tpBlock('slider'); ?>    
    
<!--Open Main Content-->
    <div class="container">    