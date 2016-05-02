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

      <table class="table table-hover">

          <tbody>

          <tr class="active" style="color:black;">
              <td>Post Title</td>
              <td>Body Copy</td>
              <td>Image</td>
              <td>Date</td>
              <td>Updated</td>
              <td>Edit</td>
              <td>Delete</td>

          </tr>

          <?php 

          $location = 'post';		 
          $block = "tableRow";
          $query = "SELECT * FROM post";
          $method = 'edited';

          //query's the db 
          $table = new model();
          $table->query($query,$block);

          //deletes records
          $delete = new delete();
          $delete->del($location);


          //updates the record
          if(isset($_POST[''.$method.''])){

              if(isset($_POST['id'])){

                  $id = addslashes($_POST['id']);
                  $title = addslashes($_POST['title']);
                  $img = addslashes($_POST['img']);
                  $script = addslashes($_POST['post']);
                  $Date = addslashes($_POST['date']);

                  $query = 'UPDATE `'.$site.'`.`'.$location.'` SET `Title` = \''.$title.'\', `Image` = \''.$img.'\', `Description` = \''.$script.'\', `Updated` = \''.$Date.'\' WHERE `'.$location.'`.`Id` = \''.$id.'\'';

               }

          };

          $update = new update();
          $update->uped($location,$query,$method);

          ?>

          </tbody>

      </table>
    
</div>         