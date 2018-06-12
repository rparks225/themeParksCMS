<?php global $sName; ?>
{# $sessKey = md5($_SERVER['SERVER_ADDR'].' - '.$sName.'') #}

<!--Open Cont area-->

<div class="container">
   
    <div class="row my-5">
        <div class="col-md-12 wow slideInLeft" data-wow-delay="0.02s">
            <h1>Gallery</h1>
            <hr>
        </div>
    </div>

    {-- if (isset($_SESSION[''.$sessKey.''])) --}
        <ul class="sOrd" id="sort">
    {-- else --}
        <ul>
    {-- endif --}
            {# $query = 'SELECT * FROM  `gallery` ORDER BY  `gallery`.`Order` ASC LIMIT 0 , 30' #}
            {# $block = 'galName' #}
            {# $title = new model() #}
            {# $title->query($query,$block) #}
        </ul>
    
</div>

<!--Close Cont area-->
    