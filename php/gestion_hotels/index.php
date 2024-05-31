<?php
    
    $uri = parse_url($_SERVER["REQUEST_URI"])["path"];

    $routes = [

        "/"=> "controllers/listerH.php",
        "/reservation" => "controllers/listeReservation.php",
        "/connection"=> "controllers/connection.php",
        "/reservationEncours"=> "controllers/reservationEncours.php",
        "/deconnection"=> "controllers/deconnection.php",
        
    ];

    if(array_key_exists($uri, $routes)) {

        require $routes[$uri];

    } else {

        require "views/page404.php";

        die();
    }