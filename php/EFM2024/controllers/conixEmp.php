<?php
    session_start();
    require_once dirname(__DIR__) . "/database/connection.php";

    if($_SERVER["REQUEST_METHOD"] == 'POST'){
        $user = $_POST['user'];
        $pwd = $_POST['password'];

        $query = 'SELECT * FROM Employe WHERE user = :user AND pwd = :pwd;';
        $stmt = $pdo -> prepare($query);
        $stmt -> execute([
            ':user' => $user,
            ':pwd' => $pwd,
        ]);
        $userInfo = $stmt -> fetch(PDO::FETCH_OBJ);
        
        if($userInfo == false) {
            header('Location: /');
            exit();
        } else {
            if(property_exists($userInfo, "pwd")){
                unset($userInfo -> pwd);
            }
            $_SESSION['userInfo'] = $userInfo;
            header("Location: /sinscrire");
            exit();
        }
    }

    require_once dirname(__DIR__) . "/views/conixEmp.view.php";