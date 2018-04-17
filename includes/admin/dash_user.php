<!-- Open Content -->

<div class="col s3">
    <button class="waves-effect waves-red btn modal-trigger" data-target="addPage" class="btn modal-trigger">Add new user</button>
</div>

<div class="clearfix"></div>
<br/>
<br/>

<div class="col l3 m4 s12">
    <div class="card-panel" style="padding:24px 0;">
        <ul>
            <li>
                <a class="grey-text waves-effect waves-orange" 
                   style="padding:15px;width:100%;" 
                   href="<?php echo ROOT; ?>tp-Settings">Site Settings</a>
            </li>
            <li>
                <a class="grey-text waves-effect waves-orange" 
                   style="padding:15px;width:100%;" 
                   href="<?php echo ROOT; ?>tp-Security">Security Settings</a>
            </li>
            <li>
                <a class="grey-text waves-effect waves-orange" 
                   style="padding:15px;width:100%;" 
                   href="<?php echo ROOT; ?>tp-Users">User Settings</a>
            </li>
        </ul>
    </div>
</div>

<?php tpAdmin('addUser'); ?>

<div class="col l9 m8 s12">
    <div class="card-panel">
        <div class="table-responsive">


            <table class="responsive-table highlight">

                <thead>

                    <tr class="active" style="color:black;">
                        <th>Id</th>
                        <th>User Name</th>
                        <th>Display Name</th>
                        <th>Password</th>
                        <th>Email</th>
                        <th>Signed Up</th>
                        <th>Privileges</th>
                        <th>Action</th>
                    </tr>    

                </thead>

                <tbody>

                    <?php 

                    $nav = title(2);

                    if($nav == 'pages'){

                        $nav = 0;
                        $nums = '';
                        $limit = '';

                    }else if($nav == 1){ 

                        $nav = 0;
                        $limit = ",10";
                        $nums = 'LIMIT '.$nav;

                    }else{

                        $nav = --$nav;
                        $limit = ",10";
                        $nav = $nav*10+(0);
                        $nums = 'LIMIT '.$nav;
                    }


                    $location = 'U_sers';		 
                    $block = "userTable";
                    $query = "SELECT * FROM `U_sers` ORDER BY `Id` ASC $nums $limit";
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
    </div>
</div>

<div class="clearfix"></div>

<div class="col s2">&nbsp;</div>

<div class="col s8" style="text-align:center;">
    <!--Start Pageinate-->
    <?php
    $table = 'U_sers';
    $limit = 10;
    $currentPage = 'tp-Users';
    paginate($table,$limit,$currentPage);
    ?>
    <!--Close Pageinate-->

</div>

<br>
<br>
<!-- Close Content area-->