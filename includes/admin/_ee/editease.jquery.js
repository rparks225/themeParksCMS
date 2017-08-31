// +----------------------------------------------------------------------+
// | editEase 1.5ish - ok I give up on versioning 						  |
// | $date:  03 November 2009                                             |
// +----------------------------------------------------------------------+
// | By Stephen Neate (http://code.google.com/p/editease/)                |
// | Copyright (c) 2007/2009 Stephen Neate                                |
// | Licensed under the MIT License:                                      |
// | -- http://www.opensource.org/licenses/mit-license.php                |
// +----------------------------------------------------------------------+
// | editEase REQUIREMENTS (TESTED WITH)                                  |
// +----------------------------------------------------------------------+
// | PHP  (5.1.2 - 5.2+)                                                  /
// | Apache (1.3.7 - 1.3.9, 2.2+)                                         /
// | jQuery (1.2.6+)    *required                                         /
// +----------------------------------------------------------------------+



// you shouldn't need to edit below this line //
// +----------------------------------------------------------------------+

jQuery.fn.editease = function (linkName, epath) {

/* default path file for editEase 'This should be all you need to edit' */
if (epath === undefined) {
	// if path provided this is the default
    eePath = cmsPath + 'includes/admin/_ee/';
    sitePath = '//' + window.location.hostname + cmsPath;
    //alert(sitePath);
}else{
	// otherwise use provided path
	eePath = epath;
}


// if no login link text provided this is the default
if (linkName === undefined) {
	var linkName = '';
}

/*#### This little function activates the system ####*/
jQuery("head").append('<link rel="stylesheet" type="text/css" media="all" href="'+eePath+'/editease.css">');
if(linkName==='undefined'){var linkName ='Admin';}
var lgnLink = '<a href="javascript:void(0)" onclick="loginModal()" class="eelgn" title="editEase - click to login and edit"><span>'+linkName+'</span></a><div id="eelogin" style="display:none;"><a class="modalCloseImg simplemodal-close" title="Close"></a><div class="customDialog"><h1>Login Now</h1><div class="text">Login to <strong>editEase</strong> to manage your content.<form action="javascript:void(0)" method="post" onsubmit="return doLogin(\'login\');" id="loginform"><fieldset><span class="warning">Your "username" or "password" don\'t appear to be valid.  Please try again.</span><label for="username">Username</label><input type="text" name="username" id="username" maxlength="100" value=""/><label for="password">Password</label><input type="password" name="password" id="password" maxlength="100" value=""/><button type="submit" id="eesbt">&nbsp;&nbsp;LOGIN&nbsp;&nbsp;</button></fieldset></form></div></div></div>';
jQuery(this).append(lgnLink);

 jQuery.post(""+eePath+"/session.php",
	function(data){
		if(jQuery.trim(data)==='eeloggedin'){
		eeLive();
		}
	 }
 );
    
};

// check if install file still exists
/* jQuery.post(""+eePath+"/_eeInstall.php?deleteMe=1",
	function(data){
		if(data === 'delete'){
			alert('For security you really should delete the _eeInstall.php file.');
		}
	 }
	);	
	
}; */


/*######## START LOGIN & DISPLAY PANEL FUNCTIONS #########*/
/*login popup*/
/*function loginModal(){
	jQuery("#eelogin").modal({
		closeHTML: "",
		containerCss: {
			backgroundColor:"#ffffff",
			height: 280,
			padding: 10,
			scroll: 'none',
			width: 305
		},
		overlayClose: true
	});
}*/

function eeLogoutCheck() {
    var lgoutData = '<div id="eelogout" style="display:none;"><div class="customDialog"><a class="modalCloseImg simplemodal-close" title="Close"></a><h1>Logout of Easy-edit</h1><span class="text">Logout of editEase and continue browsing your website.</span><button type="submit" class="simplemodal-close">&nbsp;&nbsp;No&nbsp;&nbsp;</button> <button type="submit" onclick="eelogout();" class="simplemodal-close">&nbsp;&nbsp;Yes&nbsp;&nbsp;</button></div></div>';
    jQuery("body").append(lgoutData);
    jQuery("#eelogout").modal({
        closeHTML: ""
        , containerCss: {
            backgroundColor: "#ffffff"
            , height: 150
            , padding: 10
            , scroll: 'none'
            , width: 305
        }
        , overlayClose: true
    });
}


function eelogout() {
    jQuery("#eepanel").remove();
    jQuery.get("" + eePath + "/sess-destroy.php?killsession=true");
    unbindEE();
    alert('You are now logged out!');

}

