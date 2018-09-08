<?php 
/*===============
Sets Globals
===============*/
$vars = array('id','sUrl','dbName','sCaptcha','cmsPath','eePath','emailHost','emailAuth','emailUser','emailPass','emailEnc','emailPort','emailFrom','emailName','emailAdd','emailReply','eReplyTitle');

global $salty;
foreach($vars as $var){ global $$var; } 
?>

{# $query = '' #}
{# $site = "{$dbName}" #}
{# $main = $_SERVER["DOCUMENT_ROOT"].$cmsPath #}

<!--Open Theme Changer-->
<div class="row">
    <div style="padding:0;" class="card col s12">

        <div class="card-image waves-effect waves-block waves-red">
            <img styel="width:100%;" class="activator" src="{% echo ROOT %}libraries/themes/{% echo theme().'/screenshot.jpg' %}">
        </div>
        <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Current Theme:<i class="material-icons right">more_vert</i></span>
            <p>
                <a href="#">
                    {% echo theme() %} theme
                </a>
            </p>
        </div>
        <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Change Theme<i class="material-icons right">close</i></span>
            <form method="post" action="">

                <div class="row">

                    <div class="input-field">

                        <select name="theme">
                            <option value="default" selected disabled>Please Select a Theme</option>
                            {# $directory = 'libraries/themes' #}
                            {# $blocks = 'theme' #}
                            {# $other = false #}
                            {# tpDirect($directory,$blocks,$other) #}
                        </select>

                    </div>

                    <button class="btn waves-effect waves-red" type="submit" name="changed" value="Submit">Submit
                        <i class="material-icons right">send</i>
                    </button>

                </div>

            </form>
            {# $query = '' #}
             {# $method = 'changed' #}
             {# $location = 'Theme' #}

            <!-- updates the record -->
            {-- if (isset($_POST[''.$method.''])) --}
                {-- if (isset($_POST['theme'])) --}
                     {# $theme = addslashes($_POST['theme']) #}
                     {# $query = 'UPDATE `'.$site.'`.`'.$location.'` SET `Theme` = \''.$theme.'\'' #}
                     {# unlink('libraries/css/themeParks-styles.css') #}
                 {-- endif --}
             {-- endif --}

             {# $update = new update() #}
             {# $update->uped($location,$query,$method) #}


            <!-- updates the record -->
             {-- if (isset($_POST[''.$method.''])) --}
                {# $location = 'Settings' #}
                {-- if (isset($_POST['theme'])) --}
                     {# $theme = addslashes($_POST['theme']) #}
                     {# $query = 'UPDATE `'.$site.'`.`'.$location.'` SET `theme` = \''.$theme.'\'' #}
                     {# unlink('libraries/js/themeParks-Scripts.js') #}
                {-- endif --}
             {-- endif --}

             {# $updated = new update() #}
             {# $updated->uped($location,$query,$method) #}
        </div>

    </div>
</div>
<!-- Close Theme Changer -->