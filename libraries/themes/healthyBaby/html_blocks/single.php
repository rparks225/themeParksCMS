
<?php tpBlock('CTA'); ?>

<!--Open Page Content-->
        <div class="row cont" id="<?php echo title(); ?>">
            
            <div class="col-md-9">
                
                 <!--Open Title-->
                 <div class="titles">
                         <hr>
                     <h1><?php echo $heading ?></h1>
                 </div>  
                 <!--Close Title-->
                
                 <?php 

                   if($edit == 'false'){

                       echo $html;

                       }else{

                           include 'libraries/themes/'.theme().'/html_blocks/ee.php';

                           }

                    ?>
                
            </div>
            
            <?php require_once 'libraries/themes/'.theme().'/html_blocks/sideBar.php'?>
            
        </div>
        <!--Close Page Content-->
    