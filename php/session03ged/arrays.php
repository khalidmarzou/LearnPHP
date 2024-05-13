<body style="display:flex;justify-content:center;">
    <div style="width:80%;border:solid 1px;padding:30px;border-radius:15px;overflow:auto;">
        <h1 style="color:orange;"># Learn PHP with LEGEDANI :</h1>
            <?php
                echo "<pre>";
                // Arrays on PHP :
                    $nombres = [12,0,4,90];
                    echo "<br />";
                    echo "<br />";
                    $stagiaires = array("marzoug","sidqui","mahfoud");
                    var_dump($nombres);
                    echo "<br />";
                    echo "<br />";
                    var_dump($stagiaires);
                    echo "<br />";
                    echo "<br />";
                    var_dump($stagiaires[0]);
                    echo "<br />";
                    echo "<br />";
                    var_dump($nombres[3]);
                    echo "<br />";
                    echo "<br />";
                    echo $nombres[0] + $nombres[1];
                    echo "<br />";
                    echo "<br />";
                    echo $stagiaires[0] . " - " . $stagiaires[1] . " - " . $stagiaires[2];
                    echo "<br />";
                    echo "<br />";
                    $stagiaires[1] = "SAID";
                    echo "<br />";
                    var_dump($stagiaires);
                    echo "<br />";
                    // les tableaux associatifs :
                        echo "<br />";
                        echo "<br />";
                        $nombre_2 = ["a" => 12,"b" => 34,"c" => 40];
                        var_dump($nombre_2["a"]);
                        echo "<br />";
                        echo "<br />";
                        $etudiant = ['nom' => 'marzoug','prenom' => 'khalid', 'groupe' => 'dd105'];
                        echo $etudiant['nom'];
                        echo "<br />";
                        echo "<br />";
                        $etudiants = [
                            ['nom' => 'marzoug','prenom' => 'khalid', 'groupe' => 'dd105'],
                            ['nom' => 'sidqui','prenom' => 'zakaria', 'groupe' => 'dd105'],
                            ['nom' => 'mahfoud','prenom' => 'anas', 'groupe' => 'dd105']
                        ];
                        echo "<br />";
                        echo $etudiants[1]['prenom'];
                        echo "<br />";
                        echo "<br />";
                        // like push ; ajouter a la fin d array
                        $etudiants[] = ['nom' => 'ouafik','prenom' => 'mohamed', 'groupe' => 'dd105'];
                        echo "<br />";
                        echo "<br />";
                        var_dump($etudiants);
                        echo "<br />";
                        echo "<br />";
                        // function specifique pour ajouter des element a la fin d array like push in python and js :
                        array_push($etudiants,['nom' => 'ouafik','prenom' => 'mohamed', 'groupe' => 'dd105']);
                        echo "<br />";
                        echo "<br />";
                        var_dump($etudiants);
                        echo "<br />";
                        echo "<br />";
                echo "</pre>";
            ?>
    </div>
</body>