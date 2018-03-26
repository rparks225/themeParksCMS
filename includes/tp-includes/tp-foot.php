<?php  
global $salt; 
global $sName;
$sessKey = md5($_SERVER['SERVER_ADDR'].' - '.$sName.''); ?>

<?php tpInc('footer'); ?>

<!--Scripts go below this line-->
<?php tpCompile('js'); ?>

<!--Open Google Analytics
<script src="//www.google.com/recaptcha/api.js" type="text/javascript"></script>-->
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
        
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', function() {
                navigator.serviceWorker.register('libraries/sw2.js').then(function(registration) {                    
                    console.log('ServiceWorker registration successful with scope: ', registration.scope);
                }, function(err) {                    
                    console.log('ServiceWorker registration failed: ', err);
                });
            });
        }

    </script>
    
<?php if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT']) || (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0') !== false)): ?>
    <script>
        alert("You are using an oudated  version of Internet Explorer. Please update to Microsoft Edge or use Firefox/ Google Chrome.");
    </script>
<?php endif; ?>
    
<?php if(isset($_SESSION[''.$sessKey.'']) || title() == 'admin' || title() == 'incorrect' ): ?>
      
       <!--  Scripts that init if you are varified through the firewall -->
       <script type="text/javascript" src="<?php echo ROOT; ?>includes/admin/_ee/lib/ckeditor/ckeditor.js"></script>
       <script src="<?php echo ROOT; ?>includes/admin/_ee/editease.jquery.js" type="text/javascript"></script>
       <script type="text/javascript" src="<?php echo ROOT; ?>includes/admin/crypto.js"></script>               
       
         <script>var Crypt=new Crypt;$("#loginform").editease(),$("#loginform").submit(function(){return doLogin(loginform)}),$("#loginform button").click(function(){var o=Crypt.HASH.sha512($("#loginform input#password").val());$("#loginform input#password").val("<?php echo $salt; ?>"+o)});
         </script>     
         <!--  ./Scripts that init if you are varified through the firewall -->

<?php endif; ?>           

</body>

</html>