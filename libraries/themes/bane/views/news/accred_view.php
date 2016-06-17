<div class="cont">

    <div class="container">
    
        <div class="row">
        
            <?php 
            
            $page = array(
                'skilled-nursing-news'=>'News & Media',
                'skilled-nursing-accreditations'=>'Awards and Accreditations',
                'skilled-nursing-community'=>'BaneCare Community'
            );
            tpBlock('sideBar');
            secNav($page);
            
            ?>
            
            <div class="col-md-9">
            
                <?php 
                    $title = title();
                    $query = 'SELECT * FROM page WHERE `Title` LIKE "'.title(2).'"';
                    $block = 'heading';
                    $heading = new model();
                    $heading->query($query,$block);
                
                ?>
                
                <hr>
                
                <?php 
                    $title = title();
                    $query = 'SELECT * FROM page WHERE `Title` LIKE "'.title(2).'"';
                    $block = 'ee';
                    $heading = new model();
                    $heading->query($query,$block);
                ?>
                
            </div>
        
        </div>
        
    </div>
    
</div>