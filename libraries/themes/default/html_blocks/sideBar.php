
<div class="col-md-4 rPosts">

    <h2 class="fancy">Recent Posts</h2><br>
    
    <?php
    
	$query = 'SELECT * FROM post ORDER BY Id DESC LIMIT 5';
	$block = 'sideLinks';
	$sidePosts = new model();
	$sidePosts->query($query,$block);
	
	?>    

</div>
