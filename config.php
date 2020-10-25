<?php

    $dbServer = "localhost";
    $dbUsername = "root";
    $dbPassword = "";

    $dbConn = new mysqli($dbServer, $dbUsername, $dbPassword);

    if($dbConn->connect_error)
    {
        die("Could not connect" . $dbConn->connect_error);
    }

?>
