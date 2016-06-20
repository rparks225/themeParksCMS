<?php

$vars = array('id','sUrl','dbName','sCaptcha','cmsPath','eePath','emailHost','emailAuth','emailUser','emailPass','emailEnc','emailPort','emailFrom','emailName','emailAdd','emailReply','eReplyTitle','userName');

    foreach($vars as $var){

        global $$var;

    }

?>

    <form class="form" method="post">

        <input type="hidden" name="id" value="<?php echo $id; ?>" />
        
        <div class="col s6 form-group">

            <label for="settings_uName">User Name:</label>
            <input class="form-control" id="settings_uName" name="settings_uName" value="<?php echo $userName ?>" />
        </div>

        <div class="col s6 form-group">

            <label for="settings_siteName">Site Name:</label>
            <input class="form-control" id="settings_siteName" name="settings_siteName" value="<?php echo $sName; ?>" />
        </div>

        <div class="col s6 form-group">

            <label for="settings_siteUrl">Site URL:</label>
            <input class="form-control" id="settings_siteUrl" name="settings_siteUrl" value="<?php echo $sUrl ?>" />
        </div>

        <div class="col s6 form-group">

            <label for="settings_dbName">Database Name:</label>
            <input class="form-control" id="settings_dbName" name="settings_dbName" value="<?php echo $dbName ?>" />
        </div>

        <div class="clearfix">&nbsp;</div>

        <h3>Googple Captcha Settings</h3>

        <div class="col-md-12 form-group">

            <label for="settings_captchaKey">Public Key:</label>
            <input class="form-control" id="settings_captchaKey" name="settings_captchaKey" value="<?php echo $sCaptcha; ?>" />
        </div>

        <div class="clearfix">&nbsp;</div>

        <h3>CMS Settings</h3>

        <div class="col s6 form-group">

            <label for="settings_cmsPath">CMS Path:</label>
            <input class="form-control" id="settings_cmsPath" name="settings_cmsPath" value="<?php echo $cmsPath; ?>" />
        </div>

        <div class="col s6 form-group">

            <label for="settings_eePath">EE Path:</label>
            <input class="form-control" id="settings_eePath" name="settings_eePath" value="<?php echo $eePath; ?>" />
        </div>

        <div class="clearfix">&nbsp;</div>

        <h3>Contact Settings</h3>

        <div class="col s6 form-group">

            <label for="settings_emailHost">Email Host:</label>
            <input class="form-control" id="settings_emailHost" name="settings_emailHost" value="<?php echo $emailHost; ?>" />
        </div>

        <div class="col s6 form-group">

            <label for="settings_emailAuth">Email Authentication:</label>
            <input class="form-control" id="settings_emailAuth" name="settings_emailAuth" value="<?php echo $emailAuth; ?>" />
        </div>

        <div class="col s6 form-group">

            <label for="settings_emailUser">Email Username:</label>
            <input class="form-control" id="settings_emailUser" name="settings_emailUser" value="<?php echo $emailUser; ?>" />
        </div>

        <div class="col s6 form-group">

            <label for="settings_emailPass">Email Password:</label>
            <input class="form-control" id="settings_emailPass" name="settings_emailPass" value="<?php echo $emailPass; ?>" />
        </div>

        <div class="col s6 form-group">

            <label for="settings_emailEncrypt">Email Encryption:</label>
            <select class="form-control" id="settings_emailEncrypt" name="settings_emailEncrypt">
                <?php 
            
                $encs = array('Select','tls','ssl','no ssl');
            
                    foreach($encs as $enc){
                        
                        if($emailEnc == $enc){
                           $select = 'selected ';
                        }else{
                              
                            $select = '';
                        }
                        
                        echo '
                        <option '.$select.'value="'.$enc.'">'.$enc.'</option>';

                    };
            
            ?>
            </select>
        </div>

        <div class="col s6 form-group">

            <label for="settings_emailPort">Email Port:</label>
            <input class="form-control" id="settings_emailPort" name="settings_emailPort" value="<?php echo $emailPort; ?>" />
        </div>

        <div class="col s6 form-group">

            <label for="settings_emailFrom">Email From:</label>
            <input class="form-control" id="settings_emailFrom" name="settings_emailFrom" value="<?php echo $emailFrom; ?>" />
        </div>

        <div class="col s6 form-group">

            <label for="settings_emailName">Email From Name:</label>
            <input class="form-control" id="settings_emailName" name="settings_emailName" value="<?php echo $emailName; ?>" />
        </div>

        <div class="col-md-12 form-group">

            <label for="settings_emailAddress">Email Admin Address:</label>
            <input class="form-control" id="settings_emailAddress" name="settings_emailAddress" value="<?php echo $emailAdd; ?>" />
        </div>

        <div class="col s6 form-group">

            <label for="settings_emailReply">Email Reply Email:</label>
            <input class="form-control" id="settings_emailReply" name="settings_emailReply" value="<?php echo $emailReply; ?>" />
        </div>

        <div class="col s6 form-group">

            <label for="settings_emailReplyTitle">Email Reply Email Title:</label>
            <input class="form-control" id="settings_emailReplyTitle" name="settings_emailReplyTitle" value="<?php echo $eReplyTitle; ?>" />
        </div>

        <input type="submit" name="edited" class="btn btn-primary" value="Edit" />

        <div class="clearfix">&nbsp;</div>
        <div class="clearfix">&nbsp;</div>

    </form>

    <?php

