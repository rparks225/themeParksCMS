<?php 

$vars = array('id','sUrl','dbName','sCaptcha','cmsPath','eePath','emailHost','emailAuth','emailUser','emailPass','emailEnc','emailPort','emailFrom','emailName','emailAdd','emailReply','eReplyTitle');

foreach($vars as $var){

    global $$var;

}

$site = "{$dbName}";    

$query = 'SELECT * FROM post WHERE Id = "'.title(2).'"';
$block = 'postUpdate';
$location = 'post';
$method = 'edited';
$posted = new admin_model();
$posted->query($query,$block);

//updates the record
if(isset($_POST[''.$method.''])){

    if(isset($_POST['id'])){

        $id = addslashes($_POST['id']);
        $title = addslashes($_POST['title']);
        $img = addslashes($_POST['img']);
        $script = addslashes($_POST['post']);
        $Date = addslashes($_POST['date']);
        $upDate = addslashes($_POST['update']);
        $imgCap = addslashes($_POST['cap']);

        $query = 'UPDATE `'.$site.'`.`'.$location.'` SET `Title` = \''.$title.'\', `Image` = \''.$img.'\', `Description` = \''.$script.'\', `Date` = \''.$Date.'\', `Updated` = \''.$upDate.'\', `Caption` = \''.$imgCap.'\' WHERE `'.$location.'`.`Id` = \''.$id.'\'';

    }

};

$update = new update();
$update->uped($location,$query,$method);

?>