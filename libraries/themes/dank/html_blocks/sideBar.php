<div class="col-md-4" id="sideBar">
                            
    <h3 class="fancy">Recent Posts</h3>
    
        <br>
    
    <?php

    $query = 'SELECT * FROM post ORDER BY Id DESC LIMIT 5';
    $block = 'sideLinks';
    $sidePosts = new model();
    $sidePosts->query($query,$block);

    ?>    

</div>
