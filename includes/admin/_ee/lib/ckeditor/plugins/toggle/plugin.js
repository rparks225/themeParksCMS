(function() {
    
    CKEDITOR.plugins.add( 'toggle', {
        icons: 'toggle',
        init: function( editor ) {
            // Plugin logic goes here...
            
            editor.addCommand( 'toggs', {
                exec: function( ) {
                    $("span.cke_toolbar_break").next("span.cke_toolbar").slideToggle();
                }
            });
            
            editor.ui.addButton( 'toggle', {
                label: 'Toggle Advanced Features',
                command: 'toggs',
                toolbar: 'insert'
            });
        }
    });
} )();
