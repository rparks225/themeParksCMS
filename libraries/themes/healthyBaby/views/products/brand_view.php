<?php tpBlock('CTA'); ?>

<!--Open Content-->
    <div class="cont row" id="<?php echo title(); ?>">

        <div class="col-md-9">
            
            <!--Open Title-->
             <div class="titles">
                     <hr>
                 <h1><?php echo title(); ?></h1>

             </div>  
             <!--Close Title-->
            
            <?php
             
            $query = 'SELECT * FROM `Products` WHERE `Company` LIKE "'.title().'"';
            $block = 'prodBlock';
            $homeGrade = new model();
            $homeGrade->query($query,$block);
            
            ?>
            
             <?php
            
            $brand = array('Ameda','Freemie','Medela','Ardo');
            foreach($brand as $brands){
             
                if(title() == $brands){
                
                    echo '<!--Open Title-->
                         <div class="titles">
                                 <hr>
                             <h1>You may also be interested in:</h1>

                         </div>  
                         <!--Close Title-->';
                }
                
            }
             
            $query = 'SELECT * FROM `Products` WHERE `Company` LIKE "'.title().'"';
            $block = 'prodOptions';
            $homeGrade = new model();
            $homeGrade->query($query,$block);
            
            ?>
            
            <a href="<?php echo ROOT; ?>Home">&larr;Back</a>
            
        </div>

        <?php tpblock('sideBar'); ?>    
        
    </div>
<!--Close Content-->