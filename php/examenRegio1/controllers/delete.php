<?php

    if($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['id'])){
        $id = $_GET['id'];
        require dirname(__DIR__) . '/database/database.php';
        $db = new Database();
        $db -> query('DELETE FROM stagiaire WHERE idStagiaire = :id');
        $db -> bind(':id', $id);
        if ($db -> execute()){
            header('Location: /dashboard');
            exit();
        }
    }