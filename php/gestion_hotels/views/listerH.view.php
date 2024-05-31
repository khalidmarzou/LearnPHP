<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/css/output.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
        <title>Gestion Hotels</title>
    </head>
    <body class="flex flex-col h-screen w-screen">
        <header class="bg-green-200 py-10 text-black font-bold text-5xl flex justify-between px-10 items-center shadow-md">Gestion des Hotels
            <div class="text-xl flex gap-5 items-center">
                <a href="/reservation" class="bg-orange-300 py-3 px-5 rounded-md hover:bg-orange-500 cursor-pointer text-white font-bold">Liste reservation</a>
                <a href="/connection" class="bg-purple-300 py-3 px-5 rounded-md hover:bg-purple-500 cursor-pointer text-white font-bold">Connextion</a>
            </div>
        </header>
        <main class="p-20 flex flex-col justify-center items-center relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-gray-700 uppercase">
                    <tr>
                        <th scope="col" class="px-6 py-3 bg-blue-50">
                            Titre
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Adresse
                        </th>
                        <th scope="col" class="px-6 py-3 bg-blue-50">
                            Prix par nuit
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Type
                        </th>
                        <th scope="col" class="px-6 py-3 bg-blue-50">
                            Nombre de place
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($hotels as $hotel) : ?>
                        <tr class="border-b border-gray-200">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-blue-50">
                                <?= $hotel["titre"] ?> 
                            </th>
                            <td class="px-6 py-4">
                                <?= $hotel["adresse"] ?> 
                            </td>
                            <td class="px-6 py-4 bg-blue-50">
                                <?= $hotel["prix_par_nuit"] . ' dhs' ?> 
                            </td>
                            <td class="px-6 py-4 flex justify-start items-center">
                                <?php for( $i = 0; $i < $hotel['nombre_etoile'] ; $i ++ ) : ?>
                                    <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                <?php endfor; ?>
                            </td>
                            <td class="px-6 py-4 bg-blue-50">
                                <?= $hotel["nombre_de_places"] ?> 
                            </td>
                            <td class="px-6 py-4">
                                <a onclick="deleteH(<?= $hotel['id_hotel'] ?>)" class="bg-red-600 rounded-md text-white font-bold py-2 px-5 hover:bg-red-400 cursor-pointer" >Supprimer</a>
                            </td>
                        </tr>
                   <?php endforeach; ?>
                </tbody>
            </table>

            <div class="w-full flex items-center justify-end p-5">
                <a href="/controllers/ajouterH.php" class="bg-green-600 rounded-md text-white font-bold py-2 px-5 hover:bg-green-400 cursor-pointer" >Ajouter Hotel</a>
            </div>
        </main>
        <script src="/js/script.js"></script>
    </body>
</html>