<?php

    require dirname(__DIR__) . '/database/db.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $titre = $_POST["titre"];
        $prix = $_POST["prix"];
        $nbplaces = $_POST["nbplaces"];
        $adresse = $_POST["adresse"];
        $type = $_POST["type"];

        $statement = $pdo -> prepare('INSERT INTO hotel(titre, prix_par_nuit, nombre_de_places, adresse, id_type) VALUES (:titre, :prix, :nb, :adresse, :typeID)');
        $statement -> execute([
            ':titre'=> $titre,
            ':prix'=> $prix,
            ':nb'=> $nbplaces,
            ':adresse'=> $adresse,
            ':typeID'=> $type
        ]);

        header('Location: /');
        exit();
    }
    $statement = $pdo -> prepare('SELECT * FROM typehotel');
    $statement -> execute();
    $types = $statement -> fetchAll(PDO::FETCH_ASSOC);

    require dirname(__DIR__) . '/views/ajouterH.view.php';