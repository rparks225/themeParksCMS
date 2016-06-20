<?php
        error_reporting(E_ERROR | E_WARNING | E_PARSE);
        ini_set("display_errors", 0);

        // Main Connection
        $db_host = "localhost";
        $db_user = "root";
        $db_pass = "";
<<<<<<< HEAD
        $db_name = "themeParks";
=======
        $db_name = "themeparks";
>>>>>>> origin/master
        $mysqli = new mysqli($db_host,$db_user,$db_pass,$db_name);