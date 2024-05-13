<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../src/output.css" rel="stylesheet">
    <title>sessio02 | PHP</title>
</head>
<body class="bg-gray-100">
    <?php
        $prenom = "Youssef";
        $nom = "Rahmani";
        $age = 10;
        $isStudent = true;
        $note = 14.5;
    ?>
    <header class="flex justify-center items-center h-32 bg-blue-500">
        <div class="text-3xl font-bold">M107 : Developper des sites web dynamiques</div>
    </header>
    <div>
        <?php echo "<h1 class=\"text-[red] text-3xl text-center py-[10px] \">This is a PHP text<h1/>"; ?>
    </div>
    <main class="container mx-auto px-32 w-full">
        <div class="h-64 border border-gray-200 rounded-md bg-white p-4">
            <?php
                echo "I am {$prenom} {$nom}, I'm  $age  years old,  and I am a computer developer trainee !";
                echo "<br />";
                echo $prenom . $nom; # concatenation de deux strings
            ?>
        </div>
    </main>
</body>
</html>