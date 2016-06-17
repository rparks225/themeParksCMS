
<!--Open Body Content-->
<div class="cont">
    <div class="container">
        <div class="row">
    
        <!--Open Sec Nav-->
            <?php
            
            $links = array(
                 'services-amenities'=>'Services & Amenities',
                 'skilled-nursing-rehabilitation-services'=>'Skilled Nursing',
                 'short-term-rehabilitation-servicess'=>'Rehabilitation',
                 'assisted-living-services'=>'Assisted Living',
                 'respite-care'=>'Respite Care',
                 /*'hospice-care'=>'Hospice',
                 'specialty-care'=>'Specialty Care',
                 'nutritional-services-skilled-nursing'=>'Diet & Nutrition',
                 'skilled-nursing-assisted-living-amenities'=>'Facility Amenities',
                 'discharge-planning'=>'Discharge Planning'*/
                );
            
            tpBlock('sideBar');
            secNav($links);
            
            ?>
        <!--Close Sec Nav--> 
            
            <div class="col-md-9">
                
                <?php
                
                $query = 'SELECT * FROM page WHERE `Title` LIKE "'.title().'"';
                $block = 'heading';
                $heading = new model();
                $heading->query($query,$block);
                
                ?>
                
                <hr>
                
                    <?php 

                     $query = 'SELECT * FROM page WHERE `Title` LIKE "'.title().'"';
                     $block = 'ee';
                     $ee = new model();
                     $ee->query($query,$block);

                    ?>
                
            </div>
        
        </div>
    </div>
</div>
<!--Close Body Content-->

