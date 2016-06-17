
<!--Open Content-->
<div class="cont">

    <div class="container">
    
        <div class="row">
        
            <?php 
            
                    $page = array(
                    'skilled-nursing-assisted-living-locations-ma'=>'All BaneCare Locations',
                    'skilled-nursing-assisted-living-north-shore-ma'=>'BaneCare North',
                    'skilled-nursing-assisted-living-south-shore-ma'=>'BaneCare South',
                    'skilled-nursing-assisted-living-boston-metro-ma'=>'BaneCare Metro Boston',
                    'skilled-nursing-assisted-living-western-ma'=>'BaneCare West', 
                    );
            
                tpBlock('sideBar');
                secNav($page);
            
            ?>
            
            <div class="col-md-9">
            
                <h1 class="fancy">BaneCare Skilled Nursing, Assisted Living Locations in Massachusetts</h1>
                <br>
                 <!-- Nav tabs -->
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#all" aria-controls="all" role="tab" data-toggle="tab">All Facilities</a>
                    </li>
                    <li role="presentation">
                        <a href="#home" aria-controls="home" role="tab" data-toggle="tab">BaneCare North</a>
                    </li>
                      
                    <li role="presentation">
                        <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">BaneCare South</a>
                    </li>
                      
                    <li role="presentation">
                        <a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">BaneCare Metro Boston</a>
                    </li>
                      
                    <li role="presentation">
                        <a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">BaneCare West</a>
                    </li>
                  </ul>
                        
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="all">
                    
                        <div class="clearfix"><br><br></div>
                            
                            <?php newEE('baneNorth'); ?>
                        
                            <hr/><br>

                            <?php newEE('baneSouth'); ?>

                            <hr/><br>
                        
                            <?php newEE('baneMetroBoston'); ?>
                        
                            <hr/><br>

                            <?php newEE('baneWest'); ?>
                        
                    </div>  
                    <div role="tabpanel" class="tab-pane fade" id="home">
                    
                        <div class="clearfix"><br><br></div>
                            
                            <?php newEE('baneNorth'); ?>
                      
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="profile">
                    
                        <div class="clearfix"><br><br></div>
                        
                            <?php newEE('baneSouth'); ?>
                        
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="messages">
                        
                        <div class="clearfix"><br><br></div>

                        <?php newEE('baneMetroBoston'); ?>
                      
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="settings">
                      
                        <div class="clearfix"><br><br></div>

                        <?php newEE('baneWest'); ?>
                    
                    </div>
                  </div>
            
            </div>
        
        </div>
        
    </div>

</div>
<!--Close Content-->
