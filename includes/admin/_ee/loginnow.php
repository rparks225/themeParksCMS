<?php

require_once '../../db.php';
require_once '../../settings.php';

global $sName;
global $userNames;

//For secure login
session_start();
$sessKey = md5($_SERVER['SERVER_ADDR'].' - '.$sName.'');
include("config.php");

if( isset($userNames) ){
    /*Check array against user and pass combinations*/
	if($userNames[$_GET['username']]===$_GET['password']&&$_GET['username']&$_GET['password']){
        $_SESSION["{$sessKey}"] = 'eeloggedin';
        $_SESSION['user'] = $_GET['username'];
		echo 'success';
	}else{
		echo 'fail';
    }
}
