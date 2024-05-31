<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/css/output.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
        <title>Ajouter Hotel</title>
    </head>
    <body class="h-full bg-gray-400 flex justify-center items-center">
        <div class="mx-auto w-1/2">
            <div class="flex justify-center px-6 py-12">
                <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                    <div class="w-full h-auto bg-gray-400 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg"
                        style="background-image: url('https://thumbs.dreamstime.com/b/luxury-hotel-4480742.jpg')"></div>
                    <div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none">
                        <h3 class="py-4 text-2xl text-center text-gray-800">Ajouter Hotel</h3>
                        <form class="px-8 pt-6 pb-8 mb-4 bg-white rounded" method="POST" action="/controllers/ajouterH.php">
                        <div class="mb-4">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="titre">
                                    Titre
                                </label>
                                <input
                                    class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="titre"
                                    type="text"
                                    placeholder="Nom d'Hotel"
                                    name="titre"
                                    required
                                />
                            </div>
                            <div class="mb-4 md:flex md:justify-between">
                                <div class="mb-4 md:mr-2 md:mb-0">
                                    <label class="block mb-2 text-sm font-bold text-gray-700" for="prix">
                                        Prix par nuit
                                    </label>
                                    <input
                                        class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        id="prix"
                                        type="number"
                                        placeholder="Prix par nuit"
                                        name="prix"
                                        required
                                    />
                                </div>
                                <div class="md:ml-2">
                                    <label class="block mb-2 text-sm font-bold text-gray-700" for="nbplace">
                                        Nombre de Places
                                    </label>
                                    <input
                                        class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        id="nbplaces"
                                        type="number"
                                        placeholder="Nombre de places"
                                        name="nbplaces"
                                        required
                                    />
                                </div>
                            </div>
                            <div class="mb-4">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="adresse">
                                    Adresse
                                </label>
                                <input
                                    class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="adresse"
                                    type="text"
                                    placeholder="Adresse"
                                    name="adresse"
                                    required
                                />
                            </div>
                            <div class="mb-4">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="type">
                                    Type d'Hotel
                                </label>
                                <select id="type" name="type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 outline-none" required>
                                    <option value="" selected>Choisir Le type</option>
                                    <?php foreach($types as $type) : ?>
                                        <option value="<?= $type['id_type'] ?>"><?= $type['nombre_etoile'] . ' etoiles' ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="mb-6 text-center">
                                <button
                                    class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline"
                                    type="submit"
                                >
                                    Ajouter l'Hotel
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>