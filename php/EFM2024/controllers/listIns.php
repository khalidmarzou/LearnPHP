<?php
   
    session_start();
    require_once dirname(__DIR__) . "/database/connection.php";
    if(!isset($_SESSION['userInfo'])) {
        header("Location: /");
        exit();
    } else {
        $userInfo = $_SESSION['userInfo'];

        $query = 'SELECT * FROM Voyage NATURAL JOIN Inscription WHERE codeEmp = :codeEmp;';
        $stmt = $pdo -> prepare($query);
        $stmt -> execute([
            ':codeEmp'=> $userInfo -> codeEmp,
        ]);

        $voyages = $stmt -> fetchAll(PDO::FETCH_OBJ);


        require_once dirname(__DIR__) . "/views/listIns.view.php";
    }