function doLogin(login) {
    jQuery("#eesbt").attr({
        disabled: "disabled"
    });
    var user = jQuery("#username").val();
    var pass = jQuery("#password").val();
    var homeadd = "/";
    jQuery.post(eePath + '/loginnow.php?password=' + pass + '&username=' + user, function (data) {
        if (data === 'fail') {
            jQuery(".warning").css({
                display: "block"
            });
            jQuery("#eesbt").removeAttr("disabled");
            window.location.replace( sitePath + "tp-Incorrect");
        } else {
            jQuery(".warning").html('Welcome back, loading editEase now, please wait a moment');
            jQuery(".warning").addClass("success");
            jQuery(".warning").css({
                display: "block"
            });
            //eeLive(); jQuery.modal.close();
            jQuery("#eesbt").removeAttr("disabled");
            jQuery(".warning").html('Your "username" or "password" don\'t appear to be valid.  Please try again.');
            jQuery(".warning").removeClass("success");
            jQuery(".warning").css({
                display: "none"
            });
            window.location.replace( sitePath + "tp-Dashboard");
        }
    });
    return false;
}

function eeLive() {
    jQuery.post("" + eePath + "/eepanel.php?val=" + Math.random(), function (data) {
        jQuery("body").prepend(data);
        eeActive();
    });

    function eeActive() {
        jQuery("#eepanel").animate({
            top: '0'
        }, "slow", function () {
            jQuery("#eepanelWrap").fadeIn("fast");
            bindEE();
        });
    }
}


/*logged in event listener controls*/
function bindEE() {
    jQuery("#eepages").bind("change", function () {
        if (jQuery(this).val() !== null) {
            location = jQuery(this).val();
        }
    });
    jQuery("#eehelpt").bind("click", function () {
        jQuery("#eeinfo").slideUp("normal");
        jQuery("#eefiles").slideUp("normal");
        jQuery("#eehelp").slideToggle("normal");
    });
    jQuery("#eeinfot").bind("click", function () {
        jQuery("#eehelp").slideUp("normal");
        jQuery("#eefiles").slideUp("normal");
        jQuery("#eeinfo").slideToggle("normal");
    });
    jQuery("#eefilest").bind("click", function () {
        jQuery("#eehelp").slideUp("normal");
        jQuery("#eeinfo").slideUp("normal");
        jQuery("#eefiles").slideToggle("normal");
    });

    jQuery("#eeinclo").bind("click", function () {
        eeLogoutCheck();
    });


    /*Setup edit buttons and behaviours for content areas*/
    jQuery(".e-ease").each(function () {
        var v = '#' + jQuery(this).attr("id");
        jQuery(v).addClass("editactive");
        jQuery(v).before('<div class="eeClick" id="ee-' + jQuery(this).attr("id") + '"><img src="' + eePath + '/img/page_edit.png" alt="click to edit" title="click to edit"/> <span>click to edit</span></div>');
        jQuery(v).before('<div class="eeClickEdit" style="display:none;" id="ed-' + jQuery(this).attr("id") + '"><div class="eesave" id="es-' + jQuery(this).attr("id") + '"><img src="' + eePath + '/img/page_save.png" alt="save" title="save"/><span> save</span></div><div class="eecancel" id="ex-' + jQuery(this).attr("id") + '"><img src="' + eePath + '/img/page_delete.png" alt="cancel" title="cancel"/><span> cancel</span></div></div>');
    });

    jQuery(".eeClick").bind("click", function () {
        var u = jQuery(this).attr("id").split("ee-");
        editNow(u[1]);
    });

    /* hover effects on the editable areas */
    jQuery(".e-ease").bind("mouseover", function () {
        var v = '#' + jQuery(this).attr("id");
        jQuery(v).addClass("edithover");
    });

    jQuery(".e-ease").bind("mouseout", function () {
        var v = '#' + jQuery(this).attr("id");
        jQuery(v).removeClass("edithover");
    });

    /*add selected to the drop down list of pages*/
    url = location.href.split("/");
    var last = url.pop();
    jQuery("#eepages option").each(function () {
        if (jQuery(this).val() === last) {
            jQuery(this).attr({
                selected: "selected"
            });
        }
    });


    jQuery(".eesave").bind("click", function () {
        eeSave(jQuery(this).attr("id"));
    });

    jQuery(".eecancel").bind("click", function () {
        eeCancel(jQuery(this).attr("id"));
    });


}

function ppClose(){
    $.prettyPhoto.close();
    location.reload();
}

