<?php
/*=============================================
  
Block to call dynamic cms portion

<div id="_changeThis"{% echo $inline %}>
    { # newEE('changeThis') # }
</div>

=============================================*/
?>

<!--Content-->
<div class="container">
  
<!-- First Row -->
<div class="row">

<div class="col-md-12 wow slideInUp my-5" data-wow-delay="0.2s">          
      <div id="_home1"{% echo $inline %}>
          {# newEE('home1') #}
      </div>          
  </div>      
</div>
<!-- /.First Row -->

</div>  
   
<!-- SecondRow -->    
<div style="background:#304a74;">
   <div class="clearfix">&nbsp;</div>
    <div class="container my-5">
        <div class="row">

            <!--First columnn-->
            <div class="col-lg-4">
                <!--Card-->
                <div class="card wow fadeIn" data-wow-delay="0.2s">

                    <!--Card image-->
                    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(120).jpg" alt="Card image cap">

                    <!--Card content-->
                    <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title">Mesmerizing Landscapes</h4>
                        <!--Text-->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-info">Read more</a>
                    </div>

                </div>
                <!--/.Card-->
            </div>
            <!--First columnn-->

            <!--Second columnn-->
            <div class="col-lg-4">
                <!--Card-->
                <div class="card wow fadeIn" data-wow-delay="0.4s">

                    <!--Card image-->
                    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(123).jpg" alt="Card image cap">

                    <!--Card content-->
                    <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title">Trevelers Toolbox</h4>
                        <!--Text-->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-info">Read more</a>
                    </div>

                </div>
                <!--/.Card-->

            </div>
            <!--Second columnn-->

            <!--Third columnn-->
            <div class="col-lg-4 mb-4">
                <!--Card-->
                <div class="card wow fadeIn" data-wow-delay="0.6s">

                    <!--Card image-->
                    <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(122).jpg" alt="Card image cap">

                    <!--Card content-->
                    <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title">Mountain Rivers</h4>
                        <!--Text-->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-info">Read more</a>
                    </div>

                </div>
                <!--/.Card-->
            </div>
            <!--Third columnn-->
        </div>
    </div>
    <br>
</div>        
<!-- /.SecondRow -->       
        
<div class="container">           
<!-- Third Row -->
<div class="row">            
    <div class="col-md-12 wow slideInRight my-5" data-wow-delay="0.2">                
        <div id="_home3"{% echo $inline %}>
            {# newEE('home3') #}
        </div>                
    </div>            
</div>
<!-- /.Third Row -->
</div>
<!--/.Content-->
