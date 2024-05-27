<?php
    session_start();
    if (isset($_SESSION["login"])){
        require_once dirname(__DIR__) . "/database/database.php";
        $db = new Database();
        $db -> query("SELECT nom, prenom FROM compteAdministrateur WHERE loginAdmin = :id");
        $db -> bind(':id', $_SESSION['login']);
        $admin = $db -> single();
        $db -> query('SELECT * FROM stagiaire');
        $stagiaires = $db -> resultSet();
        $message = $_SESSION['message'];
        $color = $_SESSION['color'];
        require dirname(__DIR__) . '/views/espacePrivee.view.php';
        exit();
    }else{
        header('Location: /');
        exit();
    }