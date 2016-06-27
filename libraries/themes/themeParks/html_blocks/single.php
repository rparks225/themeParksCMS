
 <!--Open Cont area-->
  <div class="cont" id="<?php echo title(); ?>">
      <div class="container">
          <div class="row">
   
              <div class="col-md-8">
                  <h2 class="fancy"><?php echo $heading ?></h2><br>
                  
                      <?php 

                           if($edit == 'false'){

                                   echo $html;

                               }else{

                                    include 'libraries/themes/'.theme().'/html_blocks/ee.php';

                           };

                        ?>
                 
                  <br><br>
                  
              </div>
              
                  <?php require_once 'libraries/themes/'.theme().'/html_blocks/sideBar.php'?>
                  
          </div>
      </div>
  </div>
<!--Close Cont area-->

<br><br>
    