<?php
    session_start();
    $client = $_SESSION['client'];
    if (!empty($client)){
        require dirname(__DIR__) . '/database/db.php';
        $statement = $pdo -> prepare('SELECT * FROM reservation NATURAL JOIN client NATURAL JOIN hotel NATURAL JOIN typehotel WHERE client.cin = :cin');
        $statement -> execute([
            ':cin'=> $client -> cin,
        ]);
        $allInfos = $statement -> fetchAll(PDO::FETCH_OBJ);
        foreach ($allInfos as $info){
            if(property_exists($info, "motPasse")){
                unset($info -> motPasse);
            }
        }

        require dirname(__DIR__) . "/views/reservationEncours.view.php";
    } else {
        header("Location: /");
        exit();
    }