function unbindEE() {
    jQuery(".e-ease").each(function () {
        var v = '#' + jQuery(this).attr("id");
        jQuery(v).removeClass("editactive");
    });

    jQuery(".eeClick").remove();
    jQuery(".eeClickEdit").remove();
    jQuery(".e-ease").unbind("mouseover");
    jQuery(".e-ease").unbind("mouseout");
    jQuery(".e-ease .eeClick").unbind("click");
    jQuery("#eepages").unbind("change");
    jQuery("#eehelpt").unbind("click");
    jQuery("#eeinfot").unbind("click");
    jQuery("#eeinclo").unbind("click");
    jQuery("#eesave").unbind("click");
    jQuery("#eecancel").unbind("click");
}
/*######## END LOGIN & DISPLAY PANEL FUNCTIONS #########*/

/*########    START EDIT CONTENT FUNCTIONS     #########*/
function editNow(val) {
    var vID = '#' + val;
    var vh = jQuery(vID).outerHeight();
    var vw = jQuery(vID).outerWidth();
    var vCSS = jQuery(vID).attr("class");
    var veditor = /ee:\S*/i.exec(vCSS);
    var nW = (jQuery(window).width() - 150);
    var nH = (jQuery(window).height() - 130);


    if (veditor == 'ee:wwig') {
        //jQuery(vID).before('<div id="ma-'+val+'" class="emask2" style="height:'+vh+'px;width:'+vw+'px;"></div>');
        //jQuery(vID).addClass("edithoverActive");
        //jQuery('#ee-'+val).fadeOut("slow");

        var src = '' + eePath + '/cfk-edit.php?file=' + val + '&iframe=true&width=' + nW + '&height=' + nH;
        $.prettyPhoto.open(src);
        /*$.modal('<iframe src="' + src + '" height="'+nH+'" width="'+nW+'" style="border:0">', {
        	closeHTML:"",
        	containerCss:{
        		backgroundColor: '#fff',
        		padding:'0',
        		margin:'0'
        	},
        	escClose:false
        });*/

    } else {
        jQuery(vID).before('<div id="ma-' + val + '" class="emask" style="height:' + vh + 'px;width:' + vw + 'px;"></div>');

        var jQuerycontents = jQuery.post("" + eePath + "/getfile.php", {
            file: val
            , height: vh
            , width: vw
            , eType: veditor
            , eData: "edit"
        }, function (data) {
            jQuery(vID).html(data);
            jQuery(vID).addClass("edithoverActive");
            jQuery('#ed-' + val).fadeIn("slow");
            jQuery('#ee-' + val).fadeOut("slow");
            jQuery('#ma-' + val).fadeOut("fast", function () {
                jQuery('#ma-' + val).remove();
            });
        });

    }

}


function eeSave(tVal) {
    var fval = tVal.split("es-");
    var nData = jQuery("#eeta-" + fval[1]).val();
    var vID = '#' + fval[1];
    var vh = jQuery(vID).outerHeight();
    var vw = jQuery(vID).outerWidth();
    jQuery(vID).before('<div id="ma-' + fval[1] + '" class="emask" style="height:' + vh + 'px;width:' + vw + 'px;"></div>');
    var jQuerycontents = jQuery.post("" + eePath + "/getfile.php", {
        file: fval[1]
        , eData: "save"
        , nData: nData
    }, function (data) {
        jQuery('#' + fval[1]).html(data);
        jQuery('#' + fval[1]).removeClass("edithoverActive");
        jQuery('#ed-' + fval[1]).fadeOut("slow");
        jQuery('#ee-' + fval[1]).fadeIn("medium");
        jQuery('#ma-' + fval[1]).fadeOut("fast", function () {
            jQuery('#ma-' + fval[1]).remove();
        });
    });
}


function eeCancel(tVal) {
    jQuery.modal.close();
    var fval = tVal.split("ex-");
    var vID = '#' + fval[1];
    var vh = jQuery(vID).outerHeight();
    var vw = jQuery(vID).outerWidth();
    jQuery(vID).before('<div id="ma-' + fval[1] + '" class="emask" style="height:' + vh + 'px;width:' + vw + 'px;"></div>');
    var jQuerycontents = jQuery.post("" + eePath + "/getfile.php", {
        file: fval[1]
        , eData: "cancel"
    }, function (data) {
        jQuery('#' + fval[1]).html(data);
        jQuery('#' + fval[1]).removeClass("edithoverActive");
        jQuery('#ed-' + fval[1]).fadeOut("slow");
        jQuery('#ee-' + fval[1]).fadeIn("medium");
        jQuery('#ma-' + fval[1]).fadeOut("fast", function () {
            jQuery('#ma-' + fval[1]).remove();
        });
    });
}


