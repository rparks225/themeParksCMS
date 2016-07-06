<?php global $nav; ?>
<!--Open Content area-->
<div class="cont">

    <div class="container">
    
        <div class="row-fluid">
        
            <br><br>
        
            <div class="col-md-8">
            
                <h1>Employment - <?php echo title(); ?></h1>
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
            
            <?php tpBlock('sideBar'); ?>
        
        </div>
        
    </div>
    
</div>
<!--Close Content area-->
