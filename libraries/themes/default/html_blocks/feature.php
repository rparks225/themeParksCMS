<?php $newscript = substr( strip_tags('{{ script }}'), 0, 255 ); ?>

<div class="col-md-8 col-sm-8 col-xs-12">  

    <h2 class="text-muted">{{ title }}</h2><br>

    <p>Posted - <i>{% echo date( 'M d, Y', strtotime( '{{ date }}' ) ) %}</i></p>

    <p>{% echo $newscript %}...</p>

</div>
        
    
    <div class="col-md-4 col-sm-4 col-xs-12">
        
        {-- if (!empty('{{ img }}')) --}

            <a href="{% echo ROOT %}images/files/{{ img }}" rel="prettyPhoto">

                <img width="100%" 
                         class="lazy img-fluid pull-right" 
                         data-original="{% echo ROOT %}images/files/{{ img }}" 
                         alt="{{ img }}" />
            </a>
        
        {-- else --}
               
            <a href="{% echo ROOT %}images/files/image.png" rel="prettyPhoto">

                <img width="100%" 
                         class="lazy img-fluid pull-right" 
                         data-original="{% echo ROOT %}images/files/image.png" 
                         alt="image.png" />
            </a> 
                
        {-- endif --}

                <div class="clearfix">&nbsp;</div>
                <div class="clearfix">&nbsp;</div>

        <a class="btn btn-warning pull-right" href="{% echo ROOT %}Blog/Post/{{ id }}" role="button">View Post &raquo;</a>

    </div>


    <div class="clearfix">&nbsp;</div>                
        
<hr>
       
    <div class="clearfix">&nbsp;</div> 
        