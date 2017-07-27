<?php
// +----------------------------------------------------------------------+
// | editEase 1.5ish - ok I give up on versioning 						  |
// | $date:  03 November 2009                                             |
// +----------------------------------------------------------------------+
// | By Stephen Neate (http://code.google.com/p/editease/)                |
// | Copyright (c) 2007/2009 Stephen Neate                                |
// | Licensed under the MIT License:                                      |
// | -- http://www.opensource.org/licenses/mit-license.php                |
// +----------------------------------------------------------------------+
// | editEase REQUIREMENTS (TESTED WITH)                                  |
// +----------------------------------------------------------------------+
// | PHP  (5.1.2 - 5.2+)                                                  /
// | Apache (1.3.7 - 1.3.9, 2.2+)                                         /
// | jQuery (1.2.6+)    *required                                         /
// +----------------------------------------------------------------------+

require_once '../../includes/db.php';
require_once '../../includes/settings.php';

global $cmsPath;
global $salt;

define('newPath',''.$cmsPath.'');

if( !isset($_SESSION) ){ 
	session_start(); // required for file system
}
/* Valid Login Data - username / password for each array item */
$userNames =  array('demo'=>''.$salt.'fe01ce2a7fbac8fafaed7c982a04e229','Rob'=>''.$salt.'fe01ce2a7fbac8fafaed7c982a04e229');

/* Pages that have edit areas on them - page name then a pipe | then page url*/
$pages =  array();

/* main JS path - without trailing slash */
$eeJs = ''.newPath.'apps/_ee';

/* Path to images/documents storage - WITH trailing slash */
$eeIpath = ''.newPath.'apps/_ee/files/';

/* File extension for includes - you can use .php, .inc, .txt etc, all editEase includes must be the same extension */
$eeExtn = '.php';

/* Path to page content areas which can be written to by PHP (ie. CHMOD 757 or 777) - without trailing slash*/
$eeCpath = ''.newPath.'apps/_ee/inc';


/* Config for local "FILE MANAGER" */
$fileSystem = 1; 							// Show local file system - true = 1, false = 0 */
$serverPath = $_SERVER['DOCUMENT_ROOT']; 	// true path  - without trailing slash
$filePages = $eeJs.'/_fslib'; 				// location of file system pages - without trailing slash
