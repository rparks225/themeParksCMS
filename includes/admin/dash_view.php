<?php 

$vars = array('id','sUrl','dbName','sCaptcha','cmsPath','eePath','emailHost','emailAuth','emailUser','emailPass','emailEnc','emailPort','emailFrom','emailName','emailAdd','emailReply','eReplyTitle');
global $salted;

    foreach($vars as $var){

        global $$var;

    }
    
$site = "{$dbName}"; 
$main = $_SERVER["DOCUMENT_ROOT"].$cmsPath;
?>
    
<!--Open Quick Blog-->
<?php

tpAdmin('insert_form');
$method = 'inserted';
$location = 'post';

if(isset($_POST[''.$method.''])){

    if(isset($_POST['id'])){

        $id = mysqli_real_escape_string($_POST['id']);
        $title = addslashes($_POST['title']);
        $img = addslashes($_POST['img']);
        $script = addslashes($_POST['post']);
        $Date = addslashes($_POST['date']);
        $imgCap = addslashes($_POST['cap']);

        $query = 'INSERT INTO `'.$site.'`.`'.$location.'` (`Id`, `Title`, `Image`, `Description`, `Date`, `Caption`) VALUES (NULL, \''.$title.'\', \''.$img.'\', \''.$script.'\', \''.$Date.'\', \''.$imgCap.'\')';

    }

};

$insert = new update();
$insert->uped($location,$query,$method);

?>
<!--Close Quick Blog-->

    <!--Open Theme Changer-->
    <div class="col s12 m4">
        <div style="padding:0;" class="card col s12">

            <div class="card-image waves-effect waves-block waves-red">
                <img styel="width:100%;" class="activator" src="<?php echo ROOT; ?>libraries/themes/<?php echo theme().'/screenshot.jpg'; ?>">
            </div>
            <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Current Theme:<i class="material-icons right">more_vert</i></span>
                <p>
                    <a href="#">
                        <?php echo theme(); ?> theme
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
                                <?php

                                    $directory = 'libraries/themes';
                                    $blocks = 'theme';
                                    $other = false;
                                    tpDirect($directory,$blocks,$other);

                                ?>

                            </select>

                        </div>

                        <button class="btn waves-effect waves-red" type="submit" name="changed" value="Submit">Submit
                            <i class="material-icons right">send</i>
                        </button>

                    </div>

                </form>
                <?php
                $method = 'changed';
                $location = 'Theme';

                //updates the record
                if(isset($_POST[''.$method.''])){

                    if(isset($_POST['theme'])){

                        $theme = addslashes($_POST['theme']);
                        $query = 'UPDATE `'.$site.'`.`'.$location.'` SET `Theme` = \''.$theme.'\'';
                        unlink('libraries/css/themeParks-styles.css');

                    }

                };

                $update = new update();
                $update->uped($location,$query,$method);
                
                
                //updates the record
                if(isset($_POST[''.$method.''])){
                    
                    $location = 'Settings';
                    if(isset($_POST['theme'])){

                        $theme = addslashes($_POST['theme']);
                        $query = 'UPDATE `'.$site.'`.`'.$location.'` SET `theme` = \''.$theme.'\'';
                        unlink('libraries/js/themeParks-Scripts.js');

                    }

                };

                $updated = new update();
                $updated->uped($location,$query,$method);
                ?>
            </div>

        </div>
    </div>
    
    <div class="col s12 m4">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title">CSS Compiler</span>
                <?php if (file_exists(''.$main.'libraries/css/themeParks-styles.css')): ?>
                    <p>Style sheet have successfully been compiled</p>
                <?php else: ?>
                    <p>You're Style sheets aren't compiled. Click the link below to begin. 
                <?php endif; ?>    
            </div>
            <div class="card-action">
                <?php if (!file_exists(''.$main.'libraries/css/themeParks-styles.css')): ?>
                    <a href="<?php echo ROOT; ?>tp-styles?compile=<?php echo $salted; ?>">Compile CSS</a>
                <?php else: ?>
                    <a target="_blank" href="libraries/css/themeParks-styles.css">View CSS</a>    
                <?php endif; ?>
            </div>
        </div>
    </div>
   
    <div class="col s12 m4">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title">JS Compiler</span>
                <?php if (file_exists(''.$main.'libraries/js/themeParks-Scripts.js')): ?>
                    <p>JS sheet have successfully been compiled</p>
                <?php else: ?>
                    <p>You're JS sheets aren't compiled. Click the link below to begin. 
                    <?php endif; ?>    
            </div>
            <div class="card-action">
                <?php if (!file_exists(''.$main.'libraries/js/themeParks-Scripts.js')): ?>
                    <a href="<?php echo ROOT; ?>tp-js?compile=<?php echo $salted; ?>">Compile JS</a>
                <?php else: ?>
                    <a target="_blank" href="libraries/js/themeParks-Scripts.js">View Js</a>       
                <?php endif; ?>
            </div>
        </div>
    </div>
    
    <!--Close Theme Changer-->
