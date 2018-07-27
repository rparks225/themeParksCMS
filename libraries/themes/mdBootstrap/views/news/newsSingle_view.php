<!--Open Cont area-->

<div class="container">

        {# $query = 'SELECT * FROM post WHERE ID LIKE '.title(2).'' #}
        {# $block = 'post' #}
        {# $heading = new model() #}
        {# $rows = $heading->rows($query) #}

        {-- if ($rows == 0) --}

          <div class="row my-5">
              <div class="col-md-12 wow slideInLeft">
                  <h1>Post not found</h1>
                  <hr>
              </div>
          </div>
          
           <div class="row my-5">
              <div class="col-md-12">
                  <p>Sorry that post doesn't exist, please try again.&nbsp;</p>
                  <p><a href="{% echo ROOT %}Blog">Back to all posts</a></p>
              </div>
           </div>
        {-- else --}
           
            {# $heading->query($query,$block) #}
            
        {-- endif --}
        
</div>

<!--Close Cont area-->
