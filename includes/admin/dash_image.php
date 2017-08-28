<?php
$vars = array('id', 'sUrl',
              'dbName', 'sCaptcha', 'cmsPath',
              'eePath', 'emailHost', 'emailAuth',
              'emailUser', 'emailPass', 'emailEnc',
              'emailPort', 'emailFrom', 'emailName',
              'emailAdd', 'emailReply', 'eReplyTitle');

foreach($vars as $var){
    global $$var;
}

// Important Vars
$site = "{$dbName}"; 
$method = 'inserted';
$location = 'gallery';
$other = false;
$query = false;	

//Add New Gallery
if(isset($_POST[''.$method.''])){
    if(isset($_POST['id'])){
        $gal = addslashes($_POST['gallery']);
        $title = addslashes($_POST['title']);
        $storeFolder = $_SERVER['DOCUMENT_ROOT'].$cmsPath.'images/uploads/'.$gal.'';        
        if (!file_exists($storeFolder) && isset($gal)) {
            $old = umask(0);
            mkdir($storeFolder, 0777, true);
            umask($old);
        }
        $query = 'INSERT INTO `'.$site.'`.`'.$location.'` 
                  (`Id`, `Gallery`, `Title`) 
                  VALUES (NULL, \''.$gal.'\', \''.$title.'\')';
    }
    $addgal = new update();
    $addgal->uped($location,$query,$method);
};


//Delete Gallery Folder
if(isset($_POST['delAlb'])){
    
    $storeFolder = $_SERVER['DOCUMENT_ROOT'].$cmsPath.'images/uploads/'.$_POST['delAlb'].'';
    
    foreach (new DirectoryIterator($storeFolder) as $fileInfo) {
        if(!$fileInfo->isDot()) {
            unlink($fileInfo->getPathname());
        }
    }
    
    if(count(scandir($storeFolder)) <= 2){
        $deleted = new delete();
        $deleted->del($location,$other);
        rmdir($storeFolder);
    }
    
    if(isset($_POST['id'])){
        $gals = $_POST['delAlb'];
        $location = 'images';
        $other = array('Album',''.$gals.'');
        $eraseImg = new delete();
        $eraseImg->del($location,$other);   
    }
    
}

tpAdmin('imgMain');

?>


