<!--Open Content area-->
<div class="cont">

    <div class="container">
    
        <div class="row-fluid">
        
        <br><br>
        
            <div class="col-md-8">
            
            <h1>All Employment Opportunities</h1>
                
                <br><br>
                    <div id="textSize"><strong>Text Size: <span id="smaller"> A</span> <span id="bigger">A</span></strong></div>
                <br>
            
				<?php  

                    $query ='Select * FROM careers';
                    $block = 'job';

                    $jobs = new model();
                    $jobs->query($query, $block);
                
                ?>
            
            </div>
            
                {# tpBlock('sideBar') #}
        
        </div>
        
    </div>
    
</div>
<!--Close Content area-->
