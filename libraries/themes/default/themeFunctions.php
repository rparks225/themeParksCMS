<?php

/*=============================================
                               Set Framework
=============================================*/

$frameWork = array(
    'css'=>array(
        'bootstraps.css',
        'jquery-ui.min.css',
        'dropzone1.css',
        'prettyPhoto.css',
        'fontAwsome.css',
        'customStyles.css',
    ),
    'js'=>array(
        '01jquery3.11.1.min.js',
        '02jQueryMigrate.min.js',
        '03jQueryBootstrap.js',
        '04dropZone.min.js',
        '05lazyload.min.js',
        '06prettyPhoto.min.js',
        '07jQueryUI.min.js',
        '08jQueryValidate.min.js',
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
            $a = 'active2';
        }else{
            $a = 'inactive';
        };

        if($link == '#'.substr($link,1)){

            echo '
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">'.substr($link,1).' <span class="caret"></span></a>
                  <ul class="dropdown-menu">';

            foreach($title as $link2 => $title2){

                echo '<li class="'.$a.'"><a href="'.ROOT.$link2.'">'.$title2.'</a></li>';

            }

            echo '</ul>
            </li>';

        }else{

            echo '<li class="'.$a.'"><a href="'.ROOT.$link.'">'.$title.'</a></li>';

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
    echo '<ul class="pagination">';        
    if(!ctype_digit(title(2))){
        echo '<li class="active disabled" style="color:white;">All Pages</li>';
    }else{
        echo '<li><a href="'.$currentPage.'">All Pages</a></li>';
    }   
    while($nums < $newNum){
        $nums++;
        if($nums == title(2) || title(2) == $nums){    
            echo '<li class="active disabled" style="color:white;">'.$nums.'</li>';    
        }else{    
            echo '<li><a href="'.$currentPage.'-'.$nums.'">'.$nums.'</a></li>';    
        }            
    }        
    echo '</ul>';   
}


/*==========================================================
     Formats bread crumbs if you are using bootstrap.css
==========================================================*/
function breadcrumbs($trails){

    echo '<ul class="breadcrumb">';
    foreach($trails as $trail){
        echo '<li><span><img width="27" height="16" src="images/baneLeaf.png"></span> '.$trail.'</li>';
    }
    echo '</ul>';
}

?>