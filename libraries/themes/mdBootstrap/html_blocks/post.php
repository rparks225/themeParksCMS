{-- if (!empty('{{ img }}')) --}
    {# $newImg = '{{ img }}' #}
{-- else --}
    {# $newImg = 'image.png' #}
{-- endif --}

<div class="row my-5">
   
    <!--Card-->
    <div class="card card-cascade wider reverse my-4 wow fadeIn" data-wow-delay="0.2s">

        <!--Card image-->
        <div class="view overlay hm-white-slight">
            <img src="https://unsplash.it/1200/450/?random" width="100%" class="img-fluid">
            <a href="#!">
                <div class="mask"></div>
            </a>
        </div>
        <!--/Card image-->

        <!--Card content-->
        <div class="card-body text-center">
            <!--Title-->
            <h4 class="card-title"><strong>{{ title }}</strong></h4>
            <h5 class="indigo-text"><strong>Posted - <i>{% echo date('M, d Y', strtotime("{{ date }}") ) %}</i></strong></h5>

            <div class="card-text">{{ script }}</div>

            <!--Linkedin-->
            <a class="icons-md li-ic blue-text"><i class="fa fa-linkedin fa-2x"> </i></a>
            <!--Twitter-->
            <a class="icons-md tw-ic light-blue-text"><i class="fa fa-twitter fa-2x"> </i></a>
            <!--Dribbble-->
            <a class="icons-md fb-ic indigo-text"><i class="fa fa-facebook fa-2x"> </i></a>

        </div>
        <!--/.Card content-->

    </div>
    <!--/.Card-->
            
</div>
        
<div class="row my-5">
    <a class="btn btn-warning pull-right" href="{% echo ROOT %}News-All" role="button">&laquo; Previous Posts</a>
</div>                                