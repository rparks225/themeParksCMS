<?php 

$vars = array('id','sUrl','dbName','sCaptcha','cmsPath','eePath','emailHost','emailAuth','emailUser','emailPass','emailEnc','emailPort','emailFrom','emailName','emailAdd','emailReply','eReplyTitle');

    foreach($vars as $var){

        global $$var;

    }
    
$site = "{$dbName}";  
?>

    <!--Open Theme Changer-->
    <div class="col s12 m6 l4">
        <div style="padding:0;" class="card col s12">

            <div class="card-image waves-effect waves-block waves-red">
                <img styel="width:100%;" class="activator" src="<?php echo ROOT; ?>libraries/themes/<?php echo theme(); ?>/screenshot.png">
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

                    }

                };

                $update = new update();
                $update->uped($location,$query,$method);
                
                
                //updates the record
                if(isset($_POST[''.$method.''])){
                    
                    $location = 'settings';
                    if(isset($_POST['theme'])){

                        $theme = addslashes($_POST['theme']);

                        $query = 'UPDATE `'.$site.'`.`'.$location.'` SET `theme` = \''.$theme.'\'';

                    }

                };

                $updated = new update();
                $updated->uped($location,$query,$method);
                ?>
            </div>

        </div>
    </div>
    <!--Close Theme Changer-->


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