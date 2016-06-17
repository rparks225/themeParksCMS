<?php 

$vars = array('id','sUrl','dbName','sCaptcha','cmsPath','eePath','emailHost','emailAuth','emailUser','emailPass','emailEnc','emailPort','emailFrom','emailName','emailAdd','emailReply','eReplyTitle');

    foreach($vars as $var){

        global $$var;

    }
    
$site = "{$dbName}";    

?>
<div class="admin">
    
  <h1 style="text-align:left;" class="fancy">Blog Posts</h1> 
    <button href="#" class="btn btn-primary downish"><span>Close</span></button>
    <div class="clearfix"></div>
  <hr>

        <div class="table-responsive">

              <table class="table table-hover">

                  <tbody>

                  <tr class="active" style="color:black;">
                      <td>Post Title</td>
                      <td>Body Copy</td>
                      <td>Image</td>
                      <td>Image Caption</td>
                      <td>Date</td>
                      <td>Updated</td>
                      <td>Edit</td>
                      <td>Delete</td>

                  </tr>

                  <?php 

                  $block = "tableRow";
                  $query = "SELECT * FROM post";

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