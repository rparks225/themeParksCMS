<?php

require_once '../../includes/db.php';
require_once '../../includes/settings.php';

global $sName;

//For secure login
$sessKey = md5($_SERVER['SERVER_ADDR'].' - '.$sName.'');
session_start();

include("config.php");

if(isset($userNames)){
	
	if($userNames[$_GET['username']]===$_GET['password']&&$_GET['username']&$_GET['password']){
		$_SESSION[''.$sessKey.''] = 'eeloggedin';
        $_SESSION['user'] = $_GET['username'];
		echo 'success';
	}else{
		echo 'fail';
}


/*Check array against user and pass combinations*/

}
