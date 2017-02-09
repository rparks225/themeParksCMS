

<!--Open Cont area-->
  <div class="cont">
      <div class="container">
          <div class="row">
   
              <div class="col-md-8">
                  <h1 class="fancy"><?php echo 'All - <span class="blueish">'.title().'</span>'; ?></h1><br>
                  
                  <?php 
				 
					  $query = 'SELECT * FROM post';
					  $block = 'feature';
					  $heading = new model();
					  
					  $heading->query($query,$block);
				  ?>
                
                  <div class="clearfix"></div>
                 
              </div>
              
                  <?php require_once 'libraries/themes/'.theme().'/html_blocks/sideBar.php'?>
                  
          </div>
          
      </div>
  </div>
  <!--Close Cont area-->
  