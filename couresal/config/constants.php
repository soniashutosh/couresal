<?php

    // Start Session
    session_start();

    // Create constant to store not repeating value
    define('SITEURL','http://localhost/couresal/');
    define('LOCALHOST','localhost');
    define('DB_USERNAME','root');
    define('DB_PASSWORD','');
    define('DB_NAME','couresal');

    // Execute Query and save data in database
    $conn = mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD) or die(mysqli_error()); // Database Connection
    $db_select = mysqli_select_db($conn,DB_NAME) or die(mysqli_error($conn)); // Selecting database

?>