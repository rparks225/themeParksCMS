<?php 

$vars = array('id','sUrl','dbName','sCaptcha','cmsPath','eePath','emailHost','emailAuth','emailUser','emailPass','emailEnc','emailPort','emailFrom','emailName','emailAdd','emailReply','eReplyTitle');
global $salty;

foreach($vars as $var){

    global $$var;

}

$query = '';
$site = "{$dbName}"; 
$main = $_SERVER["DOCUMENT_ROOT"].$cmsPath;
?>

<!--Open Quick Blog-->
<?php

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
   <div class="col s12">
    <div class="row">
        
            <h4 style="color:#00838F;">Quick Blog Post</h4>

            <div class="row">

                <form class="col s12" method="post" id="edit_Dsh">

                    <input type="hidden" name="id" />

                    <div class="row">

                        <div class="input-field col s12">
                            <input name="title" id="title" type="text" class="validate">
                            <label for="title">Title</label>
                        </div>

                        <div class="input-field col s12">
                            <textarea id="post" name="post" type="text" class="materialize-textarea form-control col-md-12 ckeditor"></textarea>
                            <br>
                        </div>

                        <div class="input-field col s12">
                            <input name="cap" id="caption" type="text" class="validate">
                            <label for="caption">Caption</label>
                        </div>

                        <div class="input-field col s6">
                            <input name="date" id="date" value="<?php echo date('Y-m-d'); ?>" type="text" class="datepicker">
                            <label for="date">Blog Post Date</label>
                        </div>

                        <div class="input-field col s6">
                            <select name="img">
                                <option value="0" selected disabled>Image Select</option>
                                <?php

                                $directory = 'images/files/';
                                $blocks = 'img_select';
                                $other = false;
                                tpDirect($directory,$blocks,$other);

                                ?>

                            </select>
                        </div>

                       <div class="col s12">
                           <button class="btn waves-effect waves-red" type="submit" name="inserted" value="Submit">Submit
                               <i class="material-icons right">send</i>
                           </button>
                       </div>

                    </div>

                </form>

            </div>
        </div>
</div>