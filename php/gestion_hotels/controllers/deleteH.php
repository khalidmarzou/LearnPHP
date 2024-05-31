<?php

    if(!empty($_GET['id_hotel'])){
        $id_hotel = $_GET['id_hotel'];
        require_once dirname(__DIR__) . '/database/db.php';

        $statement = $pdo -> prepare('DELETE FROM hotel WHERE id_hotel = :id');
        $statement -> execute([
            ':id'=> $id_hotel
        ]);
    }

    header('Location: /');