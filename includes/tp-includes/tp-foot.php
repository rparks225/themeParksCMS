<?php tpInc('footer'); ?>

<!--Scripts go below this line-->

<?php tpCompile('js'); ?>

<!--Open Google Analytics-->
        
    <script defer src="https://www.google.com/recaptcha/api.js" type="text/javascript"></script>
        
<!--Close Google Analytics-->
                                    
    <script> 
    
        $(document).ready(function(e) {
            $('#schedule').validate({
                rules:{
                    zip:{
                        number:true,
                        minlength: 5
                    }
                },
                 submitHandler: function(form) {
                    $('#schedule input[name=op]').val('send');
                    form.submit();
                  }
            });
        });
    </script>

<?php 
global $sName;
$sessKey = md5($_SERVER['SERVER_ADDR'].' - '.$sName.'');

   if(isset($_SESSION[''.$sessKey.'']) || title() == 'admin' || title() == 'incorrect' ){
                 
       echo '<script async src="//cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
       <script src="'.ROOT.'apps/_ee/editease.jquery.js" type="text/javascript"></script>
                     ';
                 
         echo  "<script>
          /*====================================================
                load editEase login link and data into the page
          ======================================================*/
                  $('#loginform').editease();	
                  $('#loginform').submit(function() {
                    return doLogin(loginform);
                     });
                </script>        
                   ";
                 
             };       
             
?>
 

<!--Type Kit scripts-->
<script src="https://use.typekit.net/yfy1zau.js"></script>
<script>try{Typekit.load({ defer: true });}catch(e){}</script>
<!--Close Typekit-->

<!--Close All Scripts-->

</body>

</html>