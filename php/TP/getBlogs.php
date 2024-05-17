<?php
    try {
        $query = "SELECT * FROM Blog";
        $statement = $pdo->prepare($query);
        $statement -> execute();
        $blogs  = $statement -> fetchAll(PDO::FETCH_ASSOC);
        if (count($blogs) == 0) {
            $id = 1;
        }else{
            $id = count($blogs) + 1;
        }
    }
    catch(Exception $e){
        die('Error in insert data' . $e -> getMessage());
    }