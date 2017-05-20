<?php $img = '{{ img }}'; ?>

<div class="col-md-8">  

        <p>Posted - <i>{{ date }}</i></p>

    <p>
        <span>
            {{ script }}
        </span>
    </p>

</div>
       
        
<div class="col-md-4">

     <a href="{% echo ROOT %}apps/dropzone/upload/Posts/{{ img }}" rel="prettyPhoto">
        
         <img class="img-responsive pull-right" 
              alt="{{ img }}"
              width="100%" 
              src="{% echo ROOT %}apps/dropzone/upload/Posts/<?php 
               if(!empty('{{ img }}')):
                     echo $img;
               else:
                      echo 'image.png';
               endif;       
              ?>" />
              
     </a>
     
     <br>
     
            <div class="clearfix">&nbsp;</div>
            <div class="clearfix">&nbsp;</div>
    
    <a class="btn btn-warning pull-right" href="{% echo ROOT %}>News-All" role="button">&laquo; Previous Posts</a>

</div>
        
        
                
    
        