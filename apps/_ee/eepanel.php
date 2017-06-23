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
           
<!--
            <ul class="pull-right" style="list-style:none;">
               <li style="display:inline-block;"><a href="">Dashboard</a></li>
                                                          <li style="display:inline-block;"><a href="">Add Page</a></li>
               <li style="display:inline-block;"><a href="">Add Post</a></li>
                                                          <li style="display:inline-block;"><a href="">Images</a></li>
           </ul>
-->
           
            <div class="eeimgs">
                    <a href="tp-Login" onClick="eelogout();" id="eeinclo" title="logout of editEase"><img src="<?php echo $eeJs;?>/img/cross-i.gif" alt="logout of editEase"/></a>
            </div>
            <strong><a href="<?php echo newPath; ?>tp-Dashboard" style="color:white;">ThemeParks CMS</a> </strong> <?php if( count($pages)> 0){?><?php foreach ($pages as &$v) {	$pd = explode("|", $v);	echo "<span class='dash'>  <a href='$pd[1]'>$pd[0]</a>  |</span>";	}?><?php } ?>
                <br />
                <br />
            </div>
    </div>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>



