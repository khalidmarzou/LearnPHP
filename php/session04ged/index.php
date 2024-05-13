<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./../src/output.css">
    <title>Document</title>
  </head>
  <body class="flex justify-center items-center w-screen h-screen gap-7">
    <?php
        $signIN = true;
        $today = date('N'); // from 1 to 7 ,number of day in the week  ;
        $etudiants = ["ait said","baddioui","boukri","bakkarouch"];
    ?>
    <main class="w-[40%] bg-orange-200 h-[70%] rounded-md flex flex-col  justify-center items-center gap-7">
        <?php   if ($signIN == true) :  ?>
            <h1 class="text-2xl font-extrabold my-7">You Have Account just Login</h1>
            <div class="w-full flex justify-center items-center">
                <label for="email" class="w-[30%] text-xl">E-mail :</label>
                <input type="text" class="py-3 px-4 outline-none rounded-md border border-blue-500" name="email" id="email" />
            </div>
            <div class="w-full flex justify-center items-center">
                <label for="psswr" class="w-[30%] text-xl">PassWord :</label>
                <input type="password" class="py-3 px-4  outline-none rounded-md border border-blue-500" name="psswrd" id="psswr" />
            </div>
            <button class="bg-green-300 text-xl font-mono p-3 rounded-lg hover:bg-gray-500 hover:text-white">Login</button>
        <?php else : ?>
            <h1 class="text-2xl font-extrabold py-7">Pls Sign In</h1>
            <div class="w-full flex justify-center items-center">
                <label for="name" class="w-[30%] text-xl">Full Name :</label>
                <input type="text" class="py-3 px-4 outline-none rounded-md border border-blue-500" name="name" id="name" />
            </div>
            <div class="w-full flex justify-center items-center">
                <label for="email" class="w-[30%] text-xl">E-mail :</label>
                <input type="text" class="py-3 px-4 outline-none rounded-md border border-blue-500" name="email" id="email" />
            </div>
            <div class="w-full flex justify-center items-center">
                <label for="psswr" class="w-[30%] text-xl">PassWord :</label>
                <input type="password" class="py-3 px-4 outline-none rounded-md border border-blue-500" name="psswrd" id="psswr" />
            </div>
            <button class="bg-red-300 text-xl font-mono p-3 rounded-lg hover:bg-gray-500 hover:text-white">Sign In</button>
        <?php endif?>
    </main>
    <!--
    <aside class="bg-gray-200 rounded p-5">
       <?php /*
                for ($i = 0; $i < count($etudiants); $i++){
                    echo "<h3 class='text-xl text-red-400'>{$etudiants[$i]}<h3>". "<br />";
                }; ?>
        
                <ul type="square">
                    <li>bfgg</li>
        <?php
                    foreach($etudiants as $index => $etudiant){
                        echo "<li>{$etudiant} | {$index}</li>";
                    } */
        ?>
               </ul>
        
        </aside>
        -->
    </body>
</html>