<?php
    require dirname(__DIR__) . "/database/db.php";

    $statement = $pdo -> prepare("SELECT * FROM hotel NATURAL JOIN typehotel");
    $statement -> execute();
    $hotels = $statement -> fetchAll(PDO::FETCH_ASSOC);

    require dirname(__DIR__) . "/views/listerH.view.php";