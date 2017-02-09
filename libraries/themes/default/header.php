
<body>
    
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="Home">New Site</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <?php 

                            $pages = array(
                                'Home'=>'Home',
                                '#About'=>array(
                                'About'=>'About Us',
                                'theTeam'=>'Meet The Team',
                                'Services'=>'Services',
                                'Board'=>'Members of the Board',
                            ),
                                'News-all'=>'News',
                                '#Gallery'=>array(
                                'Gallery'=>'Image Gallery',
                                'Tours'=>'Virtual Tours'    
                            ),
                            'Contact'=>'Contact'
                            );

                            navi($pages);

                    ?>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>

    <div class="clearfix"><br><br></div>

    <header>
        <div class="container">
            <div class="row">
                <div class="clearfix">&nbsp;</div>
                <div class="clearfix">&nbsp;</div>
                <div class="clearfix">&nbsp;</div>
                <div class="col-md-12">
                    <h1>
                        <i class="fa fa-fire fa-3x"></i><br><br>
                        Welcome To Your Site</h1>
                    <h3>Dot Com</h3>
                </div>
            </div>
        </div>

    </header>