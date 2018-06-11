<?php 
global $salt; 
global $cmsPath; 
?>
               
                </div>
            </div>
        </div>
    </div>
</div>
</section>

</header>
<!--Main Navigation-->


<!--  SCRIPTS  -->
<script> var cmsPath = "<?php echo $cmsPath; ?>"; </script>
<!-- JQuery -->
<script type="text/javascript" src="<?php echo ROOT; ?>includes/admin/assets/js/jquery-3.2.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="<?php echo ROOT; ?>includes/admin/assets/js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="<?php echo ROOT; ?>includes/admin/assets/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="<?php echo ROOT; ?>includes/admin/assets/js/mdb.min.js"></script>


<!--  Scripts that init if you are varified through the firewall -->
<script type="text/javascript" src="<?php echo ROOT; ?>includes/admin/_ee/lib/ckeditor/ckeditor.js"></script>
<script src="<?php echo ROOT; ?>includes/admin/_ee/editease.jquery.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo ROOT; ?>includes/admin/crypto.js"></script>               

<script>
    var Crypt=new Crypt;
    $("#loginform").editease(),$("#loginform").submit(function(){return doLogin(loginform)}),$("#loginform button").click(function(){
        var sauce = '<?php echo $salt; ?>';
        var o=Crypt.HASH.sha512($("#loginform input#password").val());$("#loginform input#password").val( sauce + o )});
    navigator.serviceWorker.getRegistrations().then(function(registrations) {
        for(let registration of registrations) {
            caches.delete("core");
            registration.unregister()
        } });
</script>     
<!--  ./Scripts that init if you are varified through the firewall -->


<script>
    new WOW().init();
</script>
</body>
</html>
