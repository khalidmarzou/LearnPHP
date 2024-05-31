<?php

    $host = "localhost";
    $dbName = "gestion_hotels";
    $user = "root";
    $pwd = "khalid0000";

    $options = [
        PDO::ATTR_PERSISTENT => true, // Persistent connections are not closed when the script ends
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION // Throw exceptions on errors
    ];


    try {

        $pdo = new PDO('mysql:host=' . $host . ';dbname=' . $dbName , $user, $pwd, $options);

    } catch (PDOException $e) {

        echo "failed to connect to data base gestion_hotels". $e->getMessage();
        exit();

    }