<?php
require_once 'includes/PHPMailer/PHPMailerAutoload.php';
require_once 'includes/email/mail.php';
global $sName;
?>

<!--Open Cont area-->

<div class="cont" id="int">   

    <div class="fancyCont">
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-4 hidden-xs">
                    <hr>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <h1>Contact Us</h1>
                </div>

                <div class="col-md-4 col-sm-4 hidden-xs">
                    <hr>
                </div>

            </div>
        </div>    
    </div>

    <div class="fancyCont">

        <div class="container">
            <div class="row">
                
                <div class="offset-md-1 col-md-10">

                       <div id="_Contact" {% echo $inline %}>
                           {# newEE('Contact') #}
                       </div>

                        <br>
                            {% echo $msg1 %}
                        <form method="post" id="schedule" action="">

                            <input type="hidden" name="op" value="" />

                            <div class="form-group">
                                <label>Name</label>
                                <input name="" type="text" required class="form-control" id="name" />
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input name="email" type="email" required class="form-control" id="email" />
                            </div>

                            <div class="form-group">
                                <label>Address</label>
                                <input name="address" type="text" required class="form-control" id="address" />
                            </div>

                            <div class="form-group">
                                <label>Zip</label>
                                <input name="zip" pattern="[0-9]*" maxlength="5" required class="form-control" id="zip" />
                            </div>

                            <div class="form-group">
                                <label>Comment</label>
                                <textarea name="comment" rows="10" class="form-control" id="comment"></textarea>
                            </div>

                            <div class="clearfix"></div> 

                                {% echo $captcha %}

                            <input class="btn btn-default" type="submit" name="shortForm" value="Submit" />

                        </form>
                
                </div> 
               
            </div>
        </div>

    </div>

    {# tpBlock('fancyIsh') #}

</div>  

<!--Close Cont area-->
