<?php 

require_once '../../includes/db.php';
require_once '../../includes/settings.php';

global $sName;

//For secure login
$sessKey = md5($_SERVER['SERVER_ADDR'].' - '.$sName.'');
session_start(); 
echo $_SESSION[''.$sessKey.''];
