<?php global $inline; ?>

{-- if (!empty('{{ cover }}')) --}   
    {# $bg = ROOT.'images/uploads/{{ album }}/{{ cover }}' #}    
{-- else --}     
    {# $bg = '' #}    
{-- endif --}


   <div id="list-{{ id }}" class="sOrd">
    
        <div class="col-md-4" 
             style="height:250px;background:url('{% echo $bg %}') no-repeat;background-size:cover;">
             
        </div>
        
        <div class="col-md-8">
        
                <h3>
                        <a href="{% echo ROOT %}Gallery-{{ album }}">
                            {-- if (empty('{{ title }}')) --}
                                {{ album }}
                            {-- else --}
                                {{ title }}
                            {-- endif --}
                        </a>
                </h3>

                <div id="_gallery_{{ album }}" class="e-ease ee:wwig">

                        {# newEE('gallery_{{ album }}') #}

                </div>
                
            <div class="clearfix">&nbsp;</div>

                    <a href="{% echo ROOT %}Gallery/Album/{{ album }}" class="btn btn-warning">
                            View Gallery
                    </a>

            <div class="clearfix"></div>
             
        </div>
        
    <div class="clearfix"></div>    
    <div class="clearfix"></div>
    <hr>         
        
</div>
