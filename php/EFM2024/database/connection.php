<?php

    $host = 'localhost';
    $port = '3306';
    $dbName = 'VoyagesOrganises';
    $user = 'root';
    $pwd = 'khalid0000';

    $dsn = 'mysql:host=' . $host . ';dbname=' . $dbName;
    
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ];

    try {

        $pdo = new PDO($dsn, $user, $pwd, $options);

    } catch (Exception $e) {

        echo "Error in connection with database" . $e -> getMessage();

    }