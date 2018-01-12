<!DOCTYPE html>
<!--Start HTML-->
<html lang="en">
<head>
    
<!--Open Meta Tags-->
    
<?php

if(title(2) == ''){

    $query = 'SELECT * FROM `page` WHERE `Title` LIKE "Home"';
    $block = 'metaScript2';

}else if(links() == ROOT.'News-Post-'.title(2)){
    
    $query = 'SELECT * FROM `post` WHERE `Id` LIKE "'.title(2).'"';
    $block = 'metaScript';
    
}elseif(links() == ROOT.'Gallery-'.title(2)){
    
    $query = 'SELECT * FROM `gallery` WHERE `Gallery` LIKE "'.title(2).'"';
    $block = 'metaScript';
    
}else{

    $query = 'SELECT * FROM `page` WHERE `Title` LIKE "'.title(2).'"';
    $block = 'metaScript2';

}    

$metaScript = new model();
$metaScript->query($query, $block);

?>    
<meta charset="UTF-8">
<meta name=viewport content="width=device-width, initial-scale=1">

<?php 

    //Auto logout script time out 1hr 30min
    global $destroy;
    global $sName;
    $sessKey = md5($_SERVER['SERVER_ADDR'].' - '.$sName.'');
    if(isset($_SESSION[''.$sessKey.''])){
        echo $destroy;
        global $inline;
        $inline = ' class="tp edit"';
    };
?>        
    
<?php if(title() == 'dashboard' || title() == 'pages'): ?>
   
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="-1">
    
<?php endif; ?>    
<!--Close Meta Tags-->  

   
<?php if(file_exists('images/icon.ico') ): ?>   
    <!-- Open favicon -->
        <link rel="SHORTCUT ICON" href="<?php //echo ROOT; ?>images/files/icon.ico">
    <!-- ./Close favicon -->   
<?php endif; ?>
   
   
<!-- Prefetched assets -->
        <link rel="dns-prefetch" href="<?php echo ROOT; ?>" >

<?php if( file_exists('libraries/css/themeParks-styles.css') ): ?>
        <link rel="preload" href="libraries/css/themeParks-styles.css" as="style">
<?php endif; ?>

<?php if( file_exists('libraries/js/themeParks-Scripts.js') ): ?>
        <link rel="preload" href="libraries/js/themeParks-Scripts.js" as="script">
<?php endif; ?>
<!-- ./Prefetched assets -->


<!--Open Styles code-->
    
    <style type="text/css">html{-webkit-animation:fadein .5s;-moz-animation:fadein .5s;-ms-animation:fadein .5s;-o-animation:fadein .5s;animation:fadein .5s}@keyframes fadein{from{opacity:0}to{opacity:1}}@-moz-keyframes fadein{from{opacity:0}to{opacity:1}}@-webkit-keyframes fadein{from{opacity:0}to{opacity:1}}@-ms-keyframes fadein{from{opacity:0}to{opacity:1}}@-o-keyframes fadein{from{opacity:0}to{opacity:1}} #simplemodal-overlay {background-color:#000;}#simplemodal-container {background-color:#333; border:8px solid #444; padding:12px;}.edit[contenteditable=true] { border: 1px dotted grey; }.edit[contenteditable=true]:focus { border: none!important; }.cke_dialog{border: 1px solid grey;box-shadow: 2px 2px 10px;}.cke_button_label.cke_button__inlinesave_label {display: inline;}.cke_button__btgrid_icon {background-position: 0 !important;}
        <?php  global $style; if(isset($style)){ echo $style; }else{ $style == false; }; ?>   
    </style>

<!-- ./Close Styles -->
   
   
<!-- Open IE Fix -->

<!--[if IE]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->


<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

<!--[if IE]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<script>alert("You are using an oudated  version of Internet Explorer. Please update to Microsoft Edge or use Firefox/ Google Chrome.");</script>
<![endif]-->

<!-- ./Close IE Fix -->
   
    <?php tpCompile('styles'); ?>
    
</head>

    <?php tpInc('header'); ?>

