                 </div>           

            </div>   

        </div>

    </div>

    <?php tpCompile('js'); ?>
    <script async src="//cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
    <script src="<?php echo ROOT; ?>apps/_ee/editease.jquery.js" type="text/javascript"></script>
    <script>
    
        $(document).ready(function() {
            
            /*====================================================
                load editEase login link and data into the page
            ======================================================*/
                    $('#loginform').editease();	
                    $('#loginform').submit(function() {
                          return doLogin(loginform);
                    });
            
            $('.gone').click(function() {
                
                $('ul li b').toggle();
                $('div.wrap').delay(1000).toggleClass('col-md-1 col-md-2');
                $('div.container').toggleClass('col-md-11 col-md-10');
                
                
            });
            
        });
    
    </script>
</body>
</html>