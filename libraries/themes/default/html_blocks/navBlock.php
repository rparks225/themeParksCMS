<?php

if(links() == ROOT.$location){
    $a = 'active';
}else{
    $a = 'inactive';
};


if(!empty($navs)){
        
    
        //Sets Drop down
       
        if($navs == 'parent' || $navs == 'child'){

            if($navs == 'child' && $navOrder == $navId){
                $child = '<a class="dropdown-item '.$a.'" href="'.ROOT.$location.'">'.$locText.' - '.$navId.'</a>';
            }
           
            if($navs == 'parent'){
                
                $parent = '            
            <li class="nav-item dropdown '.$a.'">
              <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                '.$locText.' - Parent
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item '.$a.'" href="'.ROOT.$location.'">'.$locText.' - '.$navId.'</a>
                '.$child.'
                </div>
            </li>
            ';
                
            }
            
            echo $parent;

        }else if($navs == 'yes'){
            //Sets Menu Item
            echo '<li class="nav-item '.$a.'"><a class="nav-link" href="'.ROOT.$location.'">'.$locText.'</a></li>';

        }
    
}

?>