{-- if (!empty('{{ img }}')) --}
    {# $newImg = '{{ img }}' #}
{-- else --}
    {# $newImg = 'image.png' #}
{-- endif --}

<div class="col-md-8">  

        <p>Posted - <b><i>{{ date }}</i></b></p>
        
    <div class="clearfix">&nbsp;</div>

    <p>
        <span>
            {{ script }}
        </span>
    </p>

</div>
        
<div class="col-md-4">

     <a href="{% echo ROOT %}images/files/{{ img }}" rel="prettyPhoto">
        
         <img class="img-responsive pull-right" 
              alt="{{ img }}"
              width="100%" 
              src="{% echo ROOT %}images/files/{% echo $newImg %}" />
              
     </a>
     
     <br>
     
            <div class="clearfix">&nbsp;</div>
            <div class="clearfix">&nbsp;</div>
    
    <a class="btn btn-warning pull-right" href="{% echo ROOT %}News-All" role="button">&laquo; Previous Posts</a>

</div>
        
        
                
    
        