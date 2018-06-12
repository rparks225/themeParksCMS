<?php

$slides = array(
    '0'=>array(
        'image'=>'https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(11).jpg',
        'capTitle'=>'20 Photos to inspire you to visit Tatra Mountains',
        'cap'=>'Best places you should see, traditional dishes that you have to try',
        'link'=>'#',
        'active'=>' active',
    ),
    '1'=>array(
        'image'=>'https://mdbootstrap.com/img/Photos/Slides/img%20(67).jpg',
        'capTitle'=>'10 Reasons you should spend winter holiday in mountains ',
        'cap'=>'Best atractions and winter sports!',
        'link'=>'#1',
        'active'=>'',
    ),
    '2'=>array(
        'image'=>'https://mdbootstrap.com/img/Photos/Slides/img%20(97).jpg',
        'capTitle'=>'Weekend in the nature - the best way to relax',
        'cap'=>'8 Reasons why you need to spend more time in nature',
        'link'=>'#2',
        'active'=>'',
    ),
);

$i = 0;
?>

<!--Carousel Wrapper-->
<div id="carousel-example-3" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false">
   
    <!--Indicators-->
    <ol class="carousel-indicators">
       {-- foreach ( $slides ) --}
        <li data-target="#carousel-example-3" data-slide-to="{% echo $i %}" class="{% echo $loop['active'] %}"></li>
        {# ++$i #}
        {-- endforeach --}
    </ol>
    <!--/.Indicators-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">

           {-- foreach ( $slides ) --}
        
            <!-- slide loop -->
            <div class="carousel-item view hm-black-light{% echo $loop['active'] %}" 
                     style="background-image: url('{% echo $loop['image'] %}'); background-repeat: no-repeat; background-size: cover;">
                     
                <!-- Caption -->
                <div class="full-bg-img flex-center white-text">
                    <ul class="wow fadeInUp  col-md-12">
                        <li> <h1 class="h1-responsive">{% echo $loop['capTitle'] %}</h1> </li>
                        <li> <p>{% echo $loop['cap'] %}</p> </li>
                        <li> <a target="_blank" href="{% echo $loop['link'] %}" class="btn btn-info btn-lg" rel="nofollow">See more!</a> </li>
                    </ul>
                </div>
                <!-- /.Caption -->
                
            </div>
            <!--/.slide loop-->
            
            {-- endforeach --}
        
    </div>
    <!--/.Slides-->

    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-3" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-3" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->