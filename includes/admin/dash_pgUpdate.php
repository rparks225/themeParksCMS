<?php 

$vars = array('id','sUrl','dbName','sCaptcha','cmsPath','eePath','emailHost','emailAuth','emailUser','emailPass','emailEnc','emailPort','emailFrom','emailName','emailAdd','emailReply','eReplyTitle');

foreach($vars as $var){
    global $$var;
}
?>

{# $site = "{$dbName}" #}

<!-- Open Content area-->
<div class="col s12">
    {# tpAdmin('addPage') #}
</div>

<div class="col l3 m4 s12">
    <div class="card-panel" style="padding:24px 0;">
            <ul>
               
                <li><a style="padding:15px;width:100%;" 
                       class="grey-text waves-effect waves-white" 
                       href="tp-Pages-1">Back to all Pages</a></li>
                       
                <li><a style="padding:15px;width:100%;" 
                            class="grey-text waves-effect waves-white" 
                            href="tp-Dashboard">Back to Dashboard</a></li>
                
            </ul>
    </div>
</div>

<div class="col l9 m8 s12">
    <div class="card-panel">
        <?php

        $query = 'SELECT * FROM page WHERE Id = "'.title(2).'" LIMIT 1';
        $block = 'uped';
        $location = 'page';
        $method = 'edited';
        $updated = new admin_model();
        $updated->query($query,$block);
        if( $updated->rows($query) == 0 ){
            echo '<h5>Sorry Page Info Not Found</h5>';
        }

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
    </div>
</div>

<div class="clearfix">&nbsp;</div>
<div class="clearfix">&nbsp;</div>

<!-- Close Content area-->