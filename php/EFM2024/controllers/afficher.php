<?php


    session_start();
    require_once dirname(__DIR__) . "/database/connection.php";

    if(!isset($_SESSION['userInfo'])) {
        header("Location: /");
        exit();
    } else {
        if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['codeInsc'])) {
            $userInfo = $_SESSION['userInfo'];
            $codeInsc = $_GET['codeInsc'];

            $query = 'SELECT * FROM Voyage NATURAL JOIN Inscription NATURAL JOIN DescriptionVoyage WHERE codeInsc = :codeInsc;';
            $stmt = $pdo -> prepare($query);
            $stmt -> execute([
                ':codeInsc'=> $codeInsc,
            ]);

            $voyage = $stmt -> fetch(PDO::FETCH_OBJ);



            require_once dirname(__DIR__) . "/views/afficher.view.php";
        }
    }