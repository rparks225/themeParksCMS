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

               <div class="col-md-6 pull-left">
                   <div class="md-form">                    
                       <input name="name" type="text" required class="form-control" id="name">
                       <label for="name">Name</label>
                   </div>
                </div>                

                <div class="col-md-6 pull-left">
                    <div class="md-form">                
                       <input name="email" type="email" required class="form-control" id="email" />
                       <label for="email">Email</label>
                   </div>
                </div>                

                <div class="col-md-6 pull-left">
                    <div class="md-form">                   
                        <input name="address" type="text" required class="form-control" id="address" />
                       <label for="address">Address</label>
                   </div>
                </div>                

               <div class="col-md-6 pull-left">
                   <div class="md-form">                    
                    <input name="zip" type="text" required class="form-control" id="zip" />
                    <label for="zip">Zip</label>
                </div>
               </div>                

               <div class="col-md-12 pull-left">
                   <div class="md-form">                    
                    <textarea type="text" name="comment" class="md-textarea" id="comment"></textarea>
                    <label for="comment">Comment</label>
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
