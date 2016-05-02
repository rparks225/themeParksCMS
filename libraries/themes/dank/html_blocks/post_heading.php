<h1 style="text-align:left;" class="fancy"> <? echo $title; ?></h1>
<?php 
    //Breadcrumb Trail
    $trail = array('News-All' => 'All Posts','News-Post-'.$id.'' => $title);
    breadcrumbs($trail); 
?>