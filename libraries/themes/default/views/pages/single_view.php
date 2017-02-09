
<?php

$query = 'SELECT * FROM page WHERE Title LIKE \''.title(2).'\' ';
$block = 'single';

$page = new model();
$page->pages($query, $block);	

?>    