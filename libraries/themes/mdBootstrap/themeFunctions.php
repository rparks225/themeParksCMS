<?php

/*=============================================
                               Set Framework
=============================================*/

$frameWork = array(
    'css'=>array(
        'bootstrap.min.css',
        'dropzone1.css',
        'jquery-ui.min.css',
        'prettyPhoto.css',
        'fontAwsome.css',
        'mdb.min.css',
        'customStyles.css',
    ),
    'js'=>array(
        '01jquery3.11.1.min.js',
        '02jQueryMigrate.min.js',
        '04dropZone.min.js',
        '05lazyload.min.js',
        '06prettyPhoto.min.js',
        '07jQueryUI.min.js',
        '08jQueryValidate.min.js',
        'popper.min.js',
        'bootstrap.min.js',
        'mdb.min.js',
        'functions.js',
        )
);

/*=============================================
    Formats Links for nav or Footer 
    via array of Links Location & Link Title
=============================================*/
function navi($page){    
    foreach($page as $link => $title){
        if(links() == ROOT.$link){
            $a = ' active';
        }else{
            $a = ' inactive';
        };

        if($link == '#'.substr($link,1)){
            /* Nav Drop Down Link HTML */
            echo '
            
            <li class="nav-item btn-group">
                        <a class="nav-link dropdown-toggle" 
                              id="navbarDropdownMenuLink" 
                              data-toggle="dropdown" 
                              aria-haspopup="true" 
                              aria-expanded="false"> '.substr($link,1).' </a>
                              
                        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                        ';

            foreach($title as $link2 => $title2){
                if(links() == ROOT.$link2){
                    $a = ' active';
                }else{
                    $a = ' inactive';
                };
                /* Drop  */
                echo '
                <a class="white-text dropdown-item'.$a.'" href="'.ROOT.$link2.'">'.$title2.'</a>
                ';

            }

            echo '</div>
            </li>';

        }else{
            /* Single Nav Link HTML */
            echo '
            <li class="nav-item '.$a.'">
                <a class="nav-link" href="'.ROOT.$link.'">'.$title.'</a>
            </li>
            ';

        }

    };    
}


/*==================================
  Paginate Function for Long pages
===================================*/
function paginate($table,$limit,$currentPage){    
    global $mysqli;
    $query = $mysqli->query('SELECT * FROM '.$table.'');
    $count = $query->num_rows;    
    $newNum = $count/$limit;
    $newNum = ceil($newNum);
    $nums = 0;    
    echo '
    <div class="clearfix">&nbsp;</div>
    <ul class="pagination">';        
    while($nums < $newNum){
        $nums++;
        if($nums == title(2) || title(2) == $nums){    
            echo '<li class="active disabled" style="color:white;padding: 4px 10px;">'.$nums.'</li>';    
        }else{    
            echo '<li><a href="'.$currentPage.'-'.$nums.'">'.$nums.'</a></li>';    
        }            
    }        
    if(!ctype_digit(title(2))){
        echo '<li class="active disabled" style="color:white;padding: 4px 10px;">All Pages</li>';
    }else{
        echo '<li><a href="'.$currentPage.'">All Pages</a></li>';
    }   
    echo '</ul>';   
}


/*==========================================================
     Formats bread crumbs if you are using bootstrap.css
==========================================================*/
function breadcrumbs($trails){

    echo '<ul class="breadcrumb">';
    foreach($trails as $trail){
        echo '<li><span></span> '.$trail.'</li>';
    }
    echo '</ul>';
}

?>