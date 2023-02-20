<?php 
    define('DB_HOST', 'localhost');
    define('DB_USER','Venia');
    define('DB_PASS', 'php123456');  
    define('DB_NAME', 'php_dev');

    //create connection
    $conn = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

    if($conn -> connect_error){
        die('Connection failed' . $conn->connect_error);
    }

    // echo 'CONNECTED';