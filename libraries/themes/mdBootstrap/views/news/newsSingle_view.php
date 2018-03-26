<!--Open Cont area-->

<div class="container">

        {# $query = 'SELECT * FROM post WHERE ID LIKE '.title(2).'' #}
        {# $block = 'post' #}
        {# $heading = new model() #}
        {# $heading->query($query,$block) #}
        {# $rows = $heading->rows($query) #}

        {-- if ($rows == 0) --}

          <div class="row my-5">
              <h1>Post not found</h1>
              <hr>    
          </div>
          
           <div class="row my-5">
               <p>Sorry that post doesn't exist, please try again.</p>
               <p><a href="News-All">Back to all posts</a></p>
           </div>

        {-- endif --}
        
</div>

<!--Close Cont area-->
