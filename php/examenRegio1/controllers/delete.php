<?php
    session_start();
    if (isset($_SESSION["login"])){
    if($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['id'])){
        $id = $_GET['id'];
        require dirname(__DIR__) . '/database/database.php';
        $db = new Database();
        $db -> query('DELETE FROM stagiaire WHERE idStagiaire = :id');
        $db -> bind(':id', $id);
        if ($db -> execute()){
            $_SESSION['message'] = "You're deleted One Intern";
            $_SESSION["color"] = "red";
            header('Location: /dashboard');
            exit();
        }
    }
    }else{
        header('Location: /');
        exit();
    }