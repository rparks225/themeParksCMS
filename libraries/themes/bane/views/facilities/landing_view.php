<div class="cont">

    <div class="container">
    
        <div class="row">
        
            <?php 
            
            if(title(2) == 'Abbott-House' || title(2) == 'The-Bostonian' || title(2) == 'Devereux-House' || title(2) == 'Rosewood'){
                
                 $page = array(
                ''.title().'-skilled-nursing-home-rehabilitation'=>''.implode(' ',explode('-',title())).'',
                ''.title().'-skilled-programs-services'=>'Programs/Services',
                ''.title().'-leadership-team'=>'Leadership',
                ''.title().'-skilled-nursing-photo-gallery'=>'Photo Gallery',
                ''.title().'-virtual-tours'=>'Virtual Tours',
                ''.title().'-Alliance'=>'Alliance Health',
                ''.title().'-contact-referrals'=>'Contact and Referrals',
                );
                
            }else if(title(2) == 'Sugar-Hill'){
                    
                     $page = array(
                        ''.title(2).'-assisted-living-home-rehabilitation'=>''.implode(' ',explode('-',title(2))).'',
                        ''.title(2).'-assisted-living-programs-services'=>'Programs/Services',
                        ''.title(2).'-leadership-team'=>'Leadership',
                        ''.title(2).'-assisted-living-photo-gallery'=>'Photo Gallery',
                        ''.title(2).'-virtual-tours'=>'Virtual Tours',
                        ''.title(2).'-contact-referrals'=>'Contact and Referrals',
                        );
                    
                }else if(title(2) == 'Hancock-Park'){

                         $page = array(
                        ''.title(2).'-skilled-nursing-home-rehabilitation'=>''.implode(' ',explode('-',title(2))).'',
                        ''.title(2).'-skilled-programs-services'=>'Programs/Services',
                        ''.title(2).'-leadership-team'=>'Leadership',
                        ''.title(2).'-skilled-nursing-photo-gallery'=>'Photo Gallery',
                        ''.title(2).'-virtual-tours'=>'Virtual Tours',
                        ''.title(2).'-Assisted-Living-Residency'=>'Assisted Living Residency',
                        ''.title(2).'-contact-referrals'=>'Contact and Referrals',
                        );
                    
                    }else{
                
                $page = array(
                ''.title().'-skilled-nursing-home-rehabilitation'=>''.implode(' ',explode('-',title())).'',
                ''.title().'-skilled-programs-services'=>'Programs/Services',
                ''.title().'-leadership-team'=>'Leadership',
                ''.title().'-skilled-nursing-photo-gallery'=>'Photo Gallery',
                ''.title().'-virtual-tours'=>'Virtual Tours',
                ''.title().'-contact-referrals'=>'Contact and Referrals',
                );
                
            }
               
            
            tpBlock('sideBar');
            secNav($page);
            
            ?>
            
            <div class="col-md-9">
            
                <?php
                  
                $title = title(2);
                global $pages;
                
                    $add = $pages[$title]['add'];
                    $phone = $pages[$title]['phone'];              
           
                    $trail = array(''.$add.'',''.$phone.'');
                    breadcrumbs($trail);
                
                ?>
                
                <img src="images/welcome.jpg" />
                
                <hr>
                
                <?php 
                    $title = title();
                    $query = 'SELECT * FROM page WHERE `Title` LIKE "'.title().'"';
                    $block = 'ee';
                    $heading = new model();
                    $heading->query($query,$block);
               
                ?>
                
            </div>
        
        </div>
        
    </div>
    
</div>