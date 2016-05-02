<body>

    <!--Open wrapper-->
    <div class="wrapper">
        
        <header>
            <div class="overlay"></div>
        </header>
        
        <!--Open Header-->
        <div class="top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <br>
                        <p style="margin:0 auto;" class="logo"></p>
                        <p>Lorem ipsum dolor sit amet&#8230;</p>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <!--Close Header-->
        
        <!--Open Nav-->
        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="row">
                    
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mobile" arial-expand="false">
                            
                            <span class="sr-only">Toggle Nav</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

<!--                        <a href="#" class="navbar-brand">DankVision Medias</a>-->
                        
                    </div>
                        
                    <div class="collapse navbar-collapse col-md-offset-4" id="mobile">
                        
                        <ul class="nav navbar-nav"><!--About Dankvision-->
                            <li class="<?php active('Home'); ?>"><a href="<?php echo ROOT; ?>Home">Home</a></li>
                            <li class="<?php active('About'); ?>"><a href="<?php echo ROOT; ?>About">About</a></li>
                            <li class="<?php active('Glass'); ?>"><a href="<?php echo ROOT; ?>Glass">Glass</a></li>
                            <li class="<?php active('News-All'); ?>"><a href="<?php echo ROOT; ?>News-All">Blog</a></li>
                            <li class="<?php active('Contact'); ?>"><a href="<?php echo ROOT; ?>Contact">Contact</a></li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </nav>
        <!--Close Nav-->
        
        <div class="clearfix"></div>
        
        <?php if(title() == 'home'){ require_once 'libraries/themes/dank/html_blocks/slider.php'; }else{ echo '
        <div style="border:1px solid black;" class="container" id="mainTits">
                <div class="row">
                    <h3 class="col-md-12">'.title().'</h3>
                </div>    
            </div>    
        
        <div class="clearfix"></div>'; }; ?>
        
        <div class="clearfix"></div>