<?php 

$vars = array('id','sUrl','dbName','sCaptcha','cmsPath','eePath','emailHost','emailAuth','emailUser','emailPass','emailEnc','emailPort','emailFrom','emailName','emailAdd','emailReply','eReplyTitle');

foreach($vars as $var){

    global $$var;

}

$site = "{$dbName}"; 

?>

<!-- Open Content area-->

<?php

$query = 'SELECT * FROM page WHERE Id = "'.title(2).'" LIMIT 1';
$block = 'uped';
$location = 'page';
$method = 'edited';
$updated = new admin_model();
$updated->query($query,$block);

//updates the record
if(isset($_POST[''.$method.''])){

    if(isset($_POST['id'])){

        $id = addslashes($_POST['id']);
        $name = addslashes($_POST['name']);
        $title = addslashes($_POST['title']);
        $key = addslashes($_POST['key']);
        $script = addslashes($_POST['script']);
        $html = addslashes($_POST['html']);
        $edit = addslashes($_POST['editable']);

        $query = 'UPDATE `'.$site.'`.`'.$location.'` SET `Title` = \''.$name.'\', `Description` = \''.$script.'\', `KeyWords` = \''.$key.'\', `Heading` = \''.$title.'\', `Html` = \''.$html.'\', `Editable` = \''.$edit.'\' WHERE `'.$location.'`.`Id` = \''.$id.'\'';

    }

};

$update = new update();
$update->uped($location,$query,$method);

?>

<div class="clearfix">&nbsp;</div>
<div class="clearfix">&nbsp;</div>

<!-- Close Content area-->