function closeEditing(tVal, nData) {
    //jQuery.modal.close();
    $.prettyPhoto.close();
       
    if (nData !== 'xxlee') {
        var jQuerycontents = jQuery.post("" + eePath + "/getfile.php", {
            file: tVal
            , eData: "save"
            , nData: nData
        }, function (data) {
            jQuery('#' + tVal).html(data);
            jQuery('#' + tVal).removeClass("edithoverActive");
            jQuery('#ed-' + tVal).fadeOut("slow");
            jQuery('#ee-' + tVal).fadeIn("medium");
            jQuery('#ma-' + tVal).fadeOut("fast", function () {
                jQuery('#ma-' + tVal).remove();
            });
        });
    } else {
        jQuery('#' + tVal).removeClass("edithoverActive");
        jQuery('#ed-' + tVal).fadeOut("slow");
        jQuery('#ee-' + tVal).fadeIn("medium");
        jQuery('#ma-' + tVal).fadeOut("medium", function () {
            jQuery('#ma-' + tVal).remove();
        });
    }

}
function closeEditing2(tVal, nData) {
    //jQuery.modal.close();

    if (nData !== 'xxlee') {
        var jQuerycontents = jQuery.post("" + eePath + "/getfile.php", {
            file: tVal
            , eData: "save"
            , nData: nData
        }, function (data) {
            jQuery('#' + tVal).html(data);
            jQuery('#' + tVal).removeClass("edithoverActive");
            jQuery('#ed-' + tVal).fadeOut("slow");
            jQuery('#ee-' + tVal).fadeIn("medium");
            jQuery('#ma-' + tVal).fadeOut("fast", function () {
                jQuery('#ma-' + tVal).remove();
            });
        });
    } else {
        jQuery('#' + tVal).removeClass("edithoverActive");
        jQuery('#ed-' + tVal).fadeOut("slow");
        jQuery('#ee-' + tVal).fadeIn("medium");
        jQuery('#ma-' + tVal).fadeOut("medium", function () {
            jQuery('#ma-' + tVal).remove();
        });
    }

}
/*########     END EDIT CONTENT FUNCTIONS      #########*/

function popData(showThis, title) {
    jQuery("#" + showThis).modal({
        closeHTML: ""
        , containerCss: {
            backgroundColor: '#ffffff'
            , height: 200
            , padding: 20
            , width: 500
        }
        , overlayClose: true
    });
}  

/*
 * SimpleModal 1.3.3 - jQuery Plugin
 * http://www.ericmmartin.com/projects/simplemodal/
 * Copyright (c) 2009 Eric Martin (http://twitter.com/EricMMartin)
 * Dual licensed under the MIT and GPL licenses
 * Revision: $Id: jquery.simplemodal.js 228 2009-10-30 13:34:27Z emartin24 $
 */

/**
 * SimpleModal is a lightweight jQuery plugin that provides a simple
 * interface to create a modal dialog.
 *
 * The goal of SimpleModal is to provide developers with a cross-browser 
 * overlay and container that will be populated with data provided to
 * SimpleModal.
 *
 * There are two ways to call SimpleModal:
 * 1) As a chained function on a jQuery object, like $('#myDiv').modal();.
 * This call would place the DOM object, #myDiv, inside a modal dialog.
 * Chaining requires a jQuery object. An optional options object can be
 * passed as a parameter.
 *
 * @example $('<div>my data</div>').modal({options});
 * @example $('#myDiv').modal({options});
 * @example jQueryObject.modal({options});
 *
 * 2) As a stand-alone function, like $.modal(data). The data parameter
 * is required and an optional options object can be passed as a second
 * parameter. This method provides more flexibility in the types of data 
 * that are allowed. The data could be a DOM object, a jQuery object, HTML
 * or a string.
 * 
 * @example $.modal('<div>my data</div>', {options});
 * @example $.modal('my data', {options});
 * @example $.modal($('#myDiv'), {options});
 * @example $.modal(jQueryObject, {options});
 * @example $.modal(document.getElementById('myDiv'), {options}); 
 * 
 * A SimpleModal call can contain multiple elements, but only one modal 
 * dialog can be created at a time. Which means that all of the matched
 * elements will be displayed within the modal container.
 * 
 * SimpleModal internally sets the CSS needed to display the modal dialog
 * properly in all browsers, yet provides the developer with the flexibility
 * to easily control the look and feel. The styling for SimpleModal can be 
 * done through external stylesheets, or through SimpleModal, using the
 * overlayCss and/or containerCss options.
 *
 * SimpleModal has been tested in the following browsers:
 * - IE 6, 7, 8
 * - Firefox 2, 3
 * - Opera 9, 10
 * - Safari 3, 4
 * - Chrome 1, 2
 *
 * @name SimpleModal
 * @type jQuery
 * @requires jQuery v1.2.2
 * @cat Plugins/Windows and Overlays
 * @author Eric Martin (http://ericmmartin.com)
 * @version 1.3.3
 */
