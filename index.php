<?php
ob_start('ob_gzhandler');

header("Content-Type: text/html; charset=utf-8");
header("Cache-Control: max-age=2592000");
header("Expires: " . gmdate("D, d M Y H:i:s", time() + 300) . " GMT");

include 'includes/functions.php';

//HMTL Compress
compress('true');
showErrors('off');

//Calls app
require_once 'apps/cms/cms_app.php';
$cms = new cms();
$cms->spa();

ob_end_flush();
