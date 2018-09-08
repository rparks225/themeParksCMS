<?php
/*==================================================
    These arent the droids you are looking for...
==================================================*/
?>
<style>body{background:black;}</style>
<body>

    <p style="text-align:center;margin-top:100px;color:white;">These arent the droids you are looking for...</p>

</body>

<?php

//sleep for 5 seconds
sleep(5);

//start again
header('Location: '.$_SERVER['HTTP_HOST'].'');


?>