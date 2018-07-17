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

/*=============================================
   Checks the current theme for Admin Panel
=============================================*/
function userInfo($q){	
    global $mysqli;		
    $query = 'SELECT * FROM `U_sers` WHERE User_name LIKE "'.$_SESSION['user'].'"';
    if($result = $mysqli->query($query)){			
        while($row = $result->fetch_assoc()){	
            if(isset($row['Display_name'])){					
                $userName = $row['Display_name'];			
            }
            if(isset($row['Privileges'])){
                $privileges = $row['Privileges'];
            }						
        }				
    }	
    echo $$q;
}

/*========================================
    Secure Pages
========================================*/
class secPage{
    public $ips;
    public $newIps;

    private function vars(){
        if( file_exists('../includes/admin/sec.txt') ){ $this->ips = file_get_contents( realpath(__DIR__ . '/..').'/sec.txt' ); }
        $this->newIps = explode('>>', $this->ips);
    }

    public function listed(){
        $this->vars();
        echo '<ul>';
        foreach( $this->newIps as $ips ){
            echo '<li>'.$ips.'</li>';
        }
        echo '</ul>';
    }

    public function authorize(){
        $this->vars();
        if( file_exists('../includes/admin/sec.txt') ){
            if( in_array( $_SERVER['REMOTE_ADDR'],$this->newIps ) ){
                return 'true';
            }else{
                return 'false';
            }
        }else{
            return 'true';
        }
    }

    public function currentIp(){
        echo $_SERVER['REMOTE_ADDR'];
    }
}
$sec = new secPage();
?>

<?php if( $sec->authorize() == 'true' ):?>
<ul class="ee_sideNav">
    <li><div class="user-view">
            <div class="overlays"></div>
            <div class="background">
                <img src="<?php echo newPath; ?>includes/admin/assets/images/newBg.jpg" width="100%">
            </div>
            <a href="#!"><img src="<?php echo newPath; ?>includes/admin/assets/images/logo.png" width="35%"></a>
            <a href="#!"><span class="white-text name">You are logged in as:</span></a>
            <a href="#!"><span class="white-text email"><?php userInfo('userName'); ?></span></a>
            </div>
    </li>
    <div class="main">
    
    <li> 
        <a href="<?php echo newPath; ?>tp-Dashboard">
            <i class="tp-icon fa fa-arrow-left pull-left fa-2x" aria-hidden="true"></i>Back to Dashboard</a> 
    </li>
    <li> 
        <a href="<?php echo newPath; ?>tp-Pages">
            <i class="tp-icon fa fa-pencil pull-left fa-2x" aria-hidden="true"></i>Add Page</a> 
    </li>
    <li> 
        <a href="<?php echo newPath; ?>tp-Post">
            <i class="tp-icon fa fa-clipboard pull-left fa-2x" aria-hidden="true"></i>Add Post</a> 
    </li>
    <li> 
        <a style="text-align:left;border-radius:0;" href="#" onclick="event.preventDefault()" class="tpPreview">
            <i class="tp-icon fa fa-code pull-left fa-2x" aria-hidden="true"></i><span class="changed">Edit</span> Content
        </a> 
    </li>
    <li> 
        <a href="#" class="openSide" onclick="event.preventDefault()">
            <i class="tp-icon fa fa-bars pull-left fa-2x" aria-hidden="true"></i>Close Side bar</a> 
    </li>
    <li>
       <a href="<?php echo newPath; ?>tp-Login" onClick="eelogout();"> 
           <i class="tp-icon fa fa-power-off pull-left fa-2x" aria-hidden="true"></i> Logout
       </a> 
    </li>
    </div>
</ul>

<div class="overlay" style="position: fixed;
                            background: rgba(50,50,50,.5);
                            width: 100%;
                            height: 100%;
                            z-index: 99998;
                            display: none;
                            "></div>

<div id="eepanel">
    <div id="eepanelWrap">
        <div class="ec">
            <div class="eeimgs">
                <div href="#" class="openSide" style="color: white;
                                                      font-size: 16pt;
                                                      margin: -16px 0 0px 0;
                                                      box-shadow: unset;
                                                      height: 45px;
                                                      padding: 15px;
                                                      cursor: pointer;"> <i class="fa fa-bars" aria-hidden="true"></i> </div>
            </div> 
            
            <strong>
            <a href="<?php echo newPath; ?>tp-Dashboard" style="text-decoration:none;">
                <b style="color:white;padding:0;margin-top:1.1rem;">
                    <span style="color:#77273F;font-size:1.5em;font-weight: 100;">{ </span><span class="circle" style="background:#00838f;padding:9px;border-radius:50%;font-size:15px;font-family: -apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Oxygen-Sans,Ubuntu,Cantarell,'Helvetica Neue',sans-serif;font-weight: 500;">TP</span><span style="color:#77273F;font-size:1.5em;font-weight: 100;"> }</span>
                </b>
            </a> 
            </strong> 
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<div id="eeInit"> <i id="eeIni" class="fa fa-2x fa-angle-double-up" aria-hidden="true"></i> </div>

<script>
$(document).ready(function(){$('.openSide').click(function(){if($('.ee_sideNav').position().left==0){$('.ee_sideNav').animate({left:"-315px"},"300");$('.overlay').fadeOut('slow')}else{$('.ee_sideNav').animate({left:"0px"},"300");$('.overlay').fadeIn('slow')}});$('#eeInit').click(function(){if($('.ee_sideNav').position().left==0){$('.overlay').fadeOut('slow');$('.ee_sideNav').animate({left:"-315px"},"300")}
if($('#eeIni').hasClass('fa-angle-double-up')){$('#eeIni').removeClass('fa-angle-double-up');$('#eeIni').addClass('fa-angle-double-down')}else{$('#eeIni').removeClass('fa-angle-double-down');$('#eeIni').addClass('fa-angle-double-up');$('.overlay').fadeIn('slow');$('.ee_sideNav').animate({left:"0px"},"300")}
$('#eepanel').slideToggle()});$('.tpPreview').click(function(){$('.overlay').fadeOut('slow');$('.ee_sideNav').animate({left:"-315px"},"300");$('.changed').empty();if($('.edit').attr('contenteditable')){jQuery.each(CKEDITOR.instances,function(){eval("CKEDITOR.instances."+this.name+".destroy()")});$('.edit').removeAttr('contenteditable');$('.changed').append('Edit')}else{$('.edit').attr('contenteditable','true');$('.changed').append('Preview');CKEDITOR.inlineAll()}});$('.overlay').click(function(){$('.ee_sideNav').animate({left:"-315px"},"300");$('.overlay').fadeOut('slow')})});
</script>
<?php endif; ?>