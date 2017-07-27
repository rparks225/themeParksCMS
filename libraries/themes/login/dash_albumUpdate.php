<?php
//Globals for Site
global $dbName;
$site = "{$dbName}";


//Calls the template file
$query = 'SELECT * FROM Gallery WHERE Id LIKE '.title(2).'';
$block = 'singleAlbum';
$tpAlbum = new admin_model();
$tpAlbum->query($query,$block);


//Sets whats going to be update in DB
$location = 'Gallery';
$method = 'updated';


//Only fires if submit button value matches
if(isset($_POST[''.$method.'']) && $_POST[''.$method.''] == 'Update'){
    
    $id = addslashes($_POST['id']);
    $galName = addslashes($_POST['galName']);
    $galTitle = addslashes($_POST['galTitle']);
    $galCover = addslashes($_POST['galCover']);
    $galOrder = addslashes($_POST['galOrder']);

    $query = 'UPDATE `'.$location.'` SET `Gallery` = "'.$galName.'", `Cover` = "'.$galCover.'", `Title` = "'.$galTitle.'", `Order` = "'.$galOrder.'" WHERE `Gallery`.`Id` = "'.$id.'"';
    
}


//Updates db info
$albUpdate = new update();
$albUpdate->uped($location,$query,$method);

?>