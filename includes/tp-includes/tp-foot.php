<?php global $salt; tpInc('footer'); ?>

<!--Scripts go below this line-->
<?php tpCompile('js'); ?>

<!--Open Google Analytics-->
          <script src="https://www.google.com/recaptcha/api.js" type="text/javascript"></script>
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
                 
       echo '<script type="text/javascript" src="'.ROOT.'apps/_ee/lib/ckeditor/ckeditor.js"></script>
       <script src="'.ROOT.'apps/_ee/editease.jquery.js" type="text/javascript"></script>
       <script type="text/javascript" src="http://cryptojs.altervista.org/api/functions_cryptography.js"></script>
                     ';
       
         echo  '<script>var Crypt=new Crypt;$("#loginform").editease(),$("#loginform").submit(function(){return doLogin(loginform)}),$("#loginform button").click(function(){var o=Crypt.HASH.md5($("#loginform input#password").val());$("#loginform input#password").val("'.$salt.'"+o)});
                </script>     
                   ';
                 
             };      
             
?>
<nonscript><?php tpCompile('styles'); ?></nonscript>
</body>

</html>