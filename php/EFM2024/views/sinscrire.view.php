<?php require_once "partials/head.view.php" ?>
<?php require_once "partials/nav.view.php" ?>


<div class="bg-white p-8 rounded-lg shadow-lg max-w-md w-full mt-20">
    <h1 class="text-2xl font-bold mb-6 text-center">Formulaire de Voyage</h1>
    <form action="/sinscrire" method="POST">
        <div class="mb-4">
            <label for="villeD" class="block text-gray-700 font-medium mb-2">Ville de départ</label>
            <select id="villeD" name="villeD" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                <option value="" disabled selected>Choisissez la ville de départ</option>
                <?php foreach($villes as $ville): ?>
                    <option value="<?= $ville -> villeD ?>"><?= $ville -> villeD ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-4">
            <label for="villeA" class="block text-gray-700 font-medium mb-2">Ville d'arrivée</label>
            <select id="villeA" name="villeA" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                <option value="" disabled selected>Choisissez la ville d'arrivée</option>
                <?php foreach($villes as $ville): ?>
                    <option value="<?= $ville -> villeA ?>"><?= $ville -> villeA ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-4">
            <label for="dateVoyage" class="block text-gray-700 font-medium mb-2">Date de voyage</label>
            <input type="date" id="dateVoyage" name="dateVoyage" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>
        <div class="mb-4">
            <label for="np" class="block text-gray-700 font-medium mb-2">Nombre de personnes</label>
            <input type="number" id="np" name="np" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Entrez le nombre de personnes" min="1" required>
        </div>
        <button type="submit" class="w-full bg-blue-500 text-white px-3 py-2 rounded-lg font-medium hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Envoyer</button>
    </form>
</div>



<?php require_once "partials/footer.view.php";