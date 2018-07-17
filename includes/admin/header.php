<?php global $userName; ?>
{# $tits = explode('/',$_SERVER['REQUEST_URI']) #}
{# $tits =str_replace('-', ' ',ucwords($tits[1])) #}
<!DOCTYPE html>
<html lang="">
    
<!--You are on the ({% echo title(2) %}) page-->

<!-- Open Meta Tags -->

<meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
{-- if ( links() == ROOT.'tp-Pages-'.title(2).'' || links() == ROOT.'tp-Jobs-'.title(2).'' || links() == ROOT.'tp-Album-'.title(2).'') --}
        <title>ThemeParks CMS - Add/Edit: {% echo title(2) %}</title>
{-- else --}
        <title>ThemeParks CMS - {% echo ucwords(title(2)) %}</title>
{-- endif --}
<meta name=viewport content="width=device-width, initial-scale=1">

<?php 
//Auto logout script time out 1hr 30min
global $destroy;
global $sName; ?>

{# $sessKey = md5($_SERVER['SERVER_ADDR'].' - '.$sName.'') #}
{-- if (isset($_SESSION[''.$sessKey.''])) --}
    {% echo $destroy %}
{-- endif --}

{-- if (title() == 'dashboard' || title() == 'pages') --}
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="-1">
{-- endif --}

<!--Close Meta Tags-->

<link rel="shortcut icon" href="icon.ico">
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
<link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
<link href="{% echo ROOT %}includes/admin/assets/css/customStyles.css" type="text/css" rel="stylesheet" />

    <style>
        div#eepanel{display:none}.cke_dialog{border:1px solid grey;box-shadow:2px 2px 10px;z-index:999999999}select.cke_dialog_ui_input_select{display:block!important}.cke_reset_all textarea,.cke_reset_all input[type="text"],.cke_reset_all input[type="password"]{cursor:text;margin:0;height:25px}.cke_button__inlinesave{display:none!important}.input-field label{//top:-0.2rem!important}#eeInit{display:none}.fixed-action-btn.direction-left ul{padding-right:38px}
    </style>

            <!--[if IE]>
<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    
    <div class="fixed-action-btn click-to-toggle tooltipped" data-position="left" data-tooltip="Manage Site" style="z-index:9999999;">
        <a class="btn-floating btn-large red">
            <i class="large material-icons">add</i>
        </a>
        
        <ul>
            <li>
                <a class="btn-floating waves-effect waves-red tooltipped" 
                      data-position="left" 
                      data-tooltip="Manage Pages" 
                      href="{% echo ROOT %}tp-Pages-1">
                      <i class="material-icons left">mode_edit</i>Manage Pages</a>
            </li>
            <li>
                <a class="btn-floating waves-effect waves-red tooltipped" 
                     data-position="left" 
                     data-tooltip="Manage Posts" 
                     href="{% echo ROOT %}tp-Post">
                     <i class="material-icons left">assignment</i>Manage Posts</a>
            </li>
            <li>
                <a class="btn-floating waves-effect waves-red tooltipped" 
                     data-position="left" 
                     data-tooltip="Manage Images" 
                     href="{% echo ROOT %}tp-Image">
                     <i class="material-icons left">perm_media</i>Image Library</a>
            </li>
            <li>
                <a class="btn-floating waves-effect waves-red tooltipped" 
                     data-position="left" 
                     data-tooltip="Manage Nav Menues" 
                     href="{% echo ROOT %}tp-Menu">
                     <i class="material-icons left">menu</i>Manage Menu Bar</a>
            </li>
            <!-- <li><a class="white-text  waves-effect waves-red" href="#"><i class="material-icons left">business</i>New Job</a></li> -->
        </ul>
    </div>

    <!--Open Nav-Sidebar-->
    <nav  class="light navbar" style="background:#3f3f3f;">
        <div class="nav-wrapper">
            <div class="row">
                <b style="color:white;padding:0;margin-top:1.1rem;">
                   <a href="{% echo ROOT %}tp-Dashboard"><span style="color:#77273F;font-size:1.5em;">{&nbsp;</span><span class="circle" style="background:#00838f;padding:10px;">TP</span><span style="color:#77273F;font-size:1.5em;">&nbsp;}</span>
                       </a></b>
                <a href="#" data-target="slide-out" class="right sidenav-trigger show-on-medium-and-down"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li>
                        <a href="{% echo ROOT %}tp-Dashboard" class="white-text  waves-effect waves-red active">
                        <i class="material-icons left">dashboard</i>Back to Dashboard</a>
                    </li>
                    <li>
                        <a class="white-text  waves-effect waves-red" href="{% echo ROOT %}Home">
                        <i class="material-icons left">web</i>View Site</a>
                    </li>
                    <li>
                        <a class="white-text  waves-effect waves-red dropdown-trigger" data-target="set1" href="">
                        <i class="material-icons left">settings</i>Settings <i class="material-icons right">arrow_drop_down</i></a>
                    </li>
                    <li>
                        <a class="white-text  waves-effect waves-red" href="tp-login" onclick="eelogout();">
                        <i class="material-icons left">power_settings_new</i>Logout</a>
                    </li>
                    <ul id="set1" class="dropdown-content">
                        <li><a href="{% echo ROOT %}tp-Settings">Site Settings</a></li>
                        <li><a href="{% echo ROOT %}tp-Security">Security Settings</a></li>
                        <li><a href="{% echo ROOT %}tp-Users">User Settings</a></li>
                        <li><a href="{% echo ROOT %}tp-Update">Update Core</a></li>
                    </ul>
                </ul>
            </div>
      </div>
    </nav>
    <!--Close Nav-Sidebar-->
    
    <ul class="sidenav grey darken-3" id="slide-out">
        <li><div class="user-view">
            <div class="overlays" style="position:absolute;left:0;top:0;height:100%;width:100%;background:rgba(63,63,63,.75);z-index:2;"></div>
            <div class="background" style="z-index:-1;">
                <img width="100%" src="{% echo ROOT %}includes/admin/assets/images/newBg.jpg">
            </div>
            <a style="z-index:10;position:relative;" href="#user"><img width="35%" src="{% echo ROOT %}includes/admin/assets/images/logo.png"></a>
            <a style="z-index:10;position:relative;" href="#name"><span class="white-text name">You are logged in as:</span></a>
            <a style="z-index:10;position:relative;" href="#email"><span class="white-text email">{# userInfo('userName') #}</span></a>
            </div></li>
        <li>
            <a href="{% echo ROOT %}tp-Dashboard" class="white-text  waves-effect waves-red active">
                <i class="material-icons left white-text">dashboard</i>Back to Dashboard</a>
        </li>
        <li>
            <a class="white-text  waves-effect waves-red" href="{% echo ROOT %}Home">
                <i class="material-icons left white-text">web</i>View Site</a>
        </li>
        <li>
            <a class="white-text  waves-effect waves-red" href="{% echo ROOT %}tp-Settings">
                <i class="material-icons left white-text">settings</i>Settings</a>
        </li>
        <li>
            <a class="white-text  waves-effect waves-red" href="tp-login" onclick="eelogout();">
                <i class="material-icons left white-text">power_settings_new</i>Logout</a>
        </li>
    </ul>


    <!--Open Parallax Image-->
    <div class="row" style="padding:1rem 0 2rem 40px;background:#00838F;">
        <div>
            <h1 class="valign light white-text">{% echo $tits %}</h1>
        </div>
    </div>
    <!--Close Parallax Image-->


    <!--Open Main Area-->
    <div class="row main">
        <div class="section">

            <!--Content Area-->
            <div style="padding:0 40px;" class="row">

                <!--Open Welcome-->
                <br>
                <br>
                <!--Close Welcome-->