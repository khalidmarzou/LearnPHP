<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nom = $_POST['family_name'];
        $prenom = $_POST['first_name'];
        $dateNaissance = $_POST['birthday'];
        $filiere = $_POST['field'];
        $profile_pic = $_FILES['profile_picture']['name'];
        $profile_path_temp = $_FILES['profile_picture']['tmp_name'];
        $profile_target = dirname(__DIR__) . '/profiles/' . basename($profile_pic);
        move_uploaded_file($profile_path_temp, $profile_target);
        require dirname(__DIR__) . '/database/database.php';
        $db = new Database();
        $db -> query('INSERT INTO stagiaire(nom, prenom, dateNaissance, photoProfil, idFiliere) VALUE (:nom, :prenom, :dateN, :photo, :idF)');
        $db -> bind(':nom',$nom);
        $db -> bind(':prenom',$prenom);
        $db -> bind(':dateN',$dateNaissance);
        $db -> bind(':photo','/profiles/' . basename($profile_pic));
        $db -> bind(':idF',$filiere);
        if ($db -> execute()) {
            session_start();
            $_SESSION['message'] = "You're add $nom with success";
            $_SESSION["color"] = "green";
            header('Location: /dashboard');
            exit();
        }
    }
    require dirname(__DIR__) . '/views/addIntern.view.php';