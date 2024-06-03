<?php
    
    $uri = parse_url($_SERVER["REQUEST_URI"])["path"];

    $routes = [

        "/" => "controllers/conixEmp.php",

        "/sinscrire" => "controllers/sinscrire.php",

        "/logout" => "controllers/logout.php",

        "/listIns" => "controllers/listIns.php",

        "/afficher" => "controllers/afficher.php",
        
    ];

    if(array_key_exists($uri, $routes)) {

        require $routes[$uri];

    }