;
(function ($) {
    /* var ie6 = $.browser.msie && parseInt($.browser.version) == 6 && typeof window['XMLHttpRequest'] != "object"
        , ieQuirks = null
        , w = [];

    
     * Stand-alone function to create a modal dialog.
     * 
     * @param {string, object} data A string, jQuery object or DOM object
     * @param {object} [options] An optional object containing options overrides
     */
    $.modal = function (data, options) {
        return $.modal.impl.init(data, options);
    };

    /*
     * Stand-alone close function to close the modal dialog
     */
    $.modal.close = function () {
        $.modal.impl.close();
    };

    /*
     * Chained function to create a modal dialog.
     * 
     * @param {object} [options] An optional object containing options overrides
     */
    $.fn.modal = function (options) {
        return $.modal.impl.init(this, options);
    };

    /*
     * SimpleModal default options
     * 
     * appendTo:		(String:'body') The jQuery selector to append the elements to. For ASP.NET, use 'form'.
     * focus:			(Boolean:true) Forces focus to remain on the modal dialog
     * opacity:			(Number:50) The opacity value for the overlay div, from 0 - 100
     * overlayId:		(String:'simplemodal-overlay') The DOM element id for the overlay div
     * overlayCss:		(Object:{}) The CSS styling for the overlay div
     * containerId:		(String:'simplemodal-container') The DOM element id for the container div
     * containerCss:	(Object:{}) The CSS styling for the container div
     * dataId:			(String:'simplemodal-data') The DOM element id for the data div
     * dataCss:			(Object:{}) The CSS styling for the data div
     * minHeight:		(Number:200) The minimum height for the container
     * minWidth:		(Number:200) The minimum width for the container
     * maxHeight:		(Number:null) The maximum height for the container. If not specified, the window height is used.
     * maxWidth:		(Number:null) The maximum width for the container. If not specified, the window width is used.
     * autoResize:		(Boolean:false) Resize container on window resize? Use with caution - this may have undesirable side-effects.
     * autoPosition:	(Boolean:true) Reposition container on window resize?
     * zIndex:			(Number: 1000) Starting z-index value
     * close:			(Boolean:true) If true, closeHTML, escClose and overClose will be used if set.
     							If false, none of them will be used.
     * closeHTML:		(String:'<a class="modalCloseImg" title="Close"></a>') The HTML for the 
    						default close link. SimpleModal will automatically add the closeClass to this element.
     * closeClass:		(String:'simplemodal-close') The CSS class used to bind to the close event
     * escClose:		(Boolean:true) Allow Esc keypress to close the dialog? 
     * overlayClose:	(Boolean:false) Allow click on overlay to close the dialog?
     * position:		(Array:null) Position of container [top, left]. Can be number of pixels or percentage
     * persist:			(Boolean:false) Persist the data across modal calls? Only used for existing
    							DOM elements. If true, the data will be maintained across modal calls, if false,
    							the data will be reverted to its original state.
     * onOpen:			(Function:null) The callback function used in place of SimpleModal's open
     * onShow:			(Function:null) The callback function used after the modal dialog has opened
     * onClose:			(Function:null) The callback function used in place of SimpleModal's close
     */
    $.modal.defaults = {
        appendTo: 'body'
        , focus: true
        , opacity: 50
        , overlayId: 'simplemodal-overlay'
        , overlayCss: {}
        , containerId: 'simplemodal-container'
        , containerCss: {}
        , dataId: 'simplemodal-data'
        , dataCss: {}
        , minHeight: 100
        , minWidth: 300
        , maxHeight: null
        , maxWidth: null
        , autoResize: false
        , autoPosition: true
        , zIndex: 1000
        , close: true
        , closeHTML: '<a class="modalCloseImg" title="Close"></a>'
        , closeClass: 'simplemodal-close'
        , escClose: true
        , overlayClose: false
        , position: 'fixed'
        , persist: false
        , onOpen: null
        , onShow: null
        , onClose: null
    };

    /*
     * Main modal object
     */
    $.modal.impl = {
        /*
         * Modal dialog options
         */
        o: null
        , /*
         * Contains the modal dialog elements and is the object passed 
         * back to the callback (onOpen, onShow, onClose) functions
         */
        d: {}
        , /*
         * Initialize the modal dialog
         */
        init: function (data, options) {
            var s = this;

            // don't allow multiple calls
            if (s.d.data) {
                return false;
            }

            // $.boxModel is undefined if checked earlier
            ieQuirks = $.browser.msie && !$.boxModel;

            // merge defaults and user options
            s.o = $.extend({}, $.modal.defaults, options);

            // keep track of z-index
            s.zIndex = s.o.zIndex;

            // set the onClose callback flag
            s.occb = false;

            // determine how to handle the data based on its type
            if (typeof data == 'object') {
                // convert DOM object to a jQuery object
                data = data instanceof jQuery ? data : $(data);

                // if the object came from the DOM, keep track of its parent
                if (data.parent().parent().size() > 0) {
                    s.d.parentNode = data.parent();

                    // persist changes? if not, make a clone of the element
                    if (!s.o.persist) {
                        s.d.orig = data.clone(true);
                    }
                }
            } else if (typeof data == 'string' || typeof data == 'number') {
                // just insert the data as innerHTML
                data = $('<div></div>').html(data);
            } else {
                // unsupported data type!
                alert('SimpleModal Error: Unsupported data type: ' + typeof data);
                return s;
            }

            // create the modal overlay, container and, if necessary, iframe
            s.create(data);
            data = null;

            // display the modal dialog
            s.open();

            // useful for adding events/manipulating data in the modal dialog
            if ($.isFunction(s.o.onShow)) {
                s.o.onShow.apply(s, [s.d]);
            }

            // don't break the chain =)
            return s;
        }
        , /*
         * Create and add the modal overlay and container to the page
         */
        create: function (data) {
            var s = this;

            // get the window properties
            w = s.getDimensions();

            // add an iframe to prevent select options from bleeding through
            if (ie6) {
                s.d.iframe = $('<iframe src="javascript:false;"></iframe>')
                    .css($.extend(s.o.iframeCss, {
                        display: 'none'
                        , opacity: 0
                        , position: 'fixed'
                        , height: w[0]
                        , width: w[1]
                        , zIndex: s.o.zIndex
                        , top: 0
                        , left: 0
                    }))
                    .appendTo(s.o.appendTo);
            }

            // create the overlay
            s.d.overlay = $('<div></div>')
                .attr('id', s.o.overlayId)
                .addClass('simplemodal-overlay')
                .css($.extend(s.o.overlayCss, {
                    display: 'none'
                    , opacity: s.o.opacity / 100
                    , height: w[0]
                    , width: w[1]
                    , position: 'fixed'
                    , left: 0
                    , top: 0
                    , zIndex: s.o.zIndex + 1
                }))
                .appendTo(s.o.appendTo);

            // create the container
            s.d.container = $('<div></div>')
                .attr('id', s.o.containerId)
                .addClass('simplemodal-container')
                .css($.extend(s.o.containerCss, {
                    display: 'none'
                    , position: 'fixed'
                    , zIndex: s.o.zIndex + 2
                }))
                .append(s.o.close && s.o.closeHTML ? $(s.o.closeHTML).addClass(s.o.closeClass) : '')
                .appendTo(s.o.appendTo);

            s.d.wrap = $('<div></div>')
                .attr('tabIndex', -1)
                .addClass('simplemodal-wrap')
                .css({
                    height: '100%'
                    , outline: 0
                    , width: '100%'
                })
                .appendTo(s.d.container);

            // add styling and attributes to the data
            // append to body to get correct dimensions, then move to wrap
            s.d.data = data
                .attr('id', data.attr('id') || s.o.dataId)
                .addClass('simplemodal-data')
                .css($.extend(s.o.dataCss, {
                    display: 'none'
                }))
                .appendTo('body');
            data = null;

            s.setContainerDimensions();
            s.d.data.appendTo(s.d.wrap);

            // fix issues with IE
            if (ie6 || ieQuirks) {
                s.fixIE();
            }
        }
        , /*
         * Bind events
         */
        bindEvents: function () {
            var s = this;

            // bind the close event to any element with the closeClass class
            $('.' + s.o.closeClass).bind('click.simplemodal', function (e) {
                e.preventDefault();
                s.close();
            });

            // bind the overlay click to the close function, if enabled
            if (s.o.close && s.o.overlayClose) {
                s.d.overlay.bind('click.simplemodal', function (e) {
                    e.preventDefault();
                    s.close();
                });
            }

            // bind keydown events
            $(document).bind('keydown.simplemodal', function (e) {
                if (s.o.focus && e.keyCode == 9) { // TAB
                    s.watchTab(e);
                } else if ((s.o.close && s.o.escClose) && e.keyCode == 27) { // ESC
                    e.preventDefault();
                    s.close();
                }
            });

            // update window size
            $(window).bind('resize.simplemodal', function () {
                // redetermine the window width/height
                w = s.getDimensions();

                // reposition the dialog
                s.setContainerDimensions(true);

                if (ie6 || ieQuirks) {
                    s.fixIE();
                } else {
                    // update the iframe & overlay
                    s.d.iframe && s.d.iframe.css({
                        height: w[0]
                        , width: w[1]
                    });
                    s.d.overlay.css({
                        height: w[0]
                        , width: w[1]
                    });
                }
            });
        }
        , /*
         * Unbind events
         */
        unbindEvents: function () {
            $('.' + this.o.closeClass).unbind('click.simplemodal');
            $(document).unbind('keydown.simplemodal');
            $(window).unbind('resize.simplemodal');
            this.d.overlay.unbind('click.simplemodal');
        }
        , /*
         * Fix issues in IE6 and IE7 in quirks mode
         */
        fixIE: function () {
            var s = this
                , p = s.o.position;

            // simulate fixed position - adapted from BlockUI
            $.each([s.d.iframe || null, s.d.overlay, s.d.container], function (i, el) {
                if (el) {
                    var bch = 'document.body.clientHeight'
                        , bcw = 'document.body.clientWidth'
                        , bsh = 'document.body.scrollHeight'
                        , bsl = 'document.body.scrollLeft'
                        , bst = 'document.body.scrollTop'
                        , bsw = 'document.body.scrollWidth'
                        , ch = 'document.documentElement.clientHeight'
                        , cw = 'document.documentElement.clientWidth'
                        , sl = 'document.documentElement.scrollLeft'
                        , st = 'document.documentElement.scrollTop'
                        , s = el[0].style;

                    s.position = 'absolute';
                    if (i < 2) {
                        s.removeExpression('height');
                        s.removeExpression('width');
                        s.setExpression('height', '' + bsh + ' > ' + bch + ' ? ' + bsh + ' : ' + bch + ' + "px"');
                        s.setExpression('width', '' + bsw + ' > ' + bcw + ' ? ' + bsw + ' : ' + bcw + ' + "px"');
                    } else {
                        var te, le;
                        if (p && p.constructor == Array) {
                            var top = p[0] ? typeof p[0] == 'number' ? p[0].toString() : p[0].replace(/px/, '') : el.css('top').replace(/px/, '');
                            te = top.indexOf('%') == -1 ? top + ' + (t = ' + st + ' ? ' + st + ' : ' + bst + ') + "px"' : parseInt(top.replace(/%/, '')) + ' * ((' + ch + ' || ' + bch + ') / 100) + (t = ' + st + ' ? ' + st + ' : ' + bst + ') + "px"';

                            if (p[1]) {
                                var left = typeof p[1] == 'number' ? p[1].toString() : p[1].replace(/px/, '');
                                le = left.indexOf('%') == -1 ? left + ' + (t = ' + sl + ' ? ' + sl + ' : ' + bsl + ') + "px"' : parseInt(left.replace(/%/, '')) + ' * ((' + cw + ' || ' + bcw + ') / 100) + (t = ' + sl + ' ? ' + sl + ' : ' + bsl + ') + "px"';
                            }
                        } else {
                            te = '(' + ch + ' || ' + bch + ') / 2 - (this.offsetHeight / 2) + (t = ' + st + ' ? ' + st + ' : ' + bst + ') + "px"';
                            le = '(' + cw + ' || ' + bcw + ') / 2 - (this.offsetWidth / 2) + (t = ' + sl + ' ? ' + sl + ' : ' + bsl + ') + "px"';
                        }
                        s.removeExpression('top');
                        s.removeExpression('left');
                        s.setExpression('top', te);
                        s.setExpression('left', le);
                    }
                }
            });
        }
        , focus: function (pos) {
            var s = this
                , p = pos || 'first';

            // focus on dialog or the first visible/enabled input element
            var input = $(':input:enabled:visible:' + p, s.d.wrap);
            input.length > 0 ? input.focus() : s.d.wrap.focus();
        }
        , getDimensions: function () {
            var el = $(window);

            // fix a jQuery/Opera bug with determining the window height
            var h = $.browser.opera && $.browser.version > '9.5' && $.fn.jquery <= '1.2.6' ? document.documentElement['clientHeight'] :
                $.browser.opera && $.browser.version < '9.5' && $.fn.jquery > '1.2.6' ? window.innerHeight :
                el.height();

            return [h, el.width()];
        }
        , getVal: function (v) {
            return v == 'auto' ? 0 : v.indexOf('%') > 0 ? v : parseInt(v.replace(/px/, ''));
        }
        , setContainerDimensions: function (resize) {
            var s = this;

            if (!resize || (resize && s.o.autoResize)) {
                // get the dimensions for the container and data
                var ch = s.getVal(s.d.container.css('height'))
                    , cw = s.getVal(s.d.container.css('width'))
                    , dh = s.d.data.outerHeight(true)
                    , dw = s.d.data.outerWidth(true);

                var mh = s.o.maxHeight && s.o.maxHeight < w[0] ? s.o.maxHeight : w[0]
                    , mw = s.o.maxWidth && s.o.maxWidth < w[1] ? s.o.maxWidth : w[1];

                // height
                if (!ch) {
                    if (!dh) {
                        ch = s.o.minHeight;
                    } else {
                        if (dh > mh) {
                            ch = mh;
                        } else if (dh < s.o.minHeight) {
                            ch = s.o.minHeight;
                        } else {
                            ch = dh;
                        }
                    }
                } else {
                    ch = ch > mh ? mh : ch;
                }

                // width
                if (!cw) {
                    if (!dw) {
                        cw = s.o.minWidth;
                    } else {
                        if (dw > mw) {
                            cw = mw;
                        } else if (dw < s.o.minWidth) {
                            cw = s.o.minWidth;
                        } else {
                            cw = dw;
                        }
                    }
                } else {
                    cw = cw > mw ? mw : cw;
                }

                s.d.container.css({
                    height: ch
                    , width: cw
                });
                if (dh > ch || dw > cw) {
                    s.d.wrap.css({
                        overflow: 'auto'
                    });
                }
            }

            if (s.o.autoPosition) {
                s.setPosition();
            }
        }
        , setPosition: function () {
            var s = this
                , top, left
                , hc = (w[0] / 2) - (s.d.container.outerHeight(true) / 2)
                , vc = (w[1] / 2) - (s.d.container.outerWidth(true) / 2);

            if (s.o.position && Object.prototype.toString.call(s.o.position) === "[object Array]") {
                top = s.o.position[0] || hc;
                left = s.o.position[1] || vc;
            } else {
                top = hc;
                left = vc;
            }
            s.d.container.css({
                left: left
                , top: top
            });
        }
        , watchTab: function (e) {
            var s = this;

            if ($(e.target).parents('.simplemodal-container').length > 0) {
                // save the list of inputs
                s.inputs = $(':input:enabled:visible:first, :input:enabled:visible:last', s.d.data[0]);

                // if it's the first or last tabbable element, refocus
                if ((!e.shiftKey && e.target == s.inputs[s.inputs.length - 1]) ||
                    (e.shiftKey && e.target == s.inputs[0]) ||
                    s.inputs.length == 0) {
                    e.preventDefault();
                    var pos = e.shiftKey ? 'last' : 'first';
                    setTimeout(function () {
                        s.focus(pos);
                    }, 10);
                }
            } else {
                // might be necessary when custom onShow callback is used
                e.preventDefault();
                setTimeout(function () {
                    s.focus();
                }, 10);
            }
        }
        , /*
         * Open the modal dialog elements
         * - Note: If you use the onOpen callback, you must "show" the 
         *	        overlay and container elements manually 
         *         (the iframe will be handled by SimpleModal)
         */
        open: function () {
            var s = this;
            // display the iframe
            s.d.iframe && s.d.iframe.show();

            if ($.isFunction(s.o.onOpen)) {
                // execute the onOpen callback 
                s.o.onOpen.apply(s, [s.d]);
            } else {
                // display the remaining elements
                s.d.overlay.show();
                s.d.container.show();
                s.d.data.show();
            }

            s.focus();

            // bind default events
            s.bindEvents();
        }
        , /*
         * Close the modal dialog
         * - Note: If you use an onClose callback, you must remove the 
         *         overlay, container and iframe elements manually
         *
         * @param {boolean} external Indicates whether the call to this
         *     function was internal or external. If it was external, the
         *     onClose callback will be ignored
         */
        close: function () {
            var s = this;

            // prevent close when dialog does not exist
            if (!s.d.data) {
                return false;
            }

            // remove the default events
            s.unbindEvents();

            if ($.isFunction(s.o.onClose) && !s.occb) {
                // set the onClose callback flag
                s.occb = true;

                // execute the onClose callback
                s.o.onClose.apply(s, [s.d]);
            } else {
                // if the data came from the DOM, put it back
                if (s.d.parentNode) {
                    // save changes to the data?
                    if (s.o.persist) {
                        // insert the (possibly) modified data back into the DOM
                        s.d.data.hide().appendTo(s.d.parentNode);
                    } else {
                        // remove the current and insert the original, 
                        // unmodified data back into the DOM
                        s.d.data.hide().remove();
                        s.d.orig.appendTo(s.d.parentNode);
                    }
                } else {
                    // otherwise, remove it
                    s.d.data.hide().remove();
                }

                // remove the remaining elements
                s.d.container.hide().remove();
                s.d.overlay.hide().remove();
                s.d.iframe && s.d.iframe.hide().remove();

                // reset the dialog object
                s.d = {};
            }
        }
    };
})(jQuery);