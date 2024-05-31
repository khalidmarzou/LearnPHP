<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/css/output.css">
        <title>Reservation En cours</title>
    </head>
    <body>
        <header class="bg-green-200 py-10 text-black font-bold text-5xl flex justify-between px-10 items-center shadow-md">Reservation En cours
            <div class="flex flex-col text-lg font-normal items-center">
                Bonjour <?= $client -> nom . ' ' . $client -> prenom; ?>
                <span>Cin num : <?= $client -> cin ?></span>
            </div>
            <div class="text-xl flex gap-5 items-center">
                <a href="/" class="bg-orange-300 py-3 px-5 rounded-md hover:bg-orange-500 cursor-pointer text-white font-bold">Lister Hotels</a>
                <a href="/deconnection" class="bg-purple-300 py-3 px-5 rounded-md hover:bg-purple-500 cursor-pointer text-white font-bold">Deconnextion</a>
            </div>
        </header>
        <main class="w-full h-[85%] flex flex-col items-center justify-center p-10 overflow-y-auto">
            <?php if(!empty($allInfos)) : ?>
                <?php foreach($allInfos as $info) : ?>
                    <article class="bg-blue-100 rounded-md p-7 w-1/2 flex justify-between">
                        <div>
                            <div class="py-3">
                                <?php for( $i = 0; $i < $info -> nombre_etoile ; $i ++ ) : ?>
                                    <i class="fa-solid fa-star" style="color: #FFD43B;"></i>
                                <?php endfor; ?>
                            </div>
                            <h1 class="text-3xl font-bold"><?= $info -> titre ?></h1>
                            <p class="text-gray-700">Adresse : <?= $info -> adresse ?></p>
                            <p>nombre de places : <?= $info -> nombre_de_places ?></p>
                            <p class="text-red-700">Prix : <?= $info -> prix_par_nuit ?> dhs</p>
                        </div>
                            <div class="flex flex-col gap-3">
                                <label for="dateDebut">Date Debut :</label>
                                <input type="date" name="dateDebut" id="dateDebut" min="2024-05-31" class="bg-gray-300 rounded px-5 py-2 outline-none" value="<?= $info -> date_debut_sejour ?>" disabled/>
                                <label for="dateFin">Date Fin :</label>
                                <input type="date" name="dateFin" id="dateFin" min="2024-05-31" class="bg-gray-300 rounded px-5 py-2 outline-none" value="<?= $info -> date_fin_sejour ?>" disabled />
                                <input type="submit" value="Reserver" class="bg-green-400 px-5 py-2 rounded-md text-white font-bold hover:bg-green-300 cursor-pointer">
                            
                            </div>
                    </article>
                <?php endforeach; ?>
            <?php else: ?>
                <h1 class="text-red-400 font-bold text-3xl text-center">There no reservation</h1>
            <?php endif; ?>
        </main>
    </body>
</html>