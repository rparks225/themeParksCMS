<!--Open Content area-->
<div class="cont" id="int">
   
   <div class="fancyCont">
       <div class="container">
           <div class="row">
               <h1>Employment - {% echo title() %}</h1>
           </div>
       </div>
   </div>
   
    <div class="fancyCont">
        <div class="container">
            <div class="row">
               
                {# tpBlock('sideBar') #}
               
                <div class="col-md-9">                        
                        <div class="pull-right" id="textSize">
                            <strong>Text Size: <span id="smaller"> A</span> <span id="bigger">A</span></strong>
                        </div>  
                                              
                    {# $query = 'SELECT * FROM careers WHERE Job LIKE "'.title().'"' #}
                    {# $block = 'singleJob' #}
                    {# $other = title(2) #}
                    {# $job = new model() #}
                    {# $job->extra($query,$block,$other) #}
                    
                </div>
                
            </div>
        </div>        
    </div>
    
    {# tpBlock('fancyish') #}
    
</div>
<!--Close Content area-->



