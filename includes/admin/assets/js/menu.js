//Other js
$(document).ready(function() {  
    $('.hidey, .hidey2').hide();
    $('.show').click(function() { $(this).siblings('.hidey').slideToggle('slow'); });
    $( function() { $( "#sortable1, #sortable2" ).sortable({ placeholder: "ui-state-highlight" }); $( "#sortable1" ).disableSelection();  } );
    $( function() { $( "#sortable1, #sortable2" ).sortable({connectWith: ".connected",opacity: 0.95,dropOnEmpty: true,}).disableSelection();} );
    $('.trash').click(function() { $(this).parents('li').remove(); });
    $('.trash2').click(function() { $(this).parents('.ui').remove(); });
    $('.newShow').click(function() {
        $('.hidey2').fadeToggle('slow');
    });
    $('.bind').on('keyup change',function() {
        $(this).next().attr('name', $(this).val());
    });

    $('.bind2').on('keyup change',function() {
        $(this).next().attr('name', $(this).data('parent')+'['+$(this).val()+']' );
    });

    $('.added2').click(function() {
        $(this).siblings().children('ul#sortable2').prepend('<li class="ui ui-state-default"><div class ="card-panel col s12 input-group" style="padding:15px;"><div class="col s9"><input type="text" name="" data-parent="'+$(this).data('parent')+'" onkeyup="$(this).next().attr(\'name\', $(this).data(\'parent\')+\'[\'+$(this).val()+\']\' );" class="col s4" id="New Page" value="New Page"><input type="text" class="offset-s1 col s7" name="'+$(this).data('parent')+'[New Page]" id="" value=""><div class="clearfix"></div><label for="">Link Title / URL</label></div><div class="col s1 offset-s1"><a class="btn-floating red trash" onclick="$(this).parents(\'.ui\').remove()" href="#!"><i class="material-icons white-text">delete</i></a></div><div class="col s1"><a style="cursor:move;" class="btn-floating blue move" href="#!"><i class="material-icons white-text">menu</i></a></div></div><div class="clearfix"></div></li>');
        $(this).siblings('.hidey').slideDown('slow');
    });

    $('.subby').click(function() {
        $.ajax({
            type: "POST",
            url: '<?php echo links(); ?>',
            data: $('form').serialize().substr(10),
            success: function( ){
                $('body').fadeTo('slow',0.5);
                $('html').append('<div class="saving" style="padding:1em;text-align:center;border:1px solid grey;box-shadow:2px 2px 9px rgba(0,0,0,.5);background:white;z-index:9999999;left: 45vw;position:fixed;width:200px;height:200px;margin:0 auto;top:45vh;"><h6>Saving Please Wait...</h6><br><img style="width:80%;" src="<?php echo ROOT?>includes/admin/assets/img/loading.gif"></div>');
                setTimeout(function() {
                    $('body').fadeTo('slow',1);
                    $('body').load('<?php echo links(); ?>');
                    $('.saving').fadeOut('slow');
                }, 2000);
            },
        });
    });

    $('#parent').change(function() {

        $('.addLink').click(function() {

            if( $('#parent').val() == 'Parent' ){
                $('ul#sortable1').prepend('<li class="ui-state-default"><div class ="card-panel col s12" style="padding:15px;"><div class="col s7 input-group"><label>'+ $("#nue").val() +'<i>( Parent )</i></label></div><div class="col s1 offset-s1"><a class="btn-floating red trash" href="#!" onclick="$(this).parents(\'.ui\').remove()"><i class="material-icons white-text">delete</i></a></div><div class="col s1 show"><a class="btn-floating blue-grey" disabled href="#!"><i class="material-icons white-text">visibility_off</i></a></div><div class="col s1"><a class="btn-floating green added" disabled href="#!"><i class="material-icons white-text">add</i></a></div><div class="col s1"><a style="cursor:move;" class="btn-floating blue move" href="#!"><i class="material-icons white-text">menu</i></a></div><div class="clearfix">&nbsp;</div><div class="hidey" style="display:none;"><ul id="sortable2" style="min-height:3em;" class="connected"><li class="ui-state-default"><input name="#'+ $("#nue").val() +'[]" id="#'+ $("#nue").val() +'" type="hidden" value="" /></li></ul></div></div><div class="clearfix"></div></li>');

            }else if( $('#parent').val() == 'Single' ){
                $('ul#sortable1').prepend('<li class="ui-state-default"><div class ="card-panel col s12 input-group" style="padding:15px;"><div class="col s9"><input type="text" onkeyup="$(this).next().attr(\'name\', $(this).val());" name="" class="col s4 bind" id="" value="'+$("#nue").val()+'"><input type="text" class="offset-s1 col s7" name="'+ $("#nue").val() +'" id="'+ $("#nue").val() +'" id="" value=""><div class="clearfix"></div><label for="">Link Title / URL</label></div><div class="col s1 offset-s1"><a class="btn-floating red trash" href="#!"><i class="material-icons white-text" onclick="$(this).parents(\'li\').remove()">delete</i></a></div> <div class="col s1"><a style="cursor:move;" class="btn-floating blue move" href="#!"><i class="material-icons white-text">menu</i></a></div></div><div class="clearfix"></div></li>');
            }
            $('#nue').val('');
            $('#parent').prop('selectedIndex',0);
            $('.hidey2').slideUp();

            $.ajax({
                type: "POST",
                url: '<?php echo links(); ?>',
                data: $('form').serialize().substr(10),
                success: function( ){
                    $('body').fadeTo('slow',0.5);
                    $('html').append('<div class="saving" style="padding:1em;text-align:center;border:1px solid grey;box-shadow:2px 2px 9px rgba(0,0,0,.5);background:white;z-index:9999999;left: 45vw;position:fixed;width:200px;height:200px;margin:0 auto;top:45vh;"><h6>Saving Please Wait...</h6><br><img style="width:80%;" src="<?php echo ROOT?>includes/admin/assets/img/loading.gif"></div>');
                    setTimeout(function() {
                        $('body').fadeTo('slow',1);
                        $('body').load('<?php echo links(); ?>');
                        $('.saving').fadeOut('slow');
                    }, 2000);
                },
            });

        });

    });

});