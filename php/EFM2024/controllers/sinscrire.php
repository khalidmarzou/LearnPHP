<?php

    session_start();
    require_once dirname(__DIR__) . "/database/connection.php";
    if(!isset($_SESSION['userInfo'])) {
        header("Location: /");
        exit();
    } else {
        $userInfo = $_SESSION['userInfo'];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $codeEmp = $userInfo -> codeEmp;
            $np = $_POST['np'];
            $dateVoy = $_POST['dateVoyage'];
            $villeD = $_POST['villeD'];
            $villeA = $_POST['villeA'];

            // Lets get code Voyage :
            
            $query = 'SELECT codeVoyage FROM Voyage WHERE codeDesc = (SELECT codeDesc FROM DescriptionVoyage WHERE villeD = :villeD AND villeA = :villeA)';
            $stmt = $pdo -> prepare($query);
            $stmt -> execute([
                ':villeD'=> $villeD,
                ':villeA' => $villeA,
            ]);
            $codeVoyage = $stmt -> fetch(PDO::FETCH_OBJ) -> codeVoyage;

            if ($codeVoyage != false) {
                try {
                    $query = 'INSERT INTO `Inscription`(`codeEmp`, `codeVoyage`, `nbrePers`, `dateVoy`) VALUES (:codeEmp, :codeVoyage, :nbrePers, :dateVoy)';
                    $stmt = $pdo -> prepare($query);
                    $stmt -> execute([
                        ':codeEmp' => $codeEmp,
                        'nbrePers'=> $np,
                        ':dateVoy'=> $dateVoy,
                        ':codeVoyage'=> $codeVoyage,
                    ]);
                    header('Location: /lisIns');
                    exit();
                } catch (Exception $e) {
                    echo 'les infos Not saisis correctement'. $e -> getMessage();
                    die();
                }

            } else {
                header('Location: /sinscrire');
                exit();
            }

        } else {
            $query = 'SELECT * FROM DescriptionVoyage';
            $stmt = $pdo -> prepare($query);
            $stmt -> execute();
            $villes = $stmt -> fetchAll(PDO::FETCH_OBJ);

            require_once dirname(__DIR__) . "/views/sinscrire.view.php";
        }
        
    }