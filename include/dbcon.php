<?php 
    $host      = "us-cdbr-east-06.cleardb.net";
    $username  = "b34ebfae4a8a9e";
    $passwrod  = "bdcf40f2";
    $dbName    = "heroku_02e148eb84a4d20";

    $con = mysqli_connect($host,$username,$passwrod,$dbName);
    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }
?>