<?php $newscript = substr(strip_tags('{{ script }}'), 0, 95); ?>

<!--Card columnn-->
<div class="col-md-4">
    <!--Card-->
    <div class="card wow slideInUp" data-wow-delay="0.2s">

        <!--Card image-->
        <img class="img-fluid" src="{% echo ROOT %}images/files/{{ img }}" alt="Card image cap">

        <!--Card content-->
        <div class="card-body">
            <!--Title-->
            <h4 class="card-title">{{ title }}</h4>
            <!--Text-->
            <p class="card-text">
            <strong>Posted -</strong> <i>{% echo date('M, d Y', strtotime("{{ date }}")) %}</i><br>
            {% echo $newscript %}...</p>
            <a href="{% echo links() %}Post/{{ id }}" class="btn btn-info">Read more</a>
        </div>

    </div>
    <!--/.Card-->
</div>
<!--Card columnn-->