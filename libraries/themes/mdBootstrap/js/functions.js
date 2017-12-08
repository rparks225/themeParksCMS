// JavaScript Document

// Start Jquery
 $(document).ready(function() {
            
/*========================
prettyphoto
=========================*/

        $("a[rel^='prettyPhoto']").prettyPhoto({
            default_width: 853,
            default_height: 480,
            social_tools: false,
            theme: 'facebook'
            });
     
/*=========================
Dashboard edit animation
==========================*/
	$('.loading').delay(500).fadeOut(500);
	
	$('select#change').on('change', function() {
		
                 $('span.nothing').remove();

                            if( this.value == 'false'){

                                $('div#html').append('<span class="nothing"><label>Html:</label><br><textarea class="materialize-textarea col s12" id="upDate" rows="5" name="html" value=""></textarea><br><br></span>');

                            }else if( this.value == 'true'){



                            }else if( this.value == 'Please choose a selection.'){

                            alert( this.value );

                            }
					
					});	
     
/*========================
Menu toggle animation	
=========================*/	
	$('div.admin button.downish').toggle(
		
		function() {$('tr.bPosts').fadeOut('slow');
		$('div.admin button.downish span').remove();
		$('div.admin button.downish').append('<span>Open</span>'); },
		
		function() {$('tr.bPosts').fadeIn('slow');
		$('div.admin button.downish span').remove();
		$('div.admin button.downish').append('<span>Close</span>');
		}
		
		); 	     
		
/*==================
Dropzone.js 
==================*/	

	$(document).ready(function(){
				$('#albumChoice').change(function(){
					
					var value = $(this).val();
					if(value.length > 0){
						console.log(value);
						$('form.dropzone').fadeIn();
						$('#album').val(value);

					}else{
						$('form.dropzone').fadeOut();
					}
				});
			});	

/*===================			
Image Draggable
===================*/

  $(function() {
    $( "#sortable" ).sortable({
		update: function (event, ui){
		var data = $(this).sortable('serialize');
		$.post('includes/admin/adminBlocks/save_order.php', data, function(theResponse) {
			
			console.log(theResponse);
			
			});
			
		console.log(data);
		
			}
		
		});
   
  });
  
  $(function() {
    $( "#sort" ).sortable({
		update: function (event, ui){
		var data = $(this).sortable('serialize');
            $.post('includes/admin/adminBlocks/gal_order.php', data, function(theResponse) {
			
			console.log(theResponse);
			
			});
			
		console.log(data);
		
			}
		
		});
   
  }); 
  
 /*========================
adjusting font size
==========================*/
    $('#smaller').click(function(){
    	var currentSize = parseInt($(".cont p").css('font-size'));
		console.log(currentSize);
    	if(currentSize > 14){
    		currentSize -= 1;
    		$(".cont p").css('font-size', currentSize);
    		$(".cont li").css('font-size', currentSize);
    	}else if(isNaN(currentSize)){
			alert("No text can be reduced in size");
		}else{
    		alert("Unable to reduce further");
    	}
    });
	$('#bigger').click(function(){
    	var currentSize = parseInt($(".cont p").css('font-size'));
		console.log(currentSize);
    	if(currentSize < 22){
    		currentSize += 1;
    		$(".cont p").css('font-size', currentSize);
    		$(".cont li").css('font-size', currentSize);
    	}else if(isNaN(currentSize)){
			alert("No text can be enlarged in size");
		}else{
    		alert("Unable to enlarge further");
    	}
    });
	
 
 /*===================
Form Validate
=====================*/ 
$(document).ready(function() {
	
	$('#schedule input#zip').keyup(function() {
		
	  if($(this).val().length >= 5){
		  $('div.cap').fadeIn('slow');
		  }else{
			  $('div.cap').fadeOut('slow');
			  }
		
		});
		
		$('#schedule1 input#name').keyup(function() {
		
	  if($(this).val().length >= 1){
		  $('div.cap').fadeIn('slow');
		  }else{
			  $('div.cap').fadeOut('slow');
			  }
		
		});
	
	});	  

 /*===================
Lazy Loader
=====================*/ 
$(".lazy").lazyload({
    effect : "fadeIn"
});
         
     
/*=======================
Preview Button init
=======================*/   
if( $('.edit').attr('contenteditable') ){     
    jQuery.each(CKEDITOR.instances, function(){
    eval("CKEDITOR.instances."+this.name+".destroy()"); });
    $('.edit').removeAttr('contenteditable');
}
     new WOW().init();
}); 