<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Blog</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Simple Blog</h1>
        <div class="card">
            <div class="card-header">
                Create New Blog
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <div class="form-group">
                        <label for="content">Content:</label>
                        <textarea class="form-control" id="content" name="content" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Create Blog</button>
                </form>
            </div>
        </div>


        <div class="mt-5">
            <h2 class="text-warning">Existing Blogs</h2>
            <?php
            // Connection and create if POST , and Delete If GET :
            require_once 'db.php';
            require_once 'sendBlogs.php';
            require_once 'deleteBlog.php';

            // display Blogs From data base :
            require_once 'getBlogs.php';
            foreach ($blogs as $blog) {
                echo '<div class="card mt-3">';
                echo '<h3 class="card-header bg-info text-lg">' . $blog["title"] . '</h3>';
                echo '<div class="card-body">';
                echo '<p><strong class="text-primary">Author:</strong> ' . $blog["username"] . '</p>';
                echo '<p><strong class="text-primary">Date:</strong> ' . $blog["date_pub"] . '</p>';
                echo '<p><strong class="text-primary">Content:</strong><br>' . $blog["content"] . '</p>';
                echo '</div>';
                echo '<form method="GET" action="">';
                echo '<input type="hidden" name="id" value="' . $blog["id"] . '"/>';
                echo '<input type="submit" href="#" class="btn btn-danger w-25 m-2" onclick="deleteBlog(event)" value="Delete This Blog"/>';
                echo '</form>';
                echo '</div>';
            }
            
            ?>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
