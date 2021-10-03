<?php
#remove the below lines to connect to your own sql database
    $dbname = "epiz_29877799_quiz_master";
    $dbpassword = "oPaemsEhyCAZp3";
    $dbusername = "epiz_29877799";
    $dbhost = "sql103.epizy.com";
    #$dbhost = "localhost";
    #$dbusername = "root";
    #$dbpassword = "";
    #$dbname = "quiz_master";

    if (!$con = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname)) {
        die("Failed to connect.");
    }
?>