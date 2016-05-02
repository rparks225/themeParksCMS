<?php
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
include("config.php");
?>
<div id="eepanel" style="position:fixed;">
<div id="eepanelWrap">
    <div class="ec"> <a href="<?php echo newPath; ?>tp-Dashboard"><img style="width:50px;top:-3px;position:relative;" src="<?php echo $eeJs;?>/img/logo.png" alt="editEase control panel" class="eeimg"/></a>
		<div class="eeimgs">
				<?php if($fileSystem==1){?><a href="javascript:void(0)" id="eefilest" title="online File Manager click to show-hide"><img src="<?php echo $eeJs;?>/img/folder_explore.png" alt="online File Manager click to show-hide"/></a><?php } ?>
				<!--<a href="javascript:void(0)" id="eehelpt" title="editEase help click to show-hide"><img src="<?php echo $eeJs;?>/img/help-i.gif" alt="editEase help click to show-hide"/></a>
				<a href="javascript:void(0)" id="eeinfot" title="editEase information click to show-hide"><img src="<?php echo $eeJs;?>/img/information-i.gif" alt="editEase information click to show-hide"/></a>-->
				<a href="tp-Login" onClick="eelogout();" id="eeinclo" title="logout of editEase"><img src="<?php echo $eeJs;?>/img/cross-i.gif" alt="logout of editEase"/></a>
		</div>
        <strong><a href="<?php echo newPath; ?>tp-Dashboard" style="color:white;">ThemeParks CMS</a> </strong> <?php if( count($pages)> 0){?><?php foreach ($pages as &$v) {	$pd = explode("|", $v);	echo "<span class='dash'>  <a href='$pd[1]'>$pd[0]</a>  |</span>";	}?><?php } ?>
			<br />
			<br />
		</div>
</div>

<?php
if($fileSystem==1){
include("_fslib/fslib.php");
?>
<script type="text/javascript" src="<?php echo $eeJs;?>/_fslib/swfupload/swfupload.js"></script>
<script type="text/javascript" src="<?php echo $eeJs;?>/_fslib/fslib.js"></script>
<div id="eefiles">
	<div class="eedata">
	<h1>Filemanager</h1>
		<div class="edata">
		<?php
		/* LISTDIR desciption in code fslib.php */
		listDir($serverPath,$eeIpath,0,$filePages);
		?>
		</div>
	</div>
</div>
<script type="text/javascript">
<!--
/*
only needs changing if installed in a different directory, or will
need to be full path if used in conjunction with mod rewrite urls.
*/
var baseFiles = '<?php echo $filePages ;?>';

var swfu;
//var uploadFilesJS = '';

/*On Ready requirements*/
jQuery(document).ready(function(){
	pageBindings();
	jQuery("#createDirectory").bind("click", createDirectory);jQuery("#fileUpload").bind("click", uploadFile);jQuery("#cancelDir").bind("click", closeDir);jQuery("#cancelFile").bind("click", closeFile);

	jQuery("#form-directory").submit( function () {
		jQuery.ajax({
			type: "POST",
			url: baseFiles+"/fslib.php",
			data: {currentDir: jQuery("#currentDirCreate").val(), dirName: jQuery("#dirName").val(), createDirectoryNow: true } ,
			success: function(resp){
				jQuery("#responseDir").text(resp).css({display:"block"});
				jQuery("#dirName").val('');
			}
		});
		return false;
	});

swfu = new SWFUpload({
				// Backend Settings
				upload_url: baseFiles+"/swfupload/upload.php",	// Relative to the SWF file
				post_params: {"PHPSESSID": "<?php echo session_id(); ?>"},

				// File Upload Settings
				file_size_limit : "100 MB",	// 10MB
				file_types : "*.asp;*.bmp;*.doc;*.docx;*.file;*.gif;*.html;*.jpg;*.jpeg;*.sql;*.xlsx;*.mdb;*.pdf;*.php;*.psd;*.txt;*.xls;*.xml;*.csv;*.ods;*.odt;*.zip;*.png;*.ai;*.css;*.js;*.swf;*.fla;*.wmv;*.mov;*.qt;*.mpeg;*.mp2;*.mp3;*.mp3;*.avi",
				file_types_description : "Allowed Files",
				file_upload_limit : 12,

				custom_settings : {
					progressTarget : "fsUploadProgress",
					cancelButtonId : "btnCancel"
				},

				// Button Settings
				button_image_url : baseFiles+"/swfupload/XPButtonUploadText_61x22.png",	// Relative to the SWF file
				button_placeholder_id : "spanButtonPlaceholder",
				button_width: 61,
				button_height: 22,

				// The event handler functions are defined in handlers.js
				swfupload_loaded_handler : swfUploadLoaded,
				file_queued_handler : fileQueued,
				file_queue_error_handler : fileQueueError,
				file_dialog_complete_handler : fileDialogComplete,
				upload_start_handler : uploadStart,
				upload_progress_handler : uploadProgress,
				upload_error_handler : uploadError,
				upload_success_handler : uploadSuccess,
				upload_complete_handler : uploadComplete,
				queue_complete_handler : queueComplete,	// Queue plugin event
				
				// SWFObject settings
				minimum_flash_version : "9.0.28",
				swfupload_pre_load_handler : swfUploadPreLoad,
				swfupload_load_failed_handler : swfUploadLoadFailed,
				
				// Flash Settings
				flash_url : baseFiles+"/swfupload/swfupload.swf",


				
				// Debug Settings
				debug: false


			});

});
//-->
</script>
<?php } ?>

