<!--Open Cont area-->

<div class="cont" id="int">   

    <div class="fancyCont">
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-4 hidden-sm-down">
                    <hr>
                </div>

                <div class="col-md-4 col-sm-12 col-xs-12">
                    <h1>{{ heading }}</h1>
                </div>

                <div class="col-md-4 col-sm-4 hidden-sm-down">
                    <hr>
                </div>

            </div>
        </div>    
    </div>

    <div class="fancyCont">

        <div class="container">
            <div class="row">

                {-- if ({{ edit }} == false) --}
                   
                    {{ html }}
                    
                {-- else --}
                   
                    {# tpBlock('ee') #}
                    
                {-- endif --}
                
                
            </div>
        </div>

    </div>

    {# tpBlock('fancyish') #}

</div>  
 
<!--Close Cont area-->