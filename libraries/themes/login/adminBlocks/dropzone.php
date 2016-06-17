
<!-- Open Dropzone -->
<div role="tabpanel">

		  <!-- Nav tabs -->
		  <ul class="nav nav-tabs" role="tablist">
		    <li role="presentation" class="active"><a href="#add" aria-controls="add" role="tab" data-toggle="tab">Add Photos</a></li>
		    <li role="presentation"><a href="#edit" aria-controls="edit" role="tab" data-toggle="tab">Add New Gallery</a></li>
		  </ul>

		  <!-- Tab panes -->
		  <div class="tab-content"><br>
		    <div role="tabpanel" class="tab-pane active" id="add">
		    	<span>Select Album</span>
				<select id="albumChoice">
					<option class="active" value="">select</option>
					<?php 
					
					$directory = 'images/uploads';
					$block = 'img_select';
					
					direct($directory,$block);
					
					?>
				</select><br><br>
		    	<form style="display:none;" action=" " class="dropzone">
					<input type="hidden" name="album" id="album">
				</form>
		    </div>
            
		    <div role="tabpanel" class="tab-pane" id="edit">
		    	<br><br>
                
                <form method="post">
                
                <label>Gallery Name</label><br>
					<input type="text" name="album" id="album">
                    <input type="submit" name="submit" value="Add New Gallery">
				</form>
                
		    </div>
            
		  </div>

		</div>
 <!-- Close Dropzone -->
        