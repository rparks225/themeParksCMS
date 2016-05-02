<?php

require_once 'db.php';

if($mysqli->connect_errno){
	
	$mysqli->close();    
    echo 'You are not connect';
    $message = 'Please fill out the form below to connect';
    
    if(isset($_GET['connect'])){
    echo '<!DOCTYPE html>
        <html lang="">
        <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Starter Template for Bootstrap 3.3.6</title>
            <link rel="shortcut icon" href="">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
            <style>body{padding-top:50px;}.starter-template{padding:40px 15px;text-align:center;}</style>

            <!--[if IE]>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
            <![endif]-->
            </head>

            <body>
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
            <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Welcome to themeParks CMS</a>
            </div>

            
            </div>
            </nav>

            <div class="container">
            <div class="starter-template">
            <h1>'.$message.'</h1>
<br><hr><br>

<div class="col-md-offset-4 col-md-4">
    <form method="post" action="">

        <div class="form-group">
            <label for="dbHost">Database Host</label><br>
            <input class="form-control" name="dbHost" id="dbHost" value="" />
        </div>

        <div class="form-group">
            <label for="dbUser">User Name</label><br>
            <input class="form-control" name="dbUser" id="dbUser" value="" />
        </div>

        <div class="form-group">
            <label for="dbPass">Password</label><br>
            <input class="form-control" name="dbPass" id="dbPass" value="" />
        </div>

        <div class="form-group">
            <label for="dbName">Database Name</label><br>
            <input class="form-control" name="dbName" id="dbName" value="" />
        </div>


        <input type="submit" class="btn btn-primary" name="config" />

    </form>
</div>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
';
    };
    
    if(isset($_REQUEST['dbHost'])){
    
        $tpconfig = fopen('includes/db.php','w+');
    
        $text = '<?php
        error_reporting(E_ERROR | E_WARNING | E_PARSE);
        ini_set("display_errors", 0);

        // Main Connection
        $db_host = "'.$_REQUEST['dbHost'].'";
        $db_user = "'.$_REQUEST['dbUser'].'";
        $db_pass = "'.$_REQUEST['dbPass'].'";
        $db_name = "'.$_REQUEST['dbName'].'";
        $mysqli = new mysqli($db_host,$db_user,$db_pass,$db_name);
        
        ';
        
            fwrite($tpconfig,$text);
            fclose($tpconfig);
        echo '<script>location.href = "http://localhost/dankVision/home"</script>';
            
            }

    
	}else{
	
	require_once 'apps/cms/model/cms_model.php';	
	require_once 'apps/cms/model/delete_model.php';
	require_once 'apps/cms/model/update_model.php';	
	
		}
		