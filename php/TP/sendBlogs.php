<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $newBlog = [
                "username" => $_POST["username"],
                "title" => $_POST["title"],
                "content" => $_POST["content"],
                "date" => date("Y-m-d H:i:s")
            ];
            try { 
                $query = "INSERT INTO Blog values(:id,:title,:content,:username,:date_pub)";
                $statement = $pdo->prepare($query);
                $statement -> execute([
                    ':id' => $id,
                    ':title' => $newBlog['title'],
                    ':content' => $newBlog['content'],
                    ':username' => $newBlog['username'],
                    ':date_pub' => $newBlog['date'],
                ]);
            }
            catch(Exception $e){
                die('Error in insert data' . $e -> getMessage());
            }
        header("Location: tpBlog.php"); 
        }