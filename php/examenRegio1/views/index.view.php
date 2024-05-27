<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="w-full max-w-md mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
        <header class="bg-blue-600 p-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-5 p-3">
                    <i class="fa-solid fa-lock text-white text-3xl"></i>
                    <span class="text-white text-xl font-semibold">Interns Management</span>
                </div>
            </div>
        </header>
        <div class="p-6">
            <h2 class="text-2xl font-bold text-center text-gray-700 mb-4">Authentication</h2>
            <form action="/" method="POST">
                <div class="mb-4">
                    <label for="login" class="block text-gray-700 text-sm font-bold mb-2">Login</label>
                    <input type="text" id="login" name="login" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Username">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                    <input type="password" id="password" name="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Password">
                </div>
                <div class="mb-4 text-red-400 font-light">
                    <span><?= $errorMessage ?? "" ?></span>
                </div>
                <div class="flex items-center justify-between">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Sign In</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
