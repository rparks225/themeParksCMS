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
global $userName;
?>

<ul class="ee_sideNav">
    <li style="text-align:center;"> <img style="width:200px;top:-20px;position:relative;" src="<?php echo $eeJs;?>/img/logo.png" alt="editEase control panel" class="eeimg" /> </li>
    <li>
        <hr>
    </li>
    <li> <a href="tp-Dashboard">Back to Dashboard</a> </li>
    <li> <a href="tp-Pages">Edit Page</a> </li>
    <li> <a href="tp-Post">Edit Post</a> </li>
    <li> <a style="text-align:left;border-radius:0;" href="#" onclick="event.preventDefault()" class="btn tpPreview"><span class="changed">Edit</span> Content</a> </li>
    <li> <a href="#" class="openSide" onclick="event.preventDefault()">Close Side bar</a> </li>
    <li> <a href="tp-Login" onClick="eelogout();">Logout</a> </li>
</ul>

<div class="overlay" style="position: fixed;
                            background: rgba(0,0,0,.3);
                            width: 100%;
                            height: 100%;
                            z-index: 99998;
                            display: none;
                            "></div>

<div id="eepanel">
    <div id="eepanelWrap">
        <div class="ec">
            <div class="eeimgs">
                <div href="#" class="btn openSide" style="color:white;font-size:16pt;margin-top:-15px;"> <i class="fa fa-ellipsis-v" aria-hidden="true"></i> </div>
            </div> <strong>
            <a href="<?php echo newPath; ?>tp-Dashboard" style="color:white;">You Are logged in as: <span style="color:#1EACBA;"><?php echo $_SESSION['user']; ?></span></a> 
            </strong> 
        </div>
    </div>
</div>

<div id="eeInit"> <i id="eeIni" class="fa fa-2x fa-angle-double-up" aria-hidden="true"></i> </div>

<script>
$(document).ready(function(){$('.openSide').click(function(){if($('.ee_sideNav').position().left==0){$('.ee_sideNav').animate({left:"-315px"},"300");$('.overlay').fadeOut('slow')}else{$('.ee_sideNav').animate({left:"0px"},"300");$('.overlay').fadeIn('slow')}});$('#eeInit').click(function(){if($('.ee_sideNav').position().left==0){$('.ee_sideNav').animate({left:"-315px"},"300")}
if($('#eeIni').hasClass('fa-angle-double-up')){$('#eeIni').removeClass('fa-angle-double-up');$('#eeIni').addClass('fa-angle-double-down')}else{$('#eeIni').removeClass('fa-angle-double-down');$('#eeIni').addClass('fa-angle-double-up');$('.ee_sideNav').animate({left:"0px"},"300")}
$('#eepanel').slideToggle()});$('.tpPreview').click(function(){$('.overlay').fadeOut('slow');$('.ee_sideNav').animate({left:"-315px"},"300");$('.changed').empty();if($('.edit').attr('contenteditable')){jQuery.each(CKEDITOR.instances,function(){eval("CKEDITOR.instances."+this.name+".destroy()")});$('.edit').removeAttr('contenteditable');$('.changed').append('Edit')}else{$('.edit').attr('contenteditable','true');$('.changed').append('Preview');CKEDITOR.inlineAll()}});$('.overlay').click(function(){$('.ee_sideNav').animate({left:"-315px"},"300");$('.overlay').fadeOut('slow')})});
</script>







