

<!--Open Content area-->
<div class="cont">

    <div class="container">
    
        <div class="row">
        
        <?php 
            
            $linked = array(
            'skilled-nursing-assisted-living-locations-ma'=>'All BaneCare Locations',
            'skilled-nursing-assisted-living-north-shore-ma'=>'BaneCare North',
            'skilled-nursing-assisted-living-south-shore-ma'=>'BaneCare South',
            'skilled-nursing-assisted-living-boston-metro-ma'=>'BaneCare Metro Boston',
            'skilled-nursing-assisted-living-western-ma'=>'BaneCare West',
            'Home'=>'Back to Careers Main Page'   
            );
            
            tpBlock('sideBar'); 
            secNav($linked);
            
            ?>
        
            <div class="col-md-9">
                
                    <h1 class="fancy">Employment - <?php echo $nav; ?></h1>
                        <br>
                        <div id="textSize"><strong>Text Size: <span id="smaller"> A</span> <span id="bigger">A</span></strong></div>
                        <br>
                    
                    <?php 
                    
                    $query = 'SELECT * FROM careers WHERE Job LIKE "'.title().'"';
                    $block = 'singleJob';
                    $other = $nav;
                    
                    $job = new model();
                    $job->extra($query,$block,$other);
                    
                    ?>
            
            </div>
        
        </div>
        
    </div>
    
</div>
<!--Close Content area-->
