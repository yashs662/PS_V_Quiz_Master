<?php
    $dbhost = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "quiz_master";

    if (!$con = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname)) {
        die("Failed to connect.");
    }
?>