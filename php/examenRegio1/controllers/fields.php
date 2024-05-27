<?php

    require_once dirname(__DIR__) . "/database/database.php";
    $db  = new Database();
    $db->query("SELECT * FROM filiere");
    $filieres = $db -> resultSet();