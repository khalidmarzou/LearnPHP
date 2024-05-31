<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/css/output.css">
        <title>Connection</title>
    </head>
    <body class="w-screen h-screen bg-gray-50 flex justify-center items-center">
        <form action="/connection" method="POST" class="h-[70%] w-1/2 border flex flex-col justify-center items-center gap-5 font-bold bg-orange-50 rounded-lg">
            
                <div class="w-1/2 flex justify-between items-center">
                    <label for="login">Login :</label>
                    <input type="text" id="login" name="login" class="rounded-md outline-none border-b-2 px-5 py-2" />
                </div>
                <div class="w-1/2 flex justify-between items-center">
                    <label for="motPasse">Mot de passe :</label>
                    <input type="password" id="motPasse" name="motPasse" class="rounded-md outline-none border-b-2 px-5 py-2" />
                </div>
                <div class="w-1/2 flex justify-start items-center">
                    <span class="text-red-400 font-light"><?= $errorMsg ?></span>
                </div>
                <div class="w-1/2 flex justify-end items-center">
                    <input type="submit" value="Connecter" class="bg-orange-300 py-3 px-10 rounded-md hover:bg-orange-500 cursor-pointer text-white font-bold">
                </div>
            
        </form>
    </body>
</html>