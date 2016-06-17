<?php
global $mysqli;
$query = "SELECT * FROM Settings";

if($result = $mysqli->query($query)){

    while($row = $result->fetch_assoc()){


        $sName = $row['settings_siteName'];
        $sUrl = "http://{$_SERVER['HTTP_HOST']}/themeParksCMS/";
        $sCaptcha = $row['settings_captchaKey'];
        $theme = $row['theme'];
        $cmsPath = $row['settings_cmsPath'];
        $eePath = $row['settings_eePath'];
        $emailHost = $row['settings_emailHost'];
        $emailAuth = $row['settings_emailAuth'];
        $emailUser = $row['settings_emailUser'];
        $emailPass = $row['settings_emailPass'];
        $emailEnc = $row['settings_emailEncrypt'];
        $emailPort = $row['settings_emailPort'];
        $emailFrom = $row['settings_emailFrom'];
        $emailName = $row['settings_emailName'];
        $emailAdd = $row['settings_emailAddress'];
        $emailReply = $row['settings_emailReply'];
        $eReplyTitle = $row['settings_emailReplyTitle'];
        $dbName = $row['settings_dbName'];
        $id = $row['Id'];


    }      


};       

$vars = array('id','sUrl','dbName','sCaptcha','cmsPath','eePath','emailHost','emailAuth','emailUser','emailPass','emailEnc','emailPort','emailFrom','emailName','emailAdd','emailReply','eReplyTitle');

    foreach($vars as $var){

        global $$var;

    }

?>        