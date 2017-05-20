<a class="col-md-12" href="{% echo ROOT %}Employment-{{ job }}">
       <h3>{{ job }}</h3>
</a>

    <p class="col-md-8">
    
        {% echo substr('{{ script }}', 0, 255) %}...<br><br>
    
    </p>

<a href="{% echo ROOT %}Employment-{{ job }}" class="col-md-2 btn btn-default">
        Apply
</a>
