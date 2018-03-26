{-- if (!empty("{{ cover }}")) --}   
    {# $bg = ROOT."images/uploads/{{ album }}/{{ cover }}" #}    
{-- else --}     
    {# $bg = '' #}    
{-- endif --}

<div class="row my-5">
    <div class="col-md-12 wow fadeIn" data-wow-delay="0.02s">
            <div class="col-md-4 pull-left" style="border:1px solid grey;box-shadow:3px 3px 2px grey;height:250px;overflow:hidden;background:url('{% echo $bg %}') no-repeat;background-size:cover;">

            </div>

            <div class="col-md-8 pull-left">

                <h3>
                    <a href="{% echo ROOT %}Gallery/Album/{{ album }}">
                        {-- if (empty("{{ title }}")) --}
                            {{ album }}
                        {-- else --}
                            {{ title }}
                        {-- endif --}
                    </a>
                </h3>

                <div id="_gallery_{{ album }}" class="e-ease ee:wwig">

                    {# newEE("gallery_{{ album }}") #}

                </div>

                <br>

                <a href="{% echo ROOT %}Gallery/Album/{{ album }}" class="btn btn-warning">
                    View Gallery
                </a>

                <br>

            </div>  


            <div class="clearfix">&nbsp;</div>
            <div class="clearfix">&nbsp;</div>
            <hr>
    </div>
</div>