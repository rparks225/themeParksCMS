<?php tpBlock('CTA'); ?>

<!--Open Content-->
    <div class="cont row" id="<?php echo title(); ?>">

        <div class="col-md-9">
            
            <!--Open Title-->
             <div class="titles">
                     <hr>
                 <h1>Accessories</h1>

             </div>  
             <!--Close Title-->
            
            <?php
            
            $query = "SELECT * FROM `Products` WHERE `Grade` LIKE 'Access' ORDER BY `Products`.`Company` ASC";
            $block = 'prodOptions';
            $homeGrade = new model();
            $homeGrade->query($query,$block);
            
            ?>
            
            <a href="<?php echo ROOT; ?>Products">&larr;Back</a> 
            
        </div>

        <?php tpblock('sideBar'); ?>    
        
    </div>
<!--Close Content-->