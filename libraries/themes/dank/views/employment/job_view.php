
<!--Open Content area-->
<div class="cont">

    <div class="container">
    
        <div class="row-fluid">
        
        <?php require_once 'libraries/themes/cesi/html_blocks/sideBar.php'; ?>
        
            <br><br>
        
            <div class="col-md-8">
            
                <h1>Employment - <?php echo $nav; ?></h1>
                    <br>
                    <div id="textSize"><strong>Text Size: <span id="smaller"> A</span> <span id="bigger">A</span></strong></div>
                    <br>
                
                <?php 
                
                $query = 'SELECT * FROM careers WHERE Job LIKE "'.$nav.'"';
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
