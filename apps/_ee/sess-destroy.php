<?php
// Initialize the session.
// If you are using session_name("something"), don't forget it now!

require_once '../../includes/db.php';
require_once '../../includes/settings.php';

global $sName;

//For secure login
$sessKey = md5($_SERVER['SERVER_ADDR'].' - '.$sName.'');

session_start();

// Unset all of the session variables.
$_SESSION = array();

// If it's desired to kill the session, also delete the session cookie.
// Note: This will destroy the session, and not just the session data!
if (isset($_COOKIE[session_name(''.$sessKey.'')])) {
    setcookie(session_name(''.$sessKey.''), '', time()-42000, '/');
}

// Finally, destroy the session.
session_destroy();
