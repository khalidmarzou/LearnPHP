<nav class="bg-blue-600 p-4 w-full">
    <div class="container mx-auto flex justify-between items-center">
        <div class="flex items-center">
            <span class="text-white text-xl font-bold"><?= $userInfo -> nom ?></span>
            <span class="text-white ml-2"><?= $userInfo -> fonction ?></span>
        </div>
        <ul class="flex space-x-4">
            <li><a href="/sinscrire" class="text-white hover:text-gray-300 hover:underline">S'inscrire</a></li>
            <li><a href="/listIns" class="text-white hover:text-gray-300 hover:underline">Liste de Voyage</a></li>
            <li><a href="/logout" class="text-white hover:text-gray-300 hover:underline">Se Déconnecter</a></li>
        </ul>
    </div>
</nav>