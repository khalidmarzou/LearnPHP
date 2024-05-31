<?php
    session_start();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $login = $_POST['login'];
        $password = $_POST['password'];
        if (empty($login) || empty($password)) {
            $errorMessage = "Authentication data is required.";
        }else{
            require dirname(__DIR__) . "/database/database.php";
            $db = new Database();
            $db -> query("SELECT loginAdmin , motPasse FROM compteAdministrateur WHERE loginAdmin = :id");
            $db -> bind(":id", $login);
            $db -> execute();
            if ($db -> rowCount() == 0){
                $errorMessage = "Authentication data is incorrect";
            }else{
                require dirname(__DIR__) . '/cryptage/cryptage.php';
                $heshedPassword = $db -> single() -> motPasse;
                $passwordValid = verify_crypting($password, $heshedPassword);
                if($passwordValid){
                    $_SESSION['login'] = $login;
                    $_SESSION['message'] = "";
                    $_SESSION['color'] = "";
                    header('Location: /dashboard');
                    exit();
                }else{
                    $errorMessage = "Authentication data is incorrect";
                }
            }
        }
    }

    require dirname(__DIR__) . '/views/index.view.php';
    exit();