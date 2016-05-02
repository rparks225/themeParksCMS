<!DOCTYPE html>
<html>
<head>
    
<!--Open Meta Tags-->    

<?php
$query = 'SELECT * FROM `page` WHERE `Title` LIKE "'.title().'"';
$block = 'metaScript';
$metaScript = new model();
$metaScript->query($query, $block);
?>
    
<meta name=viewport content="width=device-width, initial-scale=1">   
    
<?php 

    if(title() == 'dashboard' || title() == 'pages'){
    echo '<meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="-1">';
    }    
?>    
<!--Close Meta Tags-->  


<!--Open Styles code-->
<?php tpCompile('styles'); ?>
<!--Close Styles-->


<!--Custom Styles-->

<style type="text/css">
      #simplemodal-overlay {background-color:#000;}#simplemodal-container {background-color:#333; border:8px solid #444; padding:12px;}body{padding-bottom:0;font-family:sans-serif;background:#fbf2d9}.fancy{font-family:orbitron}.wrapper{width:100%;height:100%}nav.navbar-inverse{background:rgba(55,19,95,.72);color:#fff;z-index:10000;border-radius:0;border-left:0;border-right:0;padding:0 20px}nav.navbar-inverse .navbar-nav li a{color:#fff;font-family:orbitron;letter-spacing:5px}#mobile{left:-30px;text-align:center;position:relative}div#slider{top:-20px;position:relative;margin-bottom:150px}#slider .col-md-12{padding:0}header{background:url(images/bg/bg1.jpg);background-size:cover;overflow:hidden;height:150%;width:100%;position:fixed;z-index:-1}header .overlay{background:rgba(0,0,0,.43);width:100%;height:150%;position:absolute}div.top .col-md-12{min-height:300px;position:relative;z-index:2;background:#fff;margin-top:50px;margin-bottom:-50px;text-align:center}div#mainTits{margin-top:35px;margin-bottom:265px;font-family:orbitron;text-align:center;background:#fff;color:#37135f;padding-bottom:5px}
      
      <?php global $style; ?>
      <?php if(isset($style)){ echo $style; }else{ $style == false; }; ?>
  </style>
  
<!--Custom Styles-->


<!--Open Styles-->

<?php 
    
    if(theme() == 'default'){
        
    echo '<link href="'.ROOT.'libraries/css/car.css" type="text/css" rel="stylesheet" />';
    };
?>    
    <link rel="SHORTCUT ICON" href="<?php echo ROOT; ?>images/icon.ico">
    
<!--Close Styles--> 


<!--Open IE Fix-->

<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->


<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<!--Close IE Fix-->

</head>

<?php tpInc('header'); ?>

