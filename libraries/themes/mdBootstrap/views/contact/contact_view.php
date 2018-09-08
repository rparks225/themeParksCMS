{# require_once 'includes/PHPMailer/PHPMailerAutoload.php' #}
{# require_once 'includes/email/mail.php' #}
<?php global $sName; ?>

<!--Open Cont area-->

<div class="container">
    <div class="row my-5">
        <div class="col-md-12 wow slideInLeft" data-wow-delay="0.02s">
            <h1>Contact Us</h1>
            <hr>
        </div>
    </div>
    
    
    <div class="row my-5">
        <div class="col-md-12 wow fadeIn" data-wow-delay="0.02s">

            <div id="_Contact" {% echo $inline %}>
                {# newEE('Contact') #}
            </div>

            <br>
            {% echo $msg1 %}
            <form method="post" id="schedule" action="">

                <input type="hidden" name="op" value="" />
         
                   <div class="row my-5">
                      <div class="col-md-6">
                          <div class="md-form ">                    
                              <input name="name" required type="text" class="form-control validate" id="name">
                              <label for="name">Name</label>
                          </div>     
                       </div>

                       <div class="col-md-6">
                           <div class="md-form ">                
                               <input name="email" required type="email" class="form-control validate" id="email">
                               <label for="email">Email</label>
                           </div>  
                       </div>
                   </div>
                              
                    <div class="row my-5">
                       <div class="col-md-6">
                           <div class="md-form ">                   
                               <input name="address" required type="text" class="form-control validate" id="address">
                               <label for="address">Address</label>
                           </div>       
                        </div>

                        <div class="col-md-6">
                            <div class="md-form ">                    
                                <input name="zip" required type="text" class="form-control validate" id="zip">
                                <label for="zip">Zip</label>
                            </div>            
                        </div>
                    </div>          
                  
                   <div class="row my-5">
                      <div class="col-md-12">
                          <div class="md-form">                    
                              <textarea type="text" name="comment" class="form-control md-textarea" id="comment"></textarea>
                              <label for="comment" class="">Comment</label>
                          </div>      
                      </div>
                   </div>                          

                <div class="clearfix"></div> 

                {% echo $captcha %}

                <input class="btn btn-default" type="submit" name="shortForm" value="Submit" />

            </form>

        </div> 
        
    </div>
</div>

<!--Close Cont area-->
