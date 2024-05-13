<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>GET && POST</title>
</head>
<body class="flex h-screen w-screen justify-center items-center gap-5">
    <form action="" method="GET" class="w-[50%] flex flex-col items-center justify-center gap-5">
        <input type="number" name="id" id="id" placeholder="Id" class="border h-[50px] w-[80%] outline-none rounded-md px-5">
        <input type="text" name="nom" id="nom" placeholder="Full Name" class="border h-[50px] w-[80%] outline-none rounded-md px-5">
        <input type="text" name="email" id="email" placeholder="E-Mail" class="border h-[50px] w-[80%] outline-none rounded-md px-5">
        <input type="submit" value="Envoyer" class="bg-green-400 px-20 py-5 rounded-lg cursor-pointer">
    </form>
    <form action="" method="GET" class="w-[50%] flex flex-col items-center justify-center gap-5">
        <p class="text-3xl font-bold">
            <?php
                var_dump($_POST);
            ?>
        </p>
    </form>
</body>
</html>