  
<li id="{% echo 'item-{{ id }}' %}" class="col-md-4" style="list-style:none;float:left;overflow:hidden;height:300px;margin-bottom:15px;">
  
    <a href="{% echo ROOT %}images/uploads/{{ gallery }}/{{ img }}" rel="prettyPhoto[{{ gallery }}]">
        
        <img class="lazy" 
             style="height:200%;overflow:hidden;" 
             data-gallery="{{ gallery }}" 
             alt="{{ img }}" 
             data-original="{% echo ROOT %}images/uploads/{{ gallery }}/{{ img }}" />
        
    </a>
  
</li>
