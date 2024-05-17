<?php
    if ($_SERVER["REQUEST_METHOD"] == "GET" && $_GET['id']) {
        $id_delete = $_GET['id'];
        try { 
            $query = "DELETE FROM Blog WHERE id = :id";
            $statement = $pdo->prepare($query);
            $statement -> execute([
                ':id' => $id_delete,
            ]);
        }
        catch(Exception $e){
            die('Error in delete data' . $e -> getMessage());
        }
    header("Location: tpBlog.php");
    exit();
    }