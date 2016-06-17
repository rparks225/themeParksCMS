<!--Open Cont area-->
  <div class="cont">
      <div class="container">
          <div class="row">
              
              <?php
              
              $links = array(
                  'skilled-nursing-news'=>'News & Media',
                  'skilled-nursing-accreditations'=>'Awards and Accreditations',
                  'skilled-nursing-community'=>'BaneCare Community'
              );
              tpBlock('sideBar');
              secNav($links);
              
              ?>
   
              <div class="col-md-9">
                  
			   <?php
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
  