<div id="eehelp"><div class="eedata">
<h1>editEase Help</h1>
<div class="edata">
		<div class="edataleft"><div class="edatapading">
				<h2>How to edit</h2>
				<p>Once you have logged into <b>editEase</b> (which is obvious or you wont be able to read this), visit the pages of your website, via your normal on page links, or via the <em>'select page'</em> drop down box.</p>
				<p>The areas you can edit are surrounded by dotted lines and have the text <em>'Click to edit'</em> on the top left.  All you need to do is literally click that, and you are away laughing.  Dont forget to save your changes, or hit cancel if you change your mind.</p>
		</div></div>
		<div class="edataright"><div class="edatapading">
				<h2>Found a problem</h2>
				<p>Please let me know if you find any problems, with the browser, OS you are using and the nature of the problem.  Drop a line to Stephen at noosalife@gmail.com</p>

				<h2>Whats next?</h2>
				<ul>
				<li>I have a few ideas but it will take some time to get them (now if only I owned a Tardis)</li>
				<li>More themes to allow more flexibility and seamless integration with each website.</li>
				<li>Other stuff ?  If you have ideas let Stephen know on noosalife@gmail.com</li>
				</ul>
		</div>
		</div>
	<div style="clear:both;height:1px;">&nbsp;</div>
</div>
</div></div>

<div id="eeinfo"><div class="eedata">
<h1>Information</h1>
<div class="edata">
		<div class="edataleft"><div class="edatapading">
				<h2>Configuring your site pages</h2>
				<p>Configuring your site pages to use <b>editEase</b> couldn't be any easier (well until a better way presents itself).  All you need to do is add an ID and Class to the tag you wish to edit.</p>
				<p><b>example:</b> <em>&lt;div class=&quot;e-ease&quot; id=&quot;inc_data4&quot;&gt;&lt;?php include(&quot;_inc/inc_data4.txt&quot;);?&gt;&lt;/div&gt;</em>
				<br/><b>note:</b> the class and ID don't have to be on a div tag although the active edit will make the tag display:block.</p>
				<p>The class <b>e-ease</b> will tell <b>editEase</b> that the tag is available to edit. The ID <b>HAS</b> to be the name of the include file without the extension. <em>(naturally that file needs to be read/writable)</em></p>
				<p>Thats pretty much it.</p>
				<h2>File Manager</h2>
				<p>The built in "file manager" is a jQuery / PHP file display, upload, removal system.  It uses <a href="http://www.ericmmartin.com/projects/simplemodal/">simpleModal</a> to display images, and <a href="http://www.swfupload.org/">SWFUpload</a> to do the work on the multi file uploads.</p>
				<p>CHMOD values are read into the manager, so if the file/directory is not set to 757, or 777 it will not be able to be deleted.  This allows for easy protection from accidental deletion of must have files on the server.</p>
				<p>The main config.php file holds the required variable for this little tool.</p>
				</div></div>
		<div class="edataright"><div class="edatapading">
				<h2>Minimum Requirements</h2>
				<p><b>editEase</b> has a very small requirements list.  Apart from the uploaded set of files, you need to have jQuery available on the pages you wish to have an edit area.</p>
				<p><a href="http://jquery.com/">jQuery</a> - using 1.2.6+<br/>
				<p>This system has been tested and works (inlcuding the wysiwyg editor) in Firefox 2+, Internet Explorer 7 (IE6 needs some more testing), Opera 9+, and Safari 3 (for windows)</p>
				<h2>Project Home Page</h2>
				<p><b>editEase</b> can be found at <a href="http://code.google.com/p/editease/">http://code.google.com/p/editease/</a> which will have release notes, and updates as they come to hand.</p>
				<h2>Version / Update</h2>
				<p><b>editEase</b> was last updated on the 07 November 2009, and is now version 1.5 ish.</p>
				<h2>License</h2>
				<p><b>editEase</b> is currently available for use in all personal or commercial projects under the MIT license. This will give you the most flexibility for your own use.</p>
				<p><a href="javascript:void(0);" onclick="popData('mitl','LICENSE INFORMATION');">MIT License</a> (click to view license)</p>
				</div>
		</div>
			<div style="clear:both;height:1px;">&nbsp;</div>
</div>
</div></div>
</div>

<div id="mitl" style="display:none;">
<p>The MIT License</p>
<p>Copyright (c) 2007-2009 Stephen Neate, http://jquerystuff.net</p>
<p>Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:</p>
<p>The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.</p>
<p>THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.</p>
<p>More information can be found at: <a href="http://www.opensource.org/licenses/mit-license.php">http://www.opensource.org/licenses/mit-license.php</a></p>
</div>

