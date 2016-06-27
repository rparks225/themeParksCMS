<?php

function here($e){
 
    if($e == 'Home' || $e == 'home'){
        
        echo 'home';
        
    }else{
        
        echo 'int';
        
    }
    
}

?>

<body id="<?php here(title(2)); ?>">

    <!--Open Header-->
    <header>
        <div class="container">
            <div class="row">
                
                <?php 

                if(title(2) == 'Home' || title(2) == 'home'){
                
                echo '<div class="col-md-12 col-sm-12 col-xs-12">
                    <img style="display:none;" class="img-responsive center-block logo" src="images/tplogo.png" />
                </div>';
    
                }else{

                $tits = title(2);    
                $query = 'SELECT * FROM page WHERE Title LIKE "'.$tits.'"';    
                $block = 'title';    
                $title = new model();
                $title->query($query,$block);    
                
                }; ?>
                
            </div>
        </div>
    </header>
    <!--Close Header-->

    <!--Open Nav-->
    <nav class="navbar navbar-default" role="navigation">
        <div data-spy="affix" data-offset-top="570"  class="affix-top container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>

            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    
                    <?php 
                    
                    $pages = array(
                    'Home'=>'Home',
                    'About'=>'About Us'    
                    );
                    navi($pages);
                    
                    ?>

            <li><a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Creative Print Design</a></li>
                    <li><a href="#">Web/Mobile Design</a></li>
                    <li><a href="#">Web Marketing</a></li>
                    <li><a href="#">Search Engine Optimization</a></li>
                </ul>
            </li>

                    <li><a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Portfolio <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">All Projects</a></li>
                    <li><a href="#">Web</a></li>
                    <li><a href="#">Print</a></li>
                </ul>
                </li>
                    
                <?php

                        $page = array(
                            'Documentaion'=>'Documentaion',
                            'News-All'=>'Blog',
                            'Contact'=>'Contact Us',
                        );
                        navi($page);

                ?>        
        
            </ul>
        </div>
    </div>
</nav>
<!--Close Nav-->

