<!--Open Cont area-->
  <div class="cont">
      <div class="container">
          <div class="row">
          
          <br><br><br>
   
              <div class="col-md-8">
                   <?php
					$query = 'SELECT * FROM post WHERE ID LIKE '.$nav.'';
					$block = 'post_heading';
					$heading = new model();
					$heading->query($query,$block);
					?>
                  
			   <?
                $query = 'SELECT * FROM post WHERE ID LIKE '.$nav.'';
                $block = 'post';
                $heading = new model();
                $heading->query($query,$block);
                ?>
                 
              </div>
              
                  <?php require_once 'libraries/themes/'.theme().'/html_blocks/sideBar.php'?>
                  
          </div>
          
      </div>
  </div>
  <!--Close Cont area-->
  <br><br>
  