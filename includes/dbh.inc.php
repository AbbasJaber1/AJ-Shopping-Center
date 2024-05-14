<?php

    $dsn = "mysql:host=localhost;dbname=aj_shoppinp_web";
    $dbusername = "root";
    $dbpassword = "";

    // try catch is only for better optimaizition in case we go into some kind of error while accessing our database
    try {
        $pdo = new PDO($dsn ,$dbusername ,$dbpassword); //To connect to our database
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Connection failed" . $e->getMessage();   
    }

    
