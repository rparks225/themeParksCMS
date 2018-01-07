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
            <h1>Search results for: <span style="color:grey;">{% echo $search %}</span></h1>
        </div>
    </div>
    
    <div class="row my-5">
        <div class="col-md-12">
           
            {# $query = 'SELECT * FROM page WHERE Title LIKE "%'.$search.'%"' #}
            {# $page = new model() #}
            {# $rows = $page->rows($query) #}
            
            {-- if ($rows == 0) --}

                <!--Open Cont area-->

                <strong>&nbsp;</strong>

                <!--Close Cont area-->
            
            {-- else --}
            
                <h1>Pages</h1>
                <hr>
               
                {# $block = 'results' #}
                {# $page->query($query, $block) #}

            {-- endif --}
 
            {# $query = 'SELECT * FROM post WHERE Title LIKE "%'.$search.'%"' #}            
            {# $page = new model() #}            
            {# $rows = $page->rows($query) #}

            {-- if ($rows == 0) --}

                <!--Open Cont area-->

                <strong>&nbsp;</strong>

                <!--Close Cont area-->
            {-- else --}
               
                <h1>Posts</h1>
                <hr>
                {# $block = 'results' #}
                {# $page->query($query, $block) #}
            
            {-- endif --}
     
            {# $query = 'SELECT * FROM careers WHERE Job LIKE "%'.$search.'%"' #}            
            {# $page = new model() #}            
            {# $rows = $page->rows($query) #}

            {-- if ($rows == 0) --}

                <!--Open Cont area-->

                <strong>&nbsp;</strong>

                <!--Close Cont area-->
            
            {-- else --}
               
                <h1>Careers</h1>
                <hr>
                {# $block = 'careerResults' #}
                {# $page->query($query, $block) #}

            {-- endif --}
            
        </div>
    </div>
    
</div>

