<?php 

$vars = array('id','sUrl','dbName','sCaptcha','cmsPath','eePath','emailHost','emailAuth','emailUser','emailPass','emailEnc','emailPort','emailFrom','emailName','emailAdd','emailReply','eReplyTitle');

foreach($vars as $var){

    global $$var;

}

$site = "{$dbName}"; 

?>

<button class="waves-effect waves-red btn modal-trigger left" data-target="addPage" class="btn modal-trigger">Add new page</button>

<div class="clearfix">&nbsp;</div>    

<?php 
$method = 'inserted';
$location = 'page';
$query = false;	

if(isset($_POST[''.$method.''])){

    if(isset($_POST['id'])){

        $id = addslashes($_POST['id']);
        $name = addslashes($_POST['name']);
        $title = addslashes($_POST['title']);
        $key = addslashes($_POST['key']);
        $script = addslashes($_POST['script']);
        $html = addslashes($_POST['html']);
        $edit = addslashes($_POST['editable']);


        $query = 'INSERT INTO `'.$site.'`.`'.$location.'` (`Id`, `Title`, `Editable`, `Html`, `Description`, `KeyWords`, `Heading`) VALUES (NULL, \''.$name.'\', \''.$edit.'\', \''.$html.'\', \''.$script.'\', \''.$key.'\', \''.$title.'\')';

    }

};

$addPage = new update();
$addPage->uped($location,$query,$method);

tpAdmin('page_upDate');
?>