$location = 'Settings';
$method = 'edited';
//updates the record

if(isset($_POST[''.$method.''])){

    if(isset($_POST['id'])){

    $id = addslashes($_POST['id']);  
    $sName = addslashes($_POST['settings_siteName']);
    $userName = addslashes($_POST['settings_uName']);
    $sUrl = addslashes($_POST['settings_siteUrl']);
    $sCaptcha = addslashes($_POST['settings_captchaKey']);
    $cmsPath = addslashes($_POST['settings_cmsPath']);
    $eePath = addslashes($_POST['settings_eePath']);
    $emailHost = addslashes($_POST['settings_emailHost']);
    $emailAuth = addslashes($_POST['settings_emailAuth']);
    $emailUser = addslashes($_POST['settings_emailUser']);
    $emailPass = addslashes($_POST['settings_emailPass']);
    $emailEnc = addslashes($_POST['settings_emailEncrypt']);
    $emailPort = addslashes($_POST['settings_emailPort']);
    $emailFrom = addslashes($_POST['settings_emailFrom']);
    $emailName = addslashes($_POST['settings_emailName']);
    $emailAdd = addslashes($_POST['settings_emailAddress']);
    $emailReply = addslashes($_POST['settings_emailReply']);
    $eReplyTitle = addslashes($_POST['settings_emailReplyTitle']);
    $dbName = addslashes($_POST['settings_dbName']);

        $query = 'UPDATE `'.$dbName.'`.`'.$location.'` SET `Id` = \''.$id.'\', `settings_siteName` = \''.$sName.'\', `settings_uName` = \''.$userName.'\', `settings_siteUrl` = \''.$sUrl.'\', `settings_captchaKey` = \''.$sCaptcha.'\', `settings_cmsPath` = \''.$cmsPath.'\', `settings_eePath` = \''.$eePath.'\', `settings_emailHost` = \''.$emailHost.'\', `settings_emailAuth` = \''.$emailAuth.'\', `settings_emailUser` = \''.$emailUser.'\', `settings_emailPass` = \''.$emailPass.'\', `settings_emailEncrypt` = \''.$emailEnc.'\', `settings_emailPort` = \''.$emailPort.'\', `settings_emailFrom` = \''.$emailFrom.'\', `settings_emailName` = \''.$emailName.'\', `settings_emailAddress` = \''.$emailAdd.'\', `settings_emailReply` = \''.$emailReply.'\', `settings_emailReplyTitle` = \''.$eReplyTitle.'\', `settings_dbName` = \''.$dbName.'\' WHERE `'.$location.'`.`Id` = \''.$id.'\'';

    }

};

$update = new update();
$update->uped($location,$query,$method);

?>