<!DOCTYPE html>
<html lang="">
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
    
    <?php tpCompile('styles'); ?>
    <link href="libraries/themes/login/css/customStyles.css" type="text/css" rel="stylesheet" />
    <style>body{padding-top:50px;}</style>

    <!--[if IE]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<!--Open Custom Styles-->

  <style type="text/css">
			#simplemodal-overlay {background-color:#000;}
			#simplemodal-container {background-color:#333; border:8px solid #444; padding:12px;}
  </style>
  
<!--Close Custom Styles-->    
    
</head>

<body>

    <div class="wrapper">
        
        <div class="wrap col-md-2 col-sm-2 col-xs-3">

            <div id="sideBar">
                        <br><br>
                <ul style="text-align:left;list-style:none;">

                    <li>
                        <a href="<?php echo ROOT; ?>tp-Dashboard">
                        <span class="glyphicon glyphicon-dashboard">
                        </span>&nbsp;&nbsp;
                        <b>Dashboard</b></a>
                    </li>
                    <li>
                        <a href="<?php echo ROOT; ?>tp-Pages">
                        <span class="glyphicon glyphicon-file">
                        </span>&nbsp;&nbsp;
                        <b>Edit Page</b></a>
                    </li>
                    <li>
                        <a href="<?php echo ROOT; ?>tp-Image">
                        <span class="glyphicon glyphicon-picture">
                        </span>&nbsp;&nbsp;
                        <b>Images</b></a>
                    </li>
                    <li>
                        <a href="<?php echo ROOT; ?>tp-Post">
                        <span class="glyphicon glyphicon-inbox">
                        </span>&nbsp;&nbsp;
                        <b>Posts</b></a>
                    </li>
                    <li>
                        <a href="<?php echo ROOT; ?>tp-Settings">
                        <span class="glyphicon glyphicon-tasks">
                        </span>&nbsp;&nbsp;
                        <b>Settings</b></a>
                    </li>
                    <li>
                        <a href="<?php echo ROOT; ?>tp-Products">
                        <span class="glyphicon glyphicon-shopping-cart">
                        </span>&nbsp;&nbsp;
                        <b>Add Product</b></a>
                    </li>
                    <li>
                        <a href="<?php echo ROOT; ?>Home">
                        <span class="glyphicon glyphicon-globe">
                        </span>&nbsp;&nbsp;
                        <b>View Site</b></a>
                    </li>
                    <li class="gone">
                        <span class="glyphicon glyphicon-remove">
                        </span>&nbsp;&nbsp;
                        <b>Hide</b></li>
                </ul>

            </div>

        </div>    

        <div class="container col-md-10 col-sm-10 col-xs-9">

            <div class="row">

                <div style="padding:20px;">

                        <br>