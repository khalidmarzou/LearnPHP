<?php
    $salutaion = "Hello World";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Str Function</title>
</head>
<body class="flex justify-between h-screen w-screen bg-gray-50 gap-2 p-2">
    <div class="h-full w-[50%] border flex flex-col">
        <h1 class="text-2xl text-red-300"> --\> Str Methods :</h1>
        <div class="p-2 text-gray-500">
            <h3 ><?= 'Original Str : ' . $salutaion ?></h3>
            <h3 ><?= 'Lower case : ' . strtolower($salutaion) ?></h3>
            <h3 ><?= 'Upper case : ' . strtoupper($salutaion) ?></h3>
            <h3 ><?= 'Str Reapet : ' . str_repeat('-', 60) ?></h3>
            <pre>
                <?= 'explode an string to array : ' . '<br />' . var_dump(explode(' ', $salutaion)) ?>
            </pre>
        </div>
    </div>
    <div class="h-full w-[50%] border flex flex-col">
        <h1 class="text-2xl text-red-300"> --\> Date Method :</h1>
        <div class="p-2 text-gray-500">
            <h3><?= 'Time Now is " date("h:i:sa") " : ' . date("h:i:sa") ?></h3>
            <h3 ><?= 'Date Time of Now : ' . date("Y-m-d H:i:s") ?></h3>
        </div>
    </div>
</body>
</html>