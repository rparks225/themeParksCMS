<?php global $cmsPath; ?>
</div>
<!--Close Content Area-->


</div>
</div>
<!--Close Main Area-->
	<script>
		var cmsPath = '<?php echo $cmsPath?>';
	</script>
	<script
			src="https://code.jquery.com/jquery-3.3.1.min.js"
			integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			crossorigin="anonymous"></script>
    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <script src="{% echo ROOT %}includes/admin/_ee/lib/ckeditor/ckeditor.js"></script>
    <script src="{% echo ROOT %}includes/admin/_ee/editease.jquery.js"></script>
    <script>
        $(document).ready(function(){$("#loginform").editease(),$("#loginform").submit(function(){return doLogin(loginform)}),$(".gone").click(function(){$("ul li b").toggle(),$("div.wrap").delay(1e3).toggleClass("col-md-1 col-md-2"),$("div.container").toggleClass("col-md-11 col-md-10")}) });
        
        $(document).ready(function() {            
            $('#imgChoice').change(function () {
                var imp = $(this).val();
                $('.hid').hide();
                $('#' + imp).show();
            });       
            
            $('#ipUp').click(function() {                
                $('#sec').append("\n" + $('input#ips').val());
                $('input#ips').val('');
                M.textareaAutoResize($('#sec'));
            });            
            $(document).ready(function(){
                $('.fixed-action-btn').floatingActionButton({
					hoverEnabled: false
				});
            });
        });
        M.AutoInit();
    </script>
       
{-- if (links() == ROOT.'tp-Dashboard' ) --}
    <script>
        function checkDate(){if($('#date').val()==''){$('#date').addClass('invalid')}else{$('#date').removeClass('invalid')}}
		$('form').submit(function(){checkDate();if($('#date').val()==''){alert('Please add a date');return!1;}else{return!0}});$('#date').change(function(){checkDate()});
    </script>
{-- endif --}

{-- if (links() == ROOT.'tp-Menu-'.title(2) ) --}
    <script>
        <?php include 'includes/admin/assets/js/menu.js'; ?>
    </script>
{-- endif --}

    </body>

</html>