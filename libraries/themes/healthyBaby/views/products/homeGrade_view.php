
<?php tpBlock('CTA'); ?>

<!--Open Content-->
    <div class="cont row" id="<?php echo title(); ?>">

        <div class="col-md-9">
            
            <?php tpBlock('brandBlock'); ?>
            
            <!--Open Title-->
             <div class="titles">
                     <hr>
                 <h1>All Products</h1>

             </div>  
             <!--Close Title-->
            
            <?php
            
            $query = "SELECT * FROM `Products` WHERE `Grade` LIKE 'Home' ORDER BY `Products`.`Company` ASC";
            $block = 'prodBlock';
            $homeGrade = new model();
            $homeGrade->query($query,$block);
            
            ?>
            
            <a href="<?php echo ROOT; ?>Products">&larr;Back</a>
            
        </div>

        <?php tpblock('sideBar'); ?>    
        
    </div>
<!--Close Content-->
