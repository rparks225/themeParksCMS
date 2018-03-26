<?php if (title(2) == ''){

            $query = 'SELECT * FROM `page` WHERE `Title` LIKE "Home"';
            $block = 'meta2';

        }elseif (links() == ROOT.'Blog/Post/'.title(2)){

            $query = 'SELECT * FROM `post` WHERE `Id` LIKE "'.title(2).'"';
            $block = 'meta';

        }elseif (links() == ROOT.'Gallery/Album/'.title(2)){

            $query = 'SELECT * FROM `gallery` WHERE `Gallery` LIKE "'.title(2).'"';
            $block = 'meta';

        }else{

            $query = 'SELECT * FROM `page` WHERE `Title` LIKE "'.title(2).'"';
            $block = 'meta2';

        }

$metaScript = new model();
$metaScript->query($query, $block);
?>