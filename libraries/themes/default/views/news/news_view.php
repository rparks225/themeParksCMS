

<!--Open Cont area-->
  <div class="cont">
      <div class="container">
          <div class="row">
          
          <br><br><br>
   
              <div class="col-md-8">
                  <h2 class="fancy"><?php echo 'All - '.title(); ?></h2><br>
                  
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
  