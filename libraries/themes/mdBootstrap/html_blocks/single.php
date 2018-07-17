<!--Open Cont area-->

<div class="container">
   
    <div class="row my-5">
        <div class="col-md-12 wow slideInLeft" data-wow-delay="0.2s">                        
                <h1>{{ heading }}</h1>
                <hr>                     
        </div>
    </div>
    
</div>    
    
<div class="container">    
   
    <div class="row my-5 wow fadeIn" data-wow-delay="0.4s">
        {-- if ("{{ edit }}" == false) --}

            {{ html }}

        {-- else --}

           <div class="col-md-12">
               {# tpBlock('ee') #}
           </div>

        {-- endif --}
    </div>
    
</div>
 
<!--Close Cont area-->