<?php 
    $host      = "us-cdbr-east-06.cleardb.net";
    $username  = "bb32f4aa6815a3";
    $passwrod  = "1f9adf40";
    $dbName    = "heroku_2fa1556d4ea238e";

    $con = mysqli_connect($host,$username,$passwrod,$dbName);
    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }
?>