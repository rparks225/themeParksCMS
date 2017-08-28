<?php 

include '../../../apps/cms/model/admin_model.php';

$vars = array('id','sUrl','dbName','sCaptcha','cmsPath','eePath','emailHost','emailAuth','emailUser','emailPass','emailEnc','emailPort','emailFrom','emailName','emailAdd','emailReply','eReplyTitle');

    foreach($vars as $var){

        global $$var;

    }

$query = false;

if($mysqli->connect_errno){
	
	$mysqli->close();
	echo 'not connected';
	
	}

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <link rel="stylesheet" href="css/dropzone.css" />
        <link rel="stylesheet" href="css/basic.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" />

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css" />

    </head>

    <body>

        <div style="width:100%;margin:10px auto 0;padding:0px;" role="tabpanel">
           
            <div class="form-group">
                <strong>Select Album</strong>
                <i>*Please refresh the page after upload is complete</i>
                <select class="form-control" id="albumChoice">
                    <option class="active" value="">select</option>
                    <?php 

                    direct($_SERVER['DOCUMENT_ROOT'].$cmsPath.'images/uploads/');

                    ?>
                </select>
                <br>
                <br>
                <form style="display:none;" action="index.php" class="dropzone">
                    <input type="hidden" name="album" id="album">
                </form>
            </div>

        </div>




        <script src="dropzone.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function () {

                $('#albumChoice').change(function () {

                    var value = $(this).val();
                    if (value.length > 0) {
                        console.log(value);
                        $('form.dropzone').fadeIn();
                        $('#album').val(value);

                    } else {
                        $('form.dropzone').fadeOut();
                    }
                });

            });
        </script>

    </body>

    </html>