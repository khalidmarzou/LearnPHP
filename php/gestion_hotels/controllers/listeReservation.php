<?php
    require dirname(__DIR__) . "/database/db.php";

    if(!empty($_GET["type"])){
        $type = $_GET["type"];
        $statement = $pdo -> prepare("SELECT * FROM hotel NATURAL JOIN typehotel WHERE id_type = :id");
        $statement -> execute([
            ':id'=> $type,
        ]);
        $hotels = $statement -> fetchAll(PDO::FETCH_ASSOC);
    } else {
        $statement = $pdo -> prepare("SELECT * FROM hotel NATURAL JOIN typehotel");
        $statement -> execute();
        $hotels = $statement -> fetchAll(PDO::FETCH_ASSOC);
    }

    $statement = $pdo -> prepare('SELECT * FROM typehotel');
    $statement -> execute();
    $types = $statement -> fetchAll(PDO::FETCH_ASSOC);

    require dirname(__DIR__) . '/views/listeReservation.view.php';