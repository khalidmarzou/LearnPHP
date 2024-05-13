<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../src/output.css">
    <title>SERVER Super Global Variables</title>
</head>
<body class="flex justify-center items-center h-screen w-screen">
    <form action="/" method="POST">
        <input type="text" name="name" id="name">
        <input type="submit" value="Envoyer" class="bg-green-400 px-24 py-4">
    </form>
</body>
</html>
<pre>
<?php
    // $GLOBALS $_SERVER $_REQUEST $_POST $_GET $_FILES $_EW $_COOCKIE $_SESSION
    $liste = ['nom' => "MARZOUG"];
    echo $liste['prenom'] ?? "";
    // var_dump($_SERVER);
    echo "<br/>";
    // Common server Variables :
    
?>
</pre>