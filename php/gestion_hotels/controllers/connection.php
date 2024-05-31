<?php
    session_start();
    $errorMsg = '';
    require dirname(__DIR__) . "/database/db.php";

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $login = $_POST['login'];
        $motPasse = $_POST['motPasse'];

        $statement = $pdo -> prepare('SELECT * FROM client WHERE login = :login AND motPasse = :motPasse');
        $statement -> execute([
            ':login'=> $login,
            ':motPasse' => $motPasse,
        ]);
        $client = $statement -> fetch(PDO::FETCH_OBJ);
        if(property_exists($client, 'motPasse')){
            unset($client -> motPasse);
        }

        if ($client != false){
            $_SESSION['client'] = $client;
            header('Location: /reservationEncours');
            exit();
        } else {
            $errorMsg = 'Login ou motd de passe est incorrect';
        }
    }

    require dirname(__DIR__) . "/views/connection.view.php";