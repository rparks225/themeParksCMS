<?php 

global $sName;
$sessKey = md5($_SERVER['SERVER_ADDR'].' - '.$sName.'');

?>

<!--Open Cont area-->

<div class="cont" id="int">   

    <div class="fancyCont">
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-4 hidden-xs">
                    <hr>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <h1>Gallery</h1>
                </div>

                <div class="col-md-4 col-sm-4 hidden-xs">
                    <hr>
                </div>

            </div>
        </div>    
    </div>

    <div class="fancyCont">

        <div class="container">
            <div class="row">

                <span<?php if(isset($_SESSION[''.$sessKey.''])){ echo ' id="sort"'; }else{}; ?>>

                    <?php

                    $query = 'SELECT * FROM  `gallery` ORDER BY  `gallery`.`Order` ASC LIMIT 0 , 30';
                    $block = 'galName';
                    $title = new model();
                    $title->query($query,$block);

                    ?>

                </span>

            </div>
        </div>

    </div>

    <?php tpBlock('fancyIsh'); ?>

</div>  

<!--Close Cont area-->
    