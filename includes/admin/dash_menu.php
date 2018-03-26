<?php 

$vars = array('id','sUrl','dbName','sCaptcha','cmsPath','eePath','emailHost','emailAuth','emailUser','emailPass','emailEnc','emailPort','emailFrom','emailName','emailAdd','emailReply','eReplyTitle');

foreach($vars as $var){

    global $$var;

}

$site = "{$dbName}"; 

?>

<!-- Open Content -->

<div class="col s3">
    <button class="waves-effect waves-red btn modal-trigger" data-target="addPage" class="btn modal-trigger">Add new user</button>
</div>

<div class="col s9"></div>    
<br/>
<br/>

<?php 
$method = 'Added';
$location = 'U_sers';
$query = false;	

if(isset($_POST[''.$method.''])){

    if(isset($_POST['id'])){

        $user = addslashes($_POST['use']);
        $displayName = addslashes($_POST['displName']);
        $pass = addslashes($_POST['pas']);
        $email = addslashes($_POST['email']);
        $privs = addslashes($_POST['privi']);

        $query = 'INSERT INTO `'.$site.'`.`'.$location.'` (`Id`, `User_name`, `Display_name`, `Pass_word`, `Email`, `Signed_Up`, `Privileges`) VALUES (NULL, \''.$user.'\', \''.$displayName.'\', \''.hash('sha51',$pass).'\', \''.$email.'\', CURRENT_TIMESTAMP, \''.$privs.'\')';

    }

};

$addPage = new update();
$addPage->uped($location,$query,$method);

?>

<?php tpAdmin('addUser'); ?>

<div class="table-responsive">


    <table class="responsive-table highlight">

        <thead>

            <tr class="active" style="color:black;">
                <th>Id</th>
                <th style="text-align:right;">Menu Name</th>
                <th style="text-align:right;">Action</th>
            </tr>    

        </thead>

        <tbody>

            <?php 


            $location = 'Nav';		 
            $block = "navTble";
            $query = "SELECT * FROM `$location` ORDER BY `Id` ASC";
            $method = 'Updated';

            //updates the record
            if(isset($_POST[''.$method.''])){

                if(isset($_POST['id'])){

                    $id = addslashes($_POST['id']);
                    $user = addslashes($_POST['use']);
                    $displayName = addslashes($_POST['displName']);
                    $pass = addslashes($_POST['pas']);
                    $email = addslashes($_POST['email']);
                    $privs = addslashes($_POST['privi']);

                    $query = 'UPDATE `'.$site.'`.`'.$location.'` SET `User_name` = \''.$user.'\', `Display_name` = \''.$displayName.'\', `Pass_word` = \''.hash('sha512',$pass).'\', `Email` = \''.$email.'\', `Privileges` = \''.$privs.'\' WHERE `'.$location.'`.`Id` = \''.$id.'\'';

                }

            };

            $update = new update();
            $update->uped($location,$query,$method);

            //query's the db 
            $table = new admin_model();
            $table->query($query,$block);

            //deletes records
            $delete = new delete();
            $delete->del($location,false);

            ?>

        </tbody>

    </table>

</div>

<div class="clearfix"></div>

<br>
<br>
<!-- Close Content area-->