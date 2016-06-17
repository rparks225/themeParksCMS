

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
                  <h1 class="fancy"><?php echo 'All - '.title(); ?></h1>
                  <hr>
                  
                  <?php 
				 
					  $query = 'SELECT * FROM post';
					  $block = 'feature';
					  $heading = new model();
					  
					  $heading->query($query,$block);
				  ?>
                
                  <div class="clearfix"></div>
                 
              </div>
                  
          </div>
          
      </div>
  </div>
  <!--Close Cont area-->
  