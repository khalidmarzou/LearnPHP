<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
        <link rel="stylesheet" href="/css/output.css">
        <title>Liste Reservation</title>
    </head>
    <body class="h-screen w-screen flex flex-col">
        <header class="bg-green-200 py-10 text-black font-bold text-5xl flex justify-between px-10 items-center shadow-md">Liste Reservation
            <div class="text-xl flex gap-5 items-center">
                <a href="/" class="bg-orange-300 py-3 px-5 rounded-md hover:bg-orange-500 cursor-pointer text-white font-bold">Lister Hotels</a>
                <a href="/connection" class="bg-purple-300 py-3 px-5 rounded-md hover:bg-purple-500 cursor-pointer text-white font-bold">Connextion</a>
            </div>
        </header>
        <main class="w-full h-[85%] flex">
            <aside class="bg-gray-200 w-[30%] h-full p-5">
                <form action="/controllers/listeReservation.php">
                    <label class="block mb-2 text-sm font-bold text-gray-700" for="type">
                        Type d'Hotel
                    </label>
                    <select id="type" name="type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 outline-none">
                        <option value="" selected>Choisir Le type</option>
                        <?php foreach($types as $type) : ?>
                            <option value="<?= $type['id_type'] ?>"><?= $type['nombre_etoile'] . ' etoiles' ?></option>
                        <?php endforeach; ?>
                    </select>
                    <input type="submit" value="Filtrer" class="bg-green-600 rounded-md text-white font-bold py-2 px-5 hover:bg-green-400 my-4 cursor-pointer">
                </form>
            </aside>
            <section class="w-[70%] bg-gray-50 h-full p-7 flex flex-col gap-3 overflow-y-auto">
                <?php foreach($hotels as $hotel) : ?>
                    <article class="bg-blue-100 rounded-md p-7 flex justify-between">
                        <div>
                            <div class="py-3">
                                <?php for( $i = 0; $i < $hotel['nombre_etoile'] ; $i ++ ) : ?>
                                    <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                <?php endfor; ?>
                            </div>
                            <h1 class="text-3xl font-bold"><?= $hotel["titre"] ?></h1>
                            <p class="text-gray-700">Adresse : <?= $hotel["adresse"] ?></p>
                            <p>nombre de places : <?= $hotel["nombre_de_places"] ?></p>
                            <p class="text-red-700">Prix : <?= $hotel["prix_par_nuit"] ?> dhs</p>
                        </div>
                        <form action="/controllers/listReservation.php" method="POST">
                            <div class="flex flex-col gap-3">
                            
                                <input type="hidden" name="id_hotel" value="<?= $hotel["id_hotel"] ?>">
                                <input type="hidden" name="id_client" value="">
                                <label for="dateDebut">Date Debut :</label>
                                <input type="date" name="dateDebut" id="dateDebut" min="2024-05-31" class="bg-gray-300 rounded px-5 py-2 outline-none" required/>
                                <label for="dateFin">Date Fin :</label>
                                <input type="date" name="dateFin" id="dateFin" min="2024-05-31" class="bg-gray-300 rounded px-5 py-2 outline-none" required />
                                <input type="submit" value="Reserver" class="bg-green-400 px-5 py-2 rounded-md text-white font-bold hover:bg-green-300 cursor-pointer">
                            
                            </div>
                        </form>
                    </article>
                <?php endforeach; ?>
            </section>
        </main>
    </body>
</html>