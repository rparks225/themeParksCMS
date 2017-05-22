  
<li id="{% echo 'item-{{ id }}' %}" class="col-md-4" style="overflow:hidden;height:300px;margin-bottom:15px;">
  
    <a href="{% echo ROOT %}apps/dropzone/upload/{{ gallery }}/{{ img }}" rel="prettyPhoto[{{ gallery }}]">
        
        <img class="lazy" 
             width="100%" 
             data-gallery="{{ gallery }}" 
             alt="{{ img }}" 
             data-original="{% echo ROOT %}apps/dropzone/upload/{{ gallery }}/{{ img }}" />
        
    </a>
  
</li>
