<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Intern Management</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    </head>
    <body class="bg-gray-100">
        <div class="container mx-auto p-4">
            <header class="bg-gray-800 p-4 flex justify-between items-center text-white">
                <span class="text-lg font-semibold">Private Space</span>
                <a class="bg-orange-500 hover:bg-orange-600 text-white py-2 px-4 rounded" href="/logout">
                    Logout
                </a>
            </header>
            <main class="bg-white shadow-lg rounded-lg mt-4 p-6">
                <h1 class="text-3xl font-bold text-center mb-4">Hello <span class="text-orange-500"><?= $admin -> nom . " " . $admin -> prenom ?></span></h1>
                <h1 class="text-xl font-light text-<?= $color ?? "" ?>-500 text-center"><?= $message ?? "" ?></h1>
                <div class="flex justify-end mb-4">
                    <a href="/dashboard/add" class="bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded flex items-center">
                        <i class="fas fa-plus mr-2"></i> Add
                    </a>
                </div>
                
                <table class="min-w-full bg-white">
                    <thead>
                        <tr class="w-full bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-4 text-left">Name</th>
                            <th class="py-3 px-4 text-left">First Name</th>
                            <th class="py-3 px-4 text-left">Date of Birth</th>
                            <th class="py-3 px-4 text-left">Profile Picture</th>
                            <th class="py-3 px-4 text-left">Field</th>
                            <th class="py-3 px-4 text-left">Edit</th>
                            <th class="py-3 px-4 text-left">Delete</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">

                        <?php
                            foreach($stagiaires as $stagiaire){
                                $db -> query("SELECT * FROM filiere WHERE idFiliere = :idFiliere");
                                $db -> bind(":idFiliere", $stagiaire -> idFiliere);
                                $db -> single();
                                $filiere = $db -> single() -> intitue;
                                echo <<<EOT
                                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                                            <td class="py-3 px-4 text-left">{$stagiaire -> nom}</td>
                                            <td class="py-3 px-4 text-left">{$stagiaire -> prenom}</td>
                                            <td class="py-3 px-4 text-left">{$stagiaire -> dateNaissance}</td>
                                            <td class="py-3 px-4 text-left">
                                                <img src="{$stagiaire -> photoProfil}" alt="Profile" class="h-10 w-10 rounded-full">
                                            </td>
                                            <td class="py-3 px-4 text-left">$filiere</td>
                                        <form action="/dashboard/edit" method="GET">
                                            <input type="hidden" name="id" value="{$stagiaire -> idStagiaire}" />
                                            <td class="py-3 px-4 text-left">
                                                <button type="submit" class="text-purple-500 hover:text-purple-700">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                            </td>
                                        </form>
                                        <form action="/dashboard/delete" method="GET">
                                            <input type="hidden" name="id" value="{$stagiaire -> idStagiaire}" />
                                            <td class="py-3 px-4 text-left">
                                                <button type="submit" class="text-red-500 hover:text-red-700">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </td>
                                        </form>
                                        </tr>
                                EOT;
                            }
                        ?>
                        
                    </tbody>
                </table>
            </main>
        </div>
        <script src="/scripts/espacePrivee.js"></script>
    </body>

</html>
<?php
    $_SESSION['message'] = "";
    $_SESSION["color"] = "";