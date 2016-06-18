<?php 

$vars = array('id','sUrl','dbName','sCaptcha','cmsPath','eePath','emailHost','emailAuth','emailUser','emailPass','emailEnc','emailPort','emailFrom','emailName','emailAdd','emailReply','eReplyTitle');

    foreach($vars as $var){

        global $$var;

    }
    
$site = "{$dbName}";    

?>
    <div class="admin">

        <button href="#" class="btn btn-primary downish blue"><span>Close</span></button>
        <div class="clearfix">&nbsp;</div>

        <div class="table-responsive">

            <table class="responsive-table highlight">
                
                <thead>
                
                    <tr class="active" style="color:black;">
                        <th>Post Title</th>
                        <th>Body Copy</th>
                        <th>Image</th>
                        <th>Image Caption</th>
                        <th>Date</th>
                        <th>Updated</th>
                        <th>Action</th>
                    </tr>
                
                </thead>

                <tbody>

                    <?php 

                      $block = "tableRow";
                      $query = "SELECT * FROM post";
                      $location = 'post';

                      //query's the db 
                      $table = new admin_model();
                      $table->query($query,$block);

                      //deletes records
                      $delete = new delete();
                      $delete->del($location);

                      ?>

                </tbody>

            </table>

        </div>

    </div>