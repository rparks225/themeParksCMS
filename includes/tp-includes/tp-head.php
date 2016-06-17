<!DOCTYPE html>
<html>
<head>
    
<!--Open Meta Tags-->    

<?php
$query = 'SELECT * FROM `page` WHERE `Title` LIKE "'.title(2).'"';
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
      #simplemodal-overlay {background-color:#000;}#simplemodal-container {background-color:#333; border:8px solid #444; padding:12px;}
      
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

