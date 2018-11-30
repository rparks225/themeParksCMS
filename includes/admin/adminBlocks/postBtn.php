<button class="waves-effect waves-red btn" onclick="$('.postBox').slideToggle();">Add New Post</button>
<div class="clearfix">&nbsp;</div>    

<!-- Post Box -->
<div class="postBox" style="display:none;">
	<div class="card" style="padding:40px;">
		<?php tpAdmin('insert_form'); ?>
		<div class="clearfix">&nbsp;</div>
	</div>    
</div>
<!-- ./Post Box -->

<div class="clearfix">&nbsp;</div>    