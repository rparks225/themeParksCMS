<!--You are on the (<?php echo title(); ?>) page-->
<!DOCTYPE html>
<html lang="">

<head>
    <!--Open Meta Tags-->
    <?php
        $query = 'SELECT * FROM `page` WHERE `Title` LIKE "'.title().'"';
        $block = 'metaScript';
        $metaScript = new model();
        $metaScript->query($query, $block);
        ?>

        <meta name=viewport content="width=device-width, initial-scale=1">

        <?php 

        if(title() == 'dashboard' || title() == 'pages'){
            echo '<meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="-1">';
        }    
        ?>

            <!--Close Meta Tags-->

            <link rel="shortcut icon" href="icon.ico">
            <!-- Compiled and minified CSS -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css" />
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
            <link href="<?php echo ROOT; ?>libraries/themes/login/assets/css/customStyles.css" type="text/css" rel="stylesheet" />

            <style>

            </style>

            <!--[if IE]>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>

    <!--Open Nav-Sidebar-->
    <nav class="#00838f cyan darken-0 light">
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">view_module</i></a>
        <ul id="slide-out" class="#424242 grey darken-3 side-nav fixed">
            <br>
            <div class="row">
                <div class="col s12">
                    <div class="valign-wrapper">
                        <img src="<?php echo ROOT; ?>libraries/themes/login/assets/images/logo.png" alt="" width="200px" height="140px" />
                    </div>
                </div>
            </div>

            <li><a href="<?php echo ROOT; ?>tp-Dashboard" class="white-text  waves-effect waves-red active"><i class="material-icons left">dashboard</i>Dash Board</a></li>
            <li class="no-padding">

                <ul class="collapsible collapsible-accordion">
                    <li>
                        <a class="white-text  collapsible-header waves-effect waves-red"><i class="material-icons left">mode_edit</i>Edit Site</a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a class="waves-effect waves-red" href="<?php echo ROOT; ?>tp-Pages"><i class="material-icons left">note_add</i>Edit Page</a></li>
                                <li><a class="waves-effect waves-red" href="<?php echo ROOT; ?>tp-Post"><i class="material-icons left">assignment</i>Edit Posts</a></li>
                            </ul>
                        </div>
                    </li>
            </li>
            <li><a class="white-text  waves-effect waves-red" href="<?php echo ROOT; ?>tp-Image"><i class="material-icons left">perm_media</i>Image Library</a></li>
            <li><a class="white-text  waves-effect waves-red" href="<?php echo ROOT; ?>tp-Settings"><i class="material-icons left">settings</i>Settings</a></li>
            <li><a class="white-text  waves-effect waves-red" href="<?php echo ROOT; ?>Home"><i class="material-icons left">web</i>View Site</a></li>
            <li><a class="white-text  waves-effect waves-red" href="#"><i class="material-icons left">business</i>New Job</a></li>
            </ul>
    </nav>
    <!--Close Nav-Sidebar-->


    <!--Open Parallax Image-->
    <div class="parallax-container">
        <div style="padding-left:40px;" class="valign-wrapper">
            <?php 
            //Heading
            $query = 'SELECT * FROM `page` WHERE `Title` LIKE "'.title().'"';
            $block = 'heading';
            $heading = new admin_model();
            $heading->query($query,$block);		  
            ?>
        </div>
        <div class="parallax"><img class="responsive-img" src="<?php echo ROOT; ?>libraries/themes/login/assets/images/header.png"></div>
    </div>
    <!--Close Parallax Image-->


    <!--Open Main Area-->
    <div class="row main">
        <div class="section white">

            <!--Content Area-->
            <div style="padding:0 40px;" class="row">

                <!--Open Welcome-->
                <h5 style="color:black;">Welcome Back - <span class="#00838f cyan-text text-darken-0 light">Rob Parks</span></h5>
                <hr>
                <br>
                <br>
                <!--Close Welcome-->