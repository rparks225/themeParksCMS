<?php
$newscript = substr(strip_tags('{{ script }}'), 0, 255);
?>                          
<div class="col-md-8 col-sm-8 col-xs-12">  

    <h2 class="text-muted">{{ title }}</h2><br>

      <p>Posted - <i>{{ date }}</i></p>

    <p>{% echo $newscript %}...</p>

</div>
        
    
    <div class="col-md-4 col-sm-4 col-xs-12">
        
        <?php if(!empty('{{ img }}')): ?>

            <a href="{% echo ROOT %}apps/dropzone/upload/Posts/{{ img }}" rel="prettyPhoto">

                <img width="100%" 
                     class="lazy img-fluid pull-right" 
                     data-original="{% echo ROOT %}apps/dropzone/upload/Posts/{{ img }}" 
                     alt="{{ img }}" />
            </a>
        
        <?php else: ?>
               
            <a href="{% echo ROOT %}apps/dropzone/upload/Posts/image.png" rel="prettyPhoto">

                <img width="100%" 
                     class="lazy img-fluid pull-right" 
                     data-original="{% echo ROOT %}apps/dropzone/upload/Posts/image.png" 
                     alt="image.png" />
            </a> 
                
        <?php endif; ?>

                <div class="clearfix">&nbsp;</div>
                <div class="clearfix">&nbsp;</div>

        <a class="btn btn-warning pull-right" href="{% echo ROOT %}News-Post-{{ id }}" role="button">View Post &raquo;</a>

    </div>


    <div class="clearfix">&nbsp;</div>                
        
<hr>
       
    <div class="clearfix">&nbsp;</div> 
        