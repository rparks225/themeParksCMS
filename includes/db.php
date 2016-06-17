<?php
        error_reporting(E_ERROR | E_WARNING | E_PARSE);
        ini_set("display_errors", 0);

        // Main Connection
        $db_host = "localhost";
        $db_user = "root";
        $db_pass = "";
        $db_name = "baneCare";
        $mysqli = new mysqli($db_host,$db_user,$db_pass,$db_name);
        
        