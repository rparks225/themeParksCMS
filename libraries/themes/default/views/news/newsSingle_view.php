<!--Open Cont area-->

<div class="cont" id="int">   

    <div class="fancyCont">
        <div class="container">
            <div class="row">

                <div class="col-md-2 col-sm-2 hidden-xs">
                    <hr>
                </div>

                <div class="col-md-8 col-sm-8 col-xs-12">
                    <h3>
                        {# $query = 'SELECT * FROM post WHERE ID LIKE '.title(2).'' #}
                        {# $block = 'post_heading' #}
                        {# $heading = new model() #}
                        {# $heading->query($query,$block) #}
                    </h3>
                </div>

                <div class="col-md-2 col-sm-2 hidden-xs">
                    <hr>
                </div>

            </div>
        </div>    
    </div>

    <div class="fancyCont">

        <div class="container">
            <div class="row">

                {# $query = 'SELECT * FROM post WHERE ID LIKE '.title(2).'' #}
                {# $block = 'post' #}
                {# $heading = new model() #}
                {# $heading->query($query,$block) #}
                {# $rows = $heading->rows($query) #}
                
                {-- if ($rows == 0) --}
                
                    <div class="row">
                        <h1>Post not found</h1>
                        <hr>    
                    </div>

                    <div class="row">
                        <p>Sorry that post doesn't exist, please try again.</p>
                        <p><a href="News-All">Back to all posts</a></p>
                    </div>
                
                {-- endif --}

            </div>
        </div>

    </div>

    {# tpBlock('fancyIsh') #}

</div>  

<!--Close Cont area-->
