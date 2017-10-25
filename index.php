<?php
ob_start('ob_gzhandler');

header("Content-Type: text/html; charset=utf-8");
header("Cache-Control: max-age=25920000000");
header("Expires: " . gmdate("D, d M Y H:i:s", time() + 300) . " GMT");
ini_set('session.cookie_httponly', 1);
ini_set('session.use_only_cookies', 1);
ini_set('session.cookie_secure', 1);
header('X-XSS-Protection: 1; mode=block');
header('X-Frame-Options: deny');
header('X-Content-Type-Options: nosniff');

include 'includes/functions.php';

//HMTL Compress - Show Errors and always delete cookies
compress('true');
showErrors('off');
delCook();

//Calls app
require_once 'apps/cms/cms_app.php';
$cms = new cms();
$cms->spa();

ob_end_flush();