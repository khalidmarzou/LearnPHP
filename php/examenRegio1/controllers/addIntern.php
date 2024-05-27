<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nom = $_POST['family_name'];
        $prenom = $_POST['first_name'];
        $dateNaissance = $_POST['birthday'];
        $filiere = $_POST['field'];

        require dirname(__DIR__) . '/database/database.php';
        $db = new Database();
        $db -> query('INSERT INTO stagiaire(nom, prenom, dateNaissance, idFiliere) VALUE (:nom, :prenom, :dateN, :idF)');
        $db -> bind(':nom',$nom);
        $db -> bind(':prenom',$prenom);
        $db -> bind(':dateN',$dateNaissance);
        $db -> bind(':idF',$filiere);
        if ($db -> execute()) {
            header('Location: /dashboard');
            exit();
        }
    }
    require dirname(__DIR__) . '/views/addIntern.view.php';