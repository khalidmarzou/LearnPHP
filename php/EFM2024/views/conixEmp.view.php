<?php require_once "partials/head.view.php"; ?>

    <div class="w-[30%] h-1/2 my-auto">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 h-[70%]" method="POST" action="/">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="user">
                    User
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="user" name="user" type="text" placeholder="User ....">
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Mot de passe
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" name="password" type="password" placeholder="******************">
            </div>
            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Connexion
                </button>
            </div>
        </form>
        <p class="text-center text-gray-500 text-xs">
            &copy;2023 Gestion de Voyage.
        </p>
    </div>


<?php require_once 'partials/footer.view.php';