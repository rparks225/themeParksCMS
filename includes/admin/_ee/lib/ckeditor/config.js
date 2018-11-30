/**
 * @license Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
    config.skin = 'moono-lisa';
    config.extraPlugins = 'filebrowser,sourcedialog,fontawesome,inlinesave,lineutils,widget,uploadwidget,toggle,btgrid';
    config.allowedContent = true; 
    config.filebrowserBrowseUrl = '//' + window.location.hostname + cmsPath +'includes/admin/_ee/lib/kcfinder/browse.php';
    config.uploadUrl = '//' + window.location.hostname + cmsPath +'images/files/';
    
    config.removeButtons = 'Form,NewPage,Glyphicons,About,Smiley,Table,wenzgmap,Checkbox,Radio,Textarea, Flash,Language,Blockquote,Textfield,Button,SpecialChar,PageBreak,Flash,BidiLtr,BidiRtl,Subscript,Superscript,TextField,Select,ImageButton,HiddenField,Find,Replace,ShowBlocks';

    config.inlinesave = {
        postUrl: '',
        postData: {},
        onSave: function(editor) { console.log('clicked save', editor); return true; },
        onSuccess: function(editor, data) { 
            $('body').prepend(
'<div id="tp-message" style="background: rgba(0,0,0,.5);position: fixed;z-index: 999999;width: 100%;height: 100%;">' + 
                '<div style="box-shadow: 2px 2px 8px rgba(0,0,0,.6);background:white;width: 25vw;margin: 0 auto;width: 25vw;padding: 20px;color: grey;text-align: center;top: 45vh;position: relative;">' + 
'<img style="width:45%;" src="' + '//' + window.location.hostname + cmsPath + 'includes/admin/assets/img/loading.gif"><br>' +
'Saving Please Wait...' + 
'</div>' + 
'</div>');
            var divi = $( '#' + editor['name'] );
            closeEditing2(editor['name'],editor['_']['data']); 
            divi.css({ "filter" : "blur(5px)" , "opacity" : ".2" }); 
            setTimeout(function() { 
                $('#tp-message').fadeOut().remove(); 
                divi.css({ "filter" : "none" , "opacity" : "1" }); }, 2000 ); 
        },
        onFailure: function(editor, status, request) { console.log('save failed', editor, status, request); },
        useJSON: false,
        useColorIcon: false
    };
    
    config.autosave = { 
        NotOlderThen : 1440,  
        saveOnDestroy : false, 
        saveDetectionSelectors : "a[href^='javascript:__doPostBack'][id*='Save'],a[id*='Cancel']",  
        messageType : "notification",  
        delay : 3,  
        diffType : "sideBySide",  
        autoLoad: false,
    };
    
    config.toolbar = 'newBar';

    config.toolbar_newBar = [
        { name: 'basic', items : [ 'Font','FontSize','Format','-','Bold','Italic','Underline','RemoveFormat','-',
                                                   'JustifyLeft','JustifyCenter','JustifyRight','-',
                                                   'TextColor','BGColor','Image','-','Link','Unlink','Anchor','-',
                                                   'Sourcedialog','Inlinesave','-','toggle' ] },
        '/',
        { name: 'advanced', items : [ 'Undo', 'Redo','-',
                                                           'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord','-',
                                                           'SelectAll','Scayt','-','Templates','NumberedList','BulletedList','-',
                                                           'Outdent','Indent','-','CreateDiv','-',
                                                           'FontAwesome','btgrid','HorizontalRule','-',
                                                           'Maximize','Iframe',
                                    ] },
    ];
    
    CKEDITOR.dtd.$removeEmpty["span"] = false;
    CKEDITOR.on("instanceReady", function(ev) {
        $("span.cke_toolbar_break").next("span.cke_toolbar").hide()
    });
};