<?php
    session_start();
    if (isset($_SESSION["login"])){
        require dirname(__DIR__) . '/database/database.php';
        $db = new Database();
        if($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['id'])){
            $id = $_GET['id'];
            $db -> query('SELECT * FROM stagiaire WHERE idStagiaire = :id');
            $db -> bind(':id', $id);
            $stagiaire = $db -> single();
            $nom = $stagiaire -> nom;
            $prenom = $stagiaire -> prenom;
            $dateNaissance = $stagiaire -> dateNaissance;
            $filiereSelected = $stagiaire -> idFiliere;
            require dirname(__DIR__) . '/views/edit.view.php';
            exit();
        }
    
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['id'];
            $nom = $_POST['family_name'];
            $prenom = $_POST['first_name'];
            $dateNaissance = $_POST['birthday'];
            $filiere = $_POST['field'];

            $db -> query('UPDATE stagiaire SET nom = :nom, prenom = :prenom, dateNaissance = :dateN, idFiliere = :idF WHERE idStagiaire = :id;');
            $db -> bind(':id', $id);
            $db -> bind(':nom',$nom);
            $db -> bind(':prenom',$prenom);
            $db -> bind(':dateN',$dateNaissance);
            $db -> bind(':idF',$filiere);

            if (!empty($_FILES['profile_picture']['name']) && $_FILES['profile_picture']['error'] == UPLOAD_ERR_OK) {
                $profile_pic = $_FILES['profile_picture']['name'];
                $profile_path_temp = $_FILES['profile_picture']['tmp_name'];
                $profile_target = dirname(__DIR__) . '/profiles/' . basename($profile_pic);
                move_uploaded_file($profile_path_temp, $profile_target);
                $db -> query('UPDATE stagiaire SET photoProfil = :photo  WHERE idStagiaire = :id;');
                $db -> bind(':id', $id);
                $db -> bind(':photo', '/profiles/' . basename($profile_target));
            }

            if ($db -> execute()) {
                $_SESSION['message'] = "You're edited information for $nom";
                $_SESSION["color"] = "orange";
                header('Location: /dashboard');
                exit();
            }
        }
    }else{
        header('Location: /');
        exit();
    }