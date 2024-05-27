<?php

    $uri = parse_url($_SERVER["REQUEST_URI"])["path"];
    
    $routes = [
        "/" => "controllers/authentication.php",
        "/dashboard" => "controllers/espacePrivee.php",
        "/logout" => "controllers/logout.php",
        "/dashboard/add"=> "controllers/addIntern.php",
        "/dashboard/edit"=> "controllers/edit.php",
        "/dashboard/delete"=> "controllers/delete.php",
    ];

    if (array_key_exists($uri, $routes)) {

        require $routes[$uri];
        die();
    } else {

        require "views/404.view.php";
        die();
    }