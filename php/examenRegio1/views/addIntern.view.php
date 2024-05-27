<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Intern</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="max-w-3xl mx-auto mt-10 p-6 bg-white rounded-lg shadow-md">
        <div class="flex items-start mb-6 flex-col">
            <a href="/dashboard" class="text-blue-500 text-2xl">
                <i class="fas fa-arrow-left"></i>
            </a>
            <h1 class="text-2xl font-bold ml-4">Add Intern</h1>
        </div>
        <form action="/controllers/addIntern.php" method="POST" enctype="multipart/form-data">
            <div class="mb-4">
                <label for="family_name" class="block text-gray-700 font-medium mb-2">Family Name</label>
                <input type="text" id="family_name" name="family_name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="first_name" class="block text-gray-700 font-medium mb-2">First Name</label>
                <input type="text" id="first_name" name="first_name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="birthday" class="block text-gray-700 font-medium mb-2">Birthday</label>
                <input type="date" id="birthday" name="birthday" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-4">
                <label for="profile_picture" class="block text-gray-700 font-medium mb-2">Profile Picture</label>
                <input type="file" id="profile_picture" name="profile_picture" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" accept="image/*">
            </div>
            <div class="mb-6">
                <label for="field" class="block text-gray-700 font-medium mb-2">Field of Study</label>
                <select id="field" name="field" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    <option value="">Select Field of Study</option>
                    <?php
                        require dirname(__DIR__) .  "/controllers/fields.php";
                        foreach($filieres as $filiere){
                            echo "<option value='{$filiere -> idFiliere}'>{$filiere -> intitue}</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="flex justify-end">
                <button type="submit" class="px-6 py-2 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                    Add Intern
                </button>
            </div>
        </form>
    </div>
</body>
</html>
