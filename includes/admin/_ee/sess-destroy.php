<?php
// Initialize the session.
// If you are using session_name("something"), don't forget it now!

require_once '../../db.php';
require_once '../../settings.php';

global $sName;
global $cmsPath;

//For secure login
$sessKey = md5($_SERVER['SERVER_ADDR'].' - '.$sName.'');

session_start();

// Unset all of the session variables.
$_SESSION = array();

/// If it's desired to kill the session, also delete the session cookie.
// Note: This will destroy the session, and not just the session data!
if (isset($_COOKIE[$_SESSION[''.$sessKey.'']])) {
    setcookie(session_id(''.$sessKey.''), '', time()-42000, '/');
}

echo '<script>alert("You Have Been Logged Out. Thank You For Using themeParks CMS.");</script>';
header('Location: //'.$_SERVER["HTTP_HOST"].$cmsPath.'tp-Incorrect');

// Finally, destroy the session.
session_destroy();

