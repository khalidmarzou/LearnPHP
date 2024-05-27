<?php

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
        if ($db -> execute()) {
            header('Location: /dashboard');
            exit();
        }
    }