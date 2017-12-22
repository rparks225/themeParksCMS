  <?php

if( !empty($_POST["search"]) ){
    $search = addslashes(strip_tags($_POST["search"]));
}else{
    $search = 'null';
}

?>
    <div class="container">
    <div class="row my-5">
        <div class="col-md-12">
        <h1>Pages {% echo $search %}</h1>
        <hr>
        </div>
    </div>
    
    <div class="row my-5">
        <div class="col-md-12">
            {# $query = 'SELECT * FROM page WHERE Title LIKE "%'.$search.'%"' #}
            {# $page = new model() #}
            {# $rows = $page->rows($query) #}
            {-- if ($rows == 0) --}

            <!--Open Cont area-->

            <strong>No results found</strong>

            <!--Close Cont area-->
            
            {-- else --}
            
                {# $block = 'results' #}
                {# $page->pages($query, $block) #}

            {-- endif --}
        </div>
    </div>
    
    <div class="row my-5">
        <div class="col-md-12">
            <h1>Posts</h1>
            <hr>
        </div>
    </div>
    <div class="row my-5">
        <div class="col-md-12">
            {# $query = 'SELECT * FROM post WHERE Title LIKE "%'.$search.'%"' #}            
            {# $page = new model() #}            
            {# $rows = $page->rows($query) #}

            {-- if ($rows == 0) --}

            <!--Open Cont area-->

            <strong>No results found</strong>

            <!--Close Cont area-->
            {-- else --}
            
                {# $block = 'results' #}
                {# $page->pages($query, $block) #}
            
            {-- endif --}
        </div>
    </div>

    <div class="row my-5">
        <div class="col-md-12">
            <h1>Careers</h1>
            <hr>
        </div>
    </div>
    <div class="row my-5">
        <div class="col-md-12">
            {# $query = 'SELECT * FROM careers WHERE Job LIKE "%'.$search.'%"' #}            
            {# $page = new model() #}            
            {# $rows = $page->rows($query) #}

            {-- if ($rows == 0) --}

            <!--Open Cont area-->

            <strong>No results found</strong>

            <!--Close Cont area-->
            
            {-- else --}
            
                {# $block = 'careerResults' #}
                {# $page->pages($query, $block) #}

            {-- endif --}
        </div>
    </div>
    
</div>

