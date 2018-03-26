<?php global $userName; 
    $tits = explode('/',$_SERVER['REQUEST_URI']); 
    $tits =str_replace('-', ' ',ucwords($tits[2])); 
?>
<!DOCTYPE html>
<html lang="">
    
    <!--You are on the (<?php echo title(2); ?>) page-->

    <meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
    <?php

    if(links() == ROOT.'tp-Pages-'.title(2).'' || links() == ROOT.'tp-Jobs-'.title(2).'' || links() == ROOT.'tp-Album-'.title(2).''){

        echo '<title>ThemeParks CMS - Add/Edit: '.title(2).'</title>';

    }else{

        echo '<title>ThemeParks CMS - '.ucwords(title(2)).'</title>';

    }

    ?>    
    <meta name=viewport content="width=device-width, initial-scale=1">
    <?php 

    //Auto logout script time out 1hr 30min
    global $destroy;
    global $sName;
    $sessKey = md5($_SERVER['SERVER_ADDR'].' - '.$sName.'');
    if(isset($_SESSION[''.$sessKey.''])){
        echo $destroy;
    };

    ?>        

    <?php 

    if(title() == 'dashboard' || title() == 'pages'){
        echo '<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="-1">';
    }  

    ?>

    <!--Close Meta Tags-->

    <link rel="shortcut icon" href="icon.ico">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css" />
    <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="<?php echo ROOT; ?>includes/admin/assets/css/customStyles.css" type="text/css" rel="stylesheet" />

    <style>
        div#eepanel {
            display:none;
        }
        .cke_dialog{
            border: 1px solid grey;
            box-shadow: 2px 2px 10px;
            z-index:999999999;
        }
        select.cke_dialog_ui_input_select{
            display:block!important;
        }
        .cke_reset_all textarea, .cke_reset_all input[type="text"], .cke_reset_all input[type="password"] {
            cursor: text;
            margin:0;
            height:25px;
        }.cke_button__inlinesave{
            display:none!important;
        }
        .input-field label {
            //top: -0.2rem!important;
        }
        #eeInit{
            display:none;
        }
    </style>

            <!--[if IE]>
<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>

    <!--Open Nav-Sidebar-->
    <nav style="position:relative;z-index:9999999;" class="#00838f cyan darken-0 light">
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">view_module</i></a>
        <ul id="slide-out" class="#424242 grey darken-3 side-nav fixed">
            <br>
            <div class="row">
                <div class="col s12">
                    <div class="valign-wrapper">
                        <img src="<?php echo ROOT; ?>includes/admin/assets/images/logo.png" alt="" width="200px" height="140px" />
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
                                <li><a class="waves-effect waves-red" href="<?php echo ROOT; ?>tp-Pages-1"><i class="material-icons left">note_add</i>Manage Pages</a></li>
                                <li><a class="waves-effect waves-red" href="<?php echo ROOT; ?>tp-Post"><i class="material-icons left">assignment</i>Manage Posts</a></li>
                                <li><a class="waves-effect waves-red" href="<?php echo ROOT; ?>tp-Menu"><i class="material-icons left">menu</i>Manage Menu Bar</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>    
            </li>
            <li><a class="white-text  waves-effect waves-red" href="<?php echo ROOT; ?>tp-Image"><i class="material-icons left">perm_media</i>Image Library</a></li>
            <li><a class="white-text  waves-effect waves-red" href="<?php echo ROOT; ?>tp-Settings"><i class="material-icons left">settings</i>Settings</a></li>
            <li><a class="white-text  waves-effect waves-red" href="<?php echo ROOT; ?>Home"><i class="material-icons left">web</i>View Site</a></li>
<!--            <li><a class="white-text  waves-effect waves-red" href="#"><i class="material-icons left">business</i>New Job</a></li>-->
            <li><a class="white-text  waves-effect waves-red" href="tp-login" onclick="eelogout();"><i class="material-icons left">power_settings_new</i>Logout</a></li>
            </ul>
    </nav>
    <!--Close Nav-Sidebar-->


    <!--Open Parallax Image-->
    <div class="parallax-container">
        <div style="padding-left:40px;" class="valign-wrapper">
            <h1 class="valign light white-text"><br><?php echo $tits; ?></h1>
        </div>
        <div class="parallax"><img class="responsive-img" src="<?php echo ROOT; ?>includes/admin/assets/images/header.jpg"></div>
    </div>
    <!--Close Parallax Image-->


    <!--Open Main Area-->
    <div class="row main">
        <div class="section white">

            <!--Content Area-->
            <div style="padding:0 40px;" class="row">

                <!--Open Welcome-->
                <h5 style="color:black;">Welcome Back - <span class="#00838f cyan-text text-darken-0 light"><?php echo $userName; ?></span></h5>
                <hr>
                <br>
                <br>
                <!--Close Welcome-->