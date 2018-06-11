<button class="waves-effect waves-red btn modal-trigger btn modal-trigger" data-target="addMenu">Add new menu</button>

<!-- Modal -->
<div class="modal" id="addMenu" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title" id="myModalLabel">Add New Menu</h4>
            </div>
            <div class="modal-body">

                <form class="form" method="post" style="">

                    <div class="form-group col s12">
                        <input class="form-control" required type="text" name="menuName" value="">
                        <label>Menue Name:</label>
                    </div>
                    
                        <div class="clearfix">&nbsp;</div>
                    
                    <div class="form-group col s12">
                        <input type="submit" name="Added" class="btn btn-default" value="Submit" />
                    </div>

                </form>
                    <div class="clearfix">&nbsp;</div>
            </div>
        </div>
    </div>
</div>
<!--Close Modal-->


<?php 

$vars = array('id','sUrl','dbName','sCaptcha','cmsPath','eePath','emailHost','emailAuth','emailUser','emailPass','emailEnc','emailPort','emailFrom','emailName','emailAdd','emailReply','eReplyTitle');

foreach($vars as $var){

    global $$var;

}

$method = 'Added';
$location = 'Nav';
$query = false;	

if(isset($_POST[''.$method.''])){

    if(isset($_POST['menuName'])){

        $menu = addslashes($_POST['menuName']);
        $query = 'INSERT INTO `'.$dbName.'`.`'.$location.'` (`Id`, `Menu_Name`) VALUES (NULL, \''.$menu.'\')';

    }

};

$addPage = new update();
$addPage->uped($location,$query,$method);

?>