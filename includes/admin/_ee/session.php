<?php 

require_once '../../db.php';
require_once '../../settings.php';

global $sName;

//For secure login
$sessKey = md5($_SERVER['SERVER_ADDR'].' - '.$sName.'');
session_start(); 
echo $_SESSION["{$sessKey